<?php
// abre o arquivo colocando o ponteiro de escrita no final
$arquivo = fopen('c:\\xampp\\php\\php.ini','r+');

$string = '';

if ($arquivo) {
    while(true) {
        $linha = fgets($arquivo);
        if ($linha==null) break;

        // busca na linha atual o conteudo que vai ser alterado
        if(preg_match("/;extension=pdo_pgsql/", $linha)) {
            $string .= str_replace(";extension=pdo_pgsql", "extension=pdo_pgsql", $linha);
        } else if(preg_match("/;extension=pgsql/", $linha)) {
            $string .= str_replace(";extension=pgsql", "extension=pgsql", $linha);
        } else if(preg_match("/;extension=php_pdo_pgsql/", $linha)) {
            $string .= str_replace(";extension=php_pdo_pgsql", "extension=php_pdo_pgsql", $linha);
        } else if(preg_match("/;extension=pgsql/", $linha)) {
            $string .= str_replace(";extension=php_pgsql", "extension=php_pgsql", $linha);
        } else {
            // vai colocando tudo numa nova string
            $string .= $linha;
        }
    }
    // move o ponteiro para o inicio pois o ftruncate() nao fara isso
    rewind($arquivo);
    // truca o arquivo apagando tudo dentro dele
    ftruncate($arquivo, 0);
    // reescreve o conteudo dentro do arquivo
    if (!fwrite($arquivo, $string)) die('Não foi possível atualizar o arquivo.');
    echo 'Arquivo atualizado com sucesso';
    fclose($arquivo);
}
