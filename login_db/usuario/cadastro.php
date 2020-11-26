<?php

if( isset($_POST['cadastrar']) ){
    require 'controller/consist_cadastro.php';
}


//var_dump($_POST);
include 'view/cadastro_tpl.php';