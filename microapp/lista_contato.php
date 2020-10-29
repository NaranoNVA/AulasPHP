<?php
require_once 'db.php';

//Consulta para listar os contatos
$tabela = array();

$lista_sql = 'SELECT id, nome, whatsapp 
                FROM contatos 
                ORDER BY nome';
foreach ($objBanco->query( $lista_sql ) as $registro) {
    
    $tabela[$registro['id']] = [ 'Nome' => $registro['nome'] , 'WhatsApp' => $registro['whatsapp'] ];
}

include 'lista_contato_tpl.php';