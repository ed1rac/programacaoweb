<?php
/*
  Este programa funciona bem com um arquivo index.php em um
  diretório que queremos exibir o conteúdo. O programa se exclui
  automaticamente da lista e é muito fácil de ser modificado
  para que outros arquivos ou diretórios sejam ocultos também.
*/

// Define um array para armazenar os arquivos
$files = array();

// Diretório atual
$d = dir('.');

// Percorre todos os arquivos
while (false !== ($file = $d->read())) {
    // Se o arquivo não é este arquivo, e não começa com "." ou "~"
    // e não termina em LCK, então guarde-o para exibição futura.

    if (($file[0] != '.') && ($file[0] != '~') &&
        (substr($file, -3) != 'LCK') &&
        ($file != basename($_SERVER['PHP_SELF']))
    ) {
        // Guarda o nome do arquivo e dados completos de uma chamada
        // à stat()
        $files[$file] = stat($file);
    }
}

// Fecha o diretório
$d->close();

// Agora vamos exibir o resultado em uma tabela
echo '<style>td { padding-right: 10px; }</style>';
echo '<table style="margin:auto;"><caption>Conteúdo deste diretório:</caption>';
//margin:auto no CSS centraliza a tabela!

// Ordenar os arquivos em ordem alfabética
ksort($files);

// Definir o horário brasileiro:
date_default_timezone_set('Brazil/East');

// Percorremos os arquivos, exibindo uma nova linha na tabela
// para cada um deles.
echo "<tr><td><b>Nome do arquivo</b></td><td><b>Tamanho</b></td><td><b>Data</b></td></tr>";
foreach ($files as $name => $stats) {
    // Inicia a linha e exibe um link com o nome do arquivo
    echo "<tr><td><a href=\"{$name}\">{$name}</a></td>\n";
    // Uma célula com o tamanho do arquivo
    echo "<td align='right'>{$stats['size']}</td>\n";
    // Uma coluna com a data de criação do arquivo
    echo '<td>', date('d/m/Y h:ia', $stats['mtime']), "</td></tr>\n";
}

echo '</table>';