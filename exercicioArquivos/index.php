<?php
require 'db.php';

$fp = fopen( 'CIDADES_CAPITAIS_IBGE.csv', 'r');
$tabela; //Criado para gravar os nomes do cabeçalho da tabela.

echo"Adicionando dados ao banco de dados, aguerde!";

for ($i = 0; $linha = fgets( $fp ); $i++ ) {

    //Insere os registros aabaixo do cabeçalho a nova tabela gerada.
    if( $i != 0){
        $linha = explode(';', $linha);

        $registro = $db->prepare("INSERT INTO Cidades_Capitais ($tabela[0], $tabela[1], $tabela[2], $tabela[3]) VALUES ( :id, :nome, :latitute, :longitude );");
        $registro->bindParam(':id', $linha[0]);
        $registro->bindParam(':nome', $linha[1]);
        $registro->bindParam(':latitute', $linha[2]);
        $registro->bindParam(':longitude', $linha[3]);

        $registro->execute();
        
    }

    //Pega o cabeçalho do arquivo para criar a tabela no Banco de acordo com os valores de cabeçalho
    else
    {
        $tabela = explode(';', $linha);
        $ctable = $db->exec("CREATE TABLE Cidades_Capitais (  $tabela[0] BIGINT IDENTITY, 
                                                                $tabela[1] VARCHAR(255) NOT NULL, 
                                                                $tabela[2] VARCHAR(255) NOT NULL,  
                                                                $tabela[3] VARCHAR(255) NOT NULL )");

        $ctable = $db->exec('SET IDENTITY_INSERT Cidades_Capitais ON;');
    }

}

echo"<br>Dados adicionados com sucesso.";

fclose( $fp );