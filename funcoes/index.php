<?php
error_reporting(E_ALL);

echo "O resultado é: " . operacao(3, 4, "sub");

function operacao(float $num1, float $num2, string $operacao = 'soma'): float // Declarar variavel serve para qunato nao for informado o parametro || Indicar tipo de variavel que retorna e recebe
{

    switch ($operacao) {
        case 'soma':
            return $num1 + $num2;

        case 'sub':
            return $num1 - $num2;

        case 'mul':
            return $num1 * $num2;

        case 'div':
            return $num1 / $num2;

        default:
            return 0.0;
    }
}

echo"<br><br>";
//Função dia da Semana

#region Minha Semana
function Semana(int $dia): string
{
    switch ($dia) {
        case 1:
            return "Domingo";
        case 2:
            return "Segunda";
        case 3:
            return "Terça";
        case 4:
            return "Quarta";
        case 5:
            return "Quinta";
        case 6:
            return "Sexta";
        case 7:
            return "Sabado";
        default:
            return "Dia da semana não existente";
    }
}
echo "Hoje é ". Semana(3) ."<br><br>";
#endregion

#region Semana Professor
//Para Variavel do Scopo da fução afetar uma global utilize o & Ex: function dia_da_semana(int &$dia): string
function dia_da_semana(int $dia): string
{
    $semana = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sabado"];
    return $semana[$dia] ?? "Use de 0 a 6";
}
echo "Hoje é ". dia_da_semana(6) ."<br>";
#endregion