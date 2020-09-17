<?php
//COnfiguração php para mostrar errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$clima = 'morno';

//Condicional If
if ($clima == 'Quente') {
    echo "Meu pé ta quentin.<br><br>";
}

$bool = '1';

//Condicional if ternario
$var = $bool == 1 ? '$bool é igual a 1' : '$bool diferente de 1 e-e';
echo "$var <br><br>";

$var = $bool === 1 ? '$bool é igual a 1' : '$bool diferente de 1 e-e';
echo "$var<br><br>";

$var = $bool != 1 ? '$bool diferente de 1 e-e' : '$bool é igual a 1';
echo "$var<br><br>";

$var = $bool !== 1 ? '$bool diferente de 1 e-e' : '$bool é igual a 1';
echo "$var<br><br>";


$frase = "Meu pai tinha um cachorro amarelo e rosa";

if (stripos($frase, 'Meu')  !== false) { //stripos case insensitive e strpos para case sensitive -> str retorna a posição do bit dentro da varivel. por isso é usado !==
    echo "Encontrei o Meu<br><br>";
}elseif (stripos($frase, 'meu')  !== false) {
    echo "Encontrei o meu<br><br>";
} 
else {
    echo "Não tem Meu<br><br>";
}


//swotch
switch ($clima) {
    case 'Quente':
    case 'quente':
    case 'tropical':
        echo 'Vai embora solzinho =/';
        break;

    case 'frio':
        echo 'me da uma blusa ae';
        break;

    case 'morno':
        echo 'Delicia';

            if( true ){
                echo '<br> Pena que a noite esfria quando está morno =/';
                if( true ){
                    echo'<br> Mas continua otimo <3';
                }
            }

        break;

    case 'gelado':
        echo 'Você está em Curitiba';
        break;

    default:
        echo '"Tempo ta meio doido hoje ne?"';
        break;
      
}
echo'<br><br>';  

$isso = 'véi';

$isso = $isso ?? 'coisa'; // COndiciona do PHP para saber se variavel foi preenchida.

echo "Olha só $isso ";

