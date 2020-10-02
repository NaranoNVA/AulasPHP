<?php
require_once 'config.php';

try{

    $objBanco = new PDO( DSN, DB_USER, DB_PASS);

}catch( PDOException $objErro){
    echo'<pre>';
    echo"SGBD indisponivel: " . $objErro->getMessage();

    exit();
}