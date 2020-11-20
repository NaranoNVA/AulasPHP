<?php

session_start();

if ( !isset($_SESSION['login']) ) {
    header('Location: /AulasPHP/login_dv/index.php');
    
} 