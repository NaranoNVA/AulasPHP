<?php
session_start();

echo 'Você é o: ' . $_SESSION['nome'] . '<br><br>';

if( isset($_GET['nota']) ){
    $nota = $_GET['nota'] ?? $_POST['nota']; // pode usar o $_REQUEST também ele funciona pega tanto o GET quanto o POST
    switch ($nota){
        case $nota <= 4:
            echo"<div> <p>Desculpe se não te agradamos.</p> </div>";
            echo"<img src='./imagens/baixa.png'>";
            break;
        case $nota <= 8:
            echo"<div> <p>Nós vamos melhorar.</p> </div>";
            echo"<img src='./imagens/media.gif'>";
            break;
        case $nota >= 9:
            echo"<div> <p>Nós também te amamos.</p> </div>";
            echo"<img src='./imagens/alto.gif'>";
            break;
    }
}

echo '<br><a style="margin-left:5px" href="/AulasPHP/login_db/">Voltar ao inicio</a>';
