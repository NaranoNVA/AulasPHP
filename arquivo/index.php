<?php

/*$fp = fopen( 'planilha2.csv', 'w');

fwrite( $fp, "Nome;Telefone\n");
fwrite( $fp, "Nicolau;11124444421\n");

fclose( $fp );

echo "<pre>ARQUIVO GERADO\n\n";

$fp = fopen( 'planilha.csv', 'a');

fwrite( $fp, "Marcel;119999999\n");
fwrite( $fp, "Bruno;1155555555\n");
fwrite( $fp, "Eduardo;1133333333\n");

fclose( $fp );

echo "ARQUIVO ALTERADO\n\n";

echo "VEJA O CONTEÚDO DO ARQUIVO\n\n";*/

$fp = fopen( 'planilha2.csv', 'r');

while ( $linha = fgets( $fp ) ) {

	echo $linha;
}

fclose( $fp );

