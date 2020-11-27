<?php

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
$csenha = $_POST['csenha'] ?? null;

$senha = trim($senha); //Isso garante que a senha nao contenha espaço antes ou depois da senha
$erros = [];

//Verifica se o nome tem o minimo caracteres
if( strlen($nome) < 2 ){
    $erros[] = 'O Nome deve conter ao menos 2 caracteres.';
}

//Verifica se o e-mail é valido
if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
    $erros[] = 'O Email digitado não é invalido.';

}elseif( ja_existe_email($email) && !isset($_POST['gravar'])){ 

    $erros[] = 'Email ja cadastrado.';  

}

//Verifica a senha
if( strlen($senha) <= 8 ){
    $erros[] = 'A Senha deve conter ao menos 8 caracteres';
}else{   

    if( !$senha == $csenha ){
        $erros[] = 'As senhas digitados são diferentes.';
    }

}

