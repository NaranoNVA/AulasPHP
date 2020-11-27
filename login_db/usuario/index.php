<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../sessao.php';

require 'model/dados.php';

chdir(__DIR__);

if ( isset($_GET['apagar']) ) {

    if(!apagar_usuario($_GET['apagar'])) {

        $erro = 'Erro ao tentar apagar o usuario.';
    } 
}

if( isset($_POST['gravar']) ){
    require 'controller/consist_cadastro.php'; //Ta com erro de iniciar dados de novo


    if( count($erros) == 0){

        if( !$ret_edit = editar_usuario( $_POST['id'], $_POST['nome'], $_POST['email'], $_POST['senha'] ) ){
            $erros = ['Erro ao tentar editar o usuario.'];

        }else{
            $editado_ok = true;

        }
    }
    
    
    require '../header_tpl.php';
    require '../index_menu_tpl.php';
    require 'view/editar.php';
    require '../footer_tpl.php';
    exit();
}

if ( isset($_GET['editar']) ) {

    $usuario = listar($_GET['editar']);

    $nome = $usuario[0]['nome'] ?? '';
    $email = $usuario[0]['email'] ?? '';

    require '../header_tpl.php';
    require '../index_menu_tpl.php';
    require 'view/editar.php';
    require '../footer_tpl.php';

    exit();
}

$lista = listar();

require 'view/lista.php';
