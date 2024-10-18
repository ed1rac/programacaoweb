<?
/**
* Exemplo de Uso da classe cláusulas SQL

* @author Alfred Reinold Baudisch
* @email alfred_baudisch@hotmail.com
* @date Jan 16, 2004
*/

/*
A tabela de banco de dados MySQL usada para esse exemplo é a seguinte:

CREATE TABLE `clientes` (
  `id` bigint(20) NOT NULL auto_increment,
  `nome` varchar(255) NOT NULL default '',
  `cidade` varchar(255) NOT NULL default '',
  `telefone` varchar(20) NOT NULL default '',
  `cpf` int(11) NOT NULL default '0',
  `idade` tinyint(2) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

*/

// Inclui a classe de abstração de banco de dados
require "mysql.class.php";

// Cria o objeto
$sql = new database;

// Conecta com o banco de dados
$sql->_connect("localhost", false, "root", "root", "test", false);

// Desejo agora inserir alguns dados na tabela clientes
$sql->gera_insert("clientes", array("nome", "cidade", "telefone", "cpf", "idade"), array("Antonio Carlos", "Campinas", "3333-3333", 777777777, 26));
// Executa a query SQL acima
$sql->query();

// Desejo alterar o nome e a idade do cliente que possui o cpf 777777777
$sql->gera_update("clientes", array("nome", "idade"), array("José Antonio", 28), "WHERE cpf = 777777777");
// Executa a query SQL acima
$sql->query();

echo "<style type=text/css>\n";
echo "TH{font-family: verdana; font-size: 10pt; background-color: #FFFFD5; font-weight: bold; border: 1 solid black}\n";
echo "TD{font-family: verdana; font-size: 8pt; border: 1 solid black}\n";
echo "</style>\n\n";

// Exibe agora os clientes cadastrados
$SQL = "SELECT * FROM clientes ORDER BY id";
$sql->query($SQL);

echo "<center><font face=verdana size=2>Exibindo Clientes. Total: <B>" . $sql->num_rows() . "</B></font><BR><BR>\n\n";

echo "<table border=0 cellpadding=2 cellspacing=1 align=center>\n";
echo "<tr><th>ID</th><th>Nome</th><th>Cidade</th><th>Telefone</th><th>CPF</th><th>Idade</th></tr>\n";

while($dados = $sql->fetch_array())
{
    echo "<tr>\n";
    echo "<td>" . $dados["id"] . "</td><td>" . $dados["nome"] . "</td><td>" . $dados["cidade"] . "</td><td>" . $dados["telefone"] . "</td><td>" . $dados["cpf"] . "</td><td>" . $dados["idade"] . "</td>\n";
    echo "</tr>\n";
}

echo "</table>\n";
?>