<?php

require_once 'db.php';

echo "<pre>";

//Evita SQL injection 
$id = preg_replace('/\D/', '', $_GET['id']); // as barras e os D garante que o valor seja um número; - Existe uma função para validação de variaveis no PHP

if( $objBanco->exec("DELETE FROM contatos WHERE id = $id") !== false ) {

    $msg = 'Registro apagado com sucesso!';

}else {

    $msg = 'Erro ao apagar o registro!';

}

include 'apaga_contato_tpl.php';