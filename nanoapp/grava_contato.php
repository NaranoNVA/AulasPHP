<?php
require_once 'db.php';

//Como evitar SQL injection

//Preparar Consulta
$objStmt =  $objBanco->prepare(
'INSERT INTO contatos (nome, whatsapp) 
                VALUES ( :nome, :zapzap )');

//Insere os parametros
$objStmt->bindParam(':nome', $_POST['nm']);
$objStmt->bindParam(':zapzap', $_POST['whats']);

//Executa
if ( $objStmt->execute() ){
    $msg = 'Cadastrado com sucesso';
}else{
    $msg = 'Não cadastrado, deu erro =/';
}

//Chama templete
include 'grava_contato_tpl.php';