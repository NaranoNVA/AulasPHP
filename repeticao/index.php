<?php
date_default_timezone_set('America/Sao_Paulo'); // Seta timezone do php para datas

//Exemplo For
for ( $i=0, $j=4; $i < 5 && $j>=0; $i++, $j--){
    echo "Linha: $i $j<br>";
}


echo '<br><br>';
//Exemplo de While
$i = 0;
$j = 4;
while( $i < 5 && $j >= 0){
    echo "Linha: $i $j<br>";
    $i++;
    $j--;
}

echo '<br><br>';
//Exemplo de do while
$i = 0;
$j = 4;
do{
    echo "Linha: $i $j<br>";
    $i++;
    $j--;
} while( $i < 5 && $j>=0);


echo '<br><br>';


$domingo = 0;
$segunda = 1;
$terça = 2;
$quarta = 3;
$quinta = 4;
$sexta = 5;
$sabado =6;

var_dump(date('d/m/y'));

$semana[0] = 'Domingo';
$semana[1] = 'Segunda';
$semana[2] = 'Terça';
$semana[3] = 'Quarta';
$semana[4] = 'Quinta';
$semana[5] = 'Sexta';
$semana[6] = 'Sabado';

$hoje = date('w');
echo "<br>Hoje é $semana[$hoje] <br>";
