<?php

if( isset($_POST['cadastrar']) ){
    require 'controller/consist_cadastro.php';

    $id = gravar_usuario( $_POST['nome'], $_POST['email'], $_POST['senha'] );

    if( $id){

        session_start();

        $_SESSION['login'] = $_POST['email'];

        header('Location: ../');

    }else{
        $erros = ['Não foi possivel cadastrar o usuario, tente novameten mais tarde.'];
    }

}else{
    $erros = [];
}


//var_dump($_POST);
include 'view/cadastro_tpl.php';