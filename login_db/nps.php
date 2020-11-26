<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'sessao.php';
include 'header_tpl.php';
include 'index_menu_tpl.php';


$nota = $_POST['nota'];
$explicacao = $_POST['explicacao'];

echo "<div><p>Você deu a nota $nota pelo motivo \"$explicacao\" </p></div>";

$db = new PDO('sqlsrv:Server=localhost\sqlexpress;Database=PhpAula', 'sa', 'A3154868e@');

$stmt = $db->prepare('	INSERT INTO dbo.nps ( nota, explicacao) VALUES ( :nota, :explicacao)');

$stmt->bindParam(':nota', $nota);					
$stmt->bindParam(':explicacao', $explicacao);	

if ( $stmt->execute() ) {
	echo '<div><span>Pesquisa gravada com sucesso!</p></span>';

} else {
	echo '</p></span> :-( deu erro, tente novamente! </p></span>';
}

echo '<div><a href="./agradecimento.php?nota=' . $nota . '">Seguir</a></div>';

include 'footer_tpl.php';