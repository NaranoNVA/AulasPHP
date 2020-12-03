<?php
require_once 'config.php';

try{

    $db = new PDO( DSN, USER, PASS );

}catch( PDOException $Erro ){

    echo"Falha ao conectar no banco: ". $Erro->getMessage();

    exit();
}