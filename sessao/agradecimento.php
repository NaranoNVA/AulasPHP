<?php
require 'sessao.php';

include 'header_tpl.php';
include "index_menu_tpl.php";
include "footer_tpl.php";


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

?>