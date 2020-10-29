<?php

require_once 'db.php';

//Se clicar no botao gravar
if ( isset($_POST['id']) ){ //isset => se estiver setado
    $id = preg_replace('/\D/', '', $_POST['id']);
    $nome = $_POST['nm'];
    $whatsapp = $_POST['whats'];

    $objStmt =  $objBanco->prepare(
        'UPDATE contatos 
        SET nome = :nm, whatsapp = :wzap
                        WHERE id = :id');

$objStmt->bindParam(':id', $id);
$objStmt->bindParam(':nm', $nome);
$objStmt->bindParam(':wzap', $whatsapp);      

if($objStmt->execute()){
    $msg = 'Contato Editado com sucesso!';
}
    $msg = 'Deu Ruim';
}

$_GET['id'] = $_GET['id'] ?? $_POST["id"] ?? null;

$id = preg_replace('/\D/', '', $_GET['id']);

$contato = array();

$sql = "SELECT id, nome, whatsapp 
                FROM contatos 
                WHERE id = $id";

foreach ( $objBanco->query($sql) as $registro ){
    $contato =  $registro;
}

include 'edita_contato_tpl.php';