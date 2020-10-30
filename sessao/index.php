<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$credenciais = [0 => ['user' => 'nva123', 'pass' => '4455'],
                1 => ['user' => 'dva123', 'pass' => '5565'],
                2 => ['user' => 'narano', 'pass' => '5611']];

session_start();

if(isset($_SESSION['login'])){

    include 'header_tpl.php';//Caso ja esteja logado
    include "index_menu_tpl.php";
    include "footer_tpl.php"; 

}elseif( isset($_POST['entrar']) ){

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if( in_array(['user' => $login, 'pass' => $senha], $credenciais)){
        
        $_SESSION['login'] = $login;

        include 'header_tpl.php';
        include "index_menu_tpl.php";
        include "footer_tpl.php";

    }else{
        $msg = 'Login ou Senha invalido';
        include 'index_tpl.php';
    }

    
}else{
    include 'index_tpl.php';
}