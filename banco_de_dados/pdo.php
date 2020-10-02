<?php
require_once 'config.php';

$objBanco = new PDO( DSN, DB_USER, DB_PASS);

$consulta = $objBanco->query('SELECT id, nome, whatsapp FROM contatos', PDO::FETCH_ASSOC);

//echo  "<pre>";
//var_dump($objBanco->errorInfo());//Funcionalidade para ver o erro

foreach ($consulta as $registro){

    echo "ID: {$registro['id']} NOME: {$registro['nome']} WP: {$registro['whatsapp']} <br>";
}


//$deletarBanco = $objBanco->query('DELETE FROM contatos WHERE id > 4'); // Em uma linha
if( $objBanco->query('DELETE FROM contatos WHERE id > 20') ){
    echo'Registro deletado com sucesso.<br>';
}else{
    echo'Registro não deletado.<br>';
}



$contato = [ 'nome'=> 'David', 'whatsapp'=> '11564845654'];
if( $objBanco->query(
"INSERT INTO contatos(nome, whatsapp)
VALUES ('{$contato['nome']}','{$contato['whatsapp']}' )"
)){
    echo'Registro inserido com sucesso<br>';
}else{
    echo'Registro não inserido com sucesso<br>';
}

$contato = [ 'nome'=> 'David Guedes', 'whatsapp'=> '22564845654'];
if( $objBanco->query(
    "UPDATE contatos SET nome = 'David Guedes', whatsapp = '22564845654' WHERE id = 20"
)){
        echo'Registro atualizado com sucesso<br>';
    }else{
        echo'Registro não atualizado com sucesso<br>';
    }
