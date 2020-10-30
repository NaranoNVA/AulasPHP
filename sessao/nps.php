<?php
require_once '../microapp/db.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'sessao.php';

include 'header_tpl.php';
include "index_menu_tpl.php";

$nota = $_POST['nota'];
$explicacao = $_POST['explicacao'];

echo "<div> <p> Você deu nota $nota com a explicação:</p>";
echo "<p>$explicacao</p></div>";

$objStmt = $objBanco->prepare(
  "INSERT INTO notas (nota, exaplicacao) VALUES (':nota', ':explicacao')"
);

$objStmt->bindParam(':nota', $nota);
$objStmt->bindParam(':explicacao', $explicacao);

if( $objStmt->execute() ){
    echo 'Nota enviada com sucesso.';
}else{
    echo 'Nota não enviada.';
}

echo "<div><a href='agradecimento.php?nota=$nota'>Seguir</a></div>";

include "footer_tpl.php";
?>