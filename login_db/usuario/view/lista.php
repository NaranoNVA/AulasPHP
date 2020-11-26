<?php
chdir( __DIR__);

include '../../header_tpl.php';
include '../../index_menu_tpl.php';

echo '<div style="text-align: center;">
        <table style="margin-left: auto; margin-right: auto; margin-top: 20px;" border="1">
            <tr>
                <td>Id</td><td>Nome</td><td>Email</td> 
            </tr>';

foreach ($lista as $usuario ){
    echo "<tr>
    <td>{$usuario['id']}</td><td>{$usuario['nome']}</td><td>{$usuario['email']}</td> 
    </tr>";
}

echo '</table></div>';

include '../../footer_tpl.php';