<?php
date_default_timezone_set('America/Sao_Paulo'); // Seta timezone do php para datas
error_reporting(E_ALL);

// Constantes
define('MUNDO', 'João Raimundo<br><br> '); //Sempre usar letra maiscula para Constantes
echo '<br><br>Olá ' . MUNDO;


define('RES_P_PAG', 10);
for ($i = 0; $i < RES_P_PAG; $i++) {
    echo "Resultado $i<br>";
}


$domingo = 0;
$segunda = 1;
$terça = 2;
$quarta = 3;
$quinta = 4;
$sexta = 5;
$sabado = 6;

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


$semana["Domingo"] = 0;
$semana["Segunda"] = 1;
$semana["Terça"] = 2;
$semana["Quarta"] = 3;
$semana["Quinta"] = 4;
$semana["Sexta"] = 5;
$semana["Sabado"] = 6;


$hoje = date('L');
echo "<br>Hoje é " . $semana['Quinta'] . " com indice alfanumerico<br><br>";


$usuario = [
    'nome'     =>     'Luiz Bono',
    'idade'    =>    25,
    'peso'    =>    67.8,
    'signo'    =>    'aquariano'
];
//echo "O prefessor ". $usuario['nome']. " tem " .$usuario['idade']." anos, pesa ".$usuario['peso']." Kg e é ".$usuario['signo']. "<br>";

//Utilização de Chaves para intercalar Arrays no echo
echo "O prefessor  {$usuario['nome']} 
    tem {$usuario['idade']} anos, pesa "
    . number_format($usuario['peso'], 2, ',', '.') .   //Formatar numeros
    "Kg e é {$usuario['signo']}.<br><br>";


//Matriz
$professores = array(
    0 => array(
        'nome'   =>  'Luiz Bono',
        'idade'  =>  25,
        'peso'   =>  67.8,
        'signo'  =>  'aquariano'
    ),
    1 => array(
        'nome'   => 'Thyago Quintas',
        'idade'  => 33,
        'peso'   => 90.3,
        'signo'  => 'peixes'
    ),
    2 => array(
        'nome'   => 'Samuel Placa',
        'idade'  =>  30,
        'peso'   =>  77.8,
        'signo'  =>  'cancer'
    ),
);

//var_dump($professores);
echo "<br><br>";

#region Minha tabela
echo"Minha tabela:<br>";
echo"<table>
<tr> <th>Nome</th> <th>Idade</th> <th>Peso</th> <th>Signo</th> </tr>";
for($i = 0; $i < sizeof($professores); $i++){
echo"<tr> <td>{$professores[$i]['nome']}</td> <td>{$professores[$i]['idade']}</td> <td>"
.number_format($professores[$i]['peso'], 2, ',', '.').
"</td> <td>{$professores[$i]['signo']}</td> </tr>";
};
echo"</table>";

#endregion
echo "<br><br>";
#region Tabela Professor
echo"Tabela Professor:<br>";
?>
<table border="1">
<tr> <td>ID</td> <td>Nome</td> <td>Idade</td> <td>Peso</td> <td>Signo</td> </tr>

<?php
foreach($professores as $linha => $professor){
    echo"<tr> <td>$linha</td>
              <td>{$professor['nome']}</td>
              <td>{$professor['idade']}</td>
              <td>{$professor['peso']}</td>
              <td>{$professor['signo']}</td> </tr>";
}
?>
</table>

<?php
#endregion


