<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php'; //Configuração do SQL pelo include

/* Configuração do SQL pelas variaveis
$dns = 'sqlsrv:Server=localhost\sqlexpress;Database=PhpAula';
$user = 'sa';
$password = 'A3154868e@';
$db = new PDO( $dns, $user, $password );
*/



$sql = 'SELECT nome, telefone FROM Cliente';

foreach ($db->query($sql) as $registro) {

        echo "Nome: {$registro['nome']} Telefone: {$registro['telefone']}<br>\n";

}