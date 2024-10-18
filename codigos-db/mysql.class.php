<?
/**
* Classe de abstraзгo de MySQL
*
* @author Alfred Reinold Baudisch
* @email alfred_baudisch@hotmail.com
* @date Jun 18, 2003
* @changes Reformulada em Jan 06, 2004
*/

// Inclui o arquivo da classe clausulas_sql para a funзгo database poder extender
require "clausulas_sql.class.php";

class database extends clausulas_sql
{
    /**
    * @param resource $conn
    */
	var $conn;
    /**
    * @param resource $result_id
    */
	var $result_id;
    /**
    * @param resource $result
    */
	var $result;
    /**
    * @param string $last_error
    */
	var $last_error;
	
	/**
    * Conexгo
    *
    * @param string $host
    * @param int $port
    * @param string $user
    * @param string $pass
    * @param string $db
    * @param boolean $persistency
    */
	function _connect ($host, $port = false, $user, $pass = false, $db = false, $persistency = true)
    {
		if($port)
		{
			$conn_string = "$host:$port";
		}
		else
		{
			$conn_string = "$host";
		}

		if($persistency)
        {
			$funcao = "mysql_pconnect";
        }
		else
        {
			$funcao = "mysql_connect";
        }

		if(!$this->conn = @$funcao($conn_string, $user, $pass))
		{
            $this->last_error = @mysql_errno() . ": " . @mysql_error();
			return false;
		}

		if($db)
		{
			if($db = $this->select_db($db))
            {
			    return true;
            }
            else
            {
                return false;
            }
		}

		return $this->conn;
	}

    /**
    * Selecionar Banco de Dados
    *
    * @param string $db
    * @param resource $conn
    */
	function select_db($db, $conn = false)
    {
		if(!$conn)
        {
			$conn = $this->conn;
        }

		$num = @mysql_select_db($db, $conn);

		if(!$num)
		{
			$this->_close($conn);
            $this->last_error = "Invalid database: " . $db;
			return false;
		}

		return $num;
	}

	/**
    * Fechar conexгo e liberar resultados
    *
    * @param resource $conn
    */
	function _close ($conn = false)
    {
		if(!$conn)
        {
			$conn = $this->conn;
        }
		
		if($conn)
		{
			if(@$this->result_id)
            {
				@mysql_free_result($this->result_id);
            }

			$num = @mysql_close($conn);

			return $num;
		}
		else
        {
			return false;
        }
	}

	/**
    * Executa uma consulta SQL
    *
    * @param string $sql
    * @param resource $conn
    * @param resource $result
    * @param resource $transaction
    */
	function query($sql = false, $conn = false, $result = false, $transaction = false)
    {
        if(!$sql)
        {
            $sql = $this->clausula_sql;
        }

        if(!$result)
        {
            $result = &$this->result_id;
        }

		if(!$conn)
        {
			$conn = $this->conn;
        }
		
		if($result = @mysql_query($sql, $conn))
		{
			return $result;
		}
		else
		{
			$this->last_error = @mysql_errno() . ": " . @mysql_error();
			return false;
		}
	}
    
	/**
    * Fetch Array
    *
    * @param resource $result_id
    */
	function fetch_array ($result_id = false)
    {
		if(!$result_id)
        {
			$result_id = $this->result_id;
        }
		
		$this->result = @mysql_fetch_array($result_id, MYSQL_ASSOC);

		return $this->result;
	}

	/**
    * Fetch Row
    *
    * @param resource $result_id
    */
	function fetch_row ($result_id = false)
    {
		if(!$result_id)
        {
			$result_id = $this->result_id;
        }

		$this->result = @mysql_fetch_row($result_id);

		return $this->result;
	}

	/**
    * Fetch Object
    *
    * @param resource $result_id
    */
	function fetch_object ($result_id = false)
    {
		if(!$result_id)
        {
            $result_id = $this->result_id;
        }

		$this->result = @mysql_fetch_object($result_id);

		return $this->result;
	}
	
	/**
    * Nъmero total de itens encontrados
    *
    * @param resource $result_id
    */
	function num_rows ($result_id = false)
    {
		if(!$result_id)
        {
			$result_id = $this->result_id;
        }

		return ($result_id) ? @mysql_num_rows($result_id) : 0;
    }

	/**
    * Ъltimo ID de um campo auto_increment
    */
	function last_id()
    {
		if($this->conn)
		{
			$result = @mysql_insert_id($this->conn);
			return $result;
		}
		else
        {
			return false;
        }
	}
}
?>