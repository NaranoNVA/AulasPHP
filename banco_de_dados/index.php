<?php

//Variavel de Conexão no banco
                        //Local //Usuario //Senha //Database
$db = mysqli_connect( '127.0.0.1', 'root', '', 'phpaula');  //Conectar no banco

#region Criar a Tabela
if ( mysqli_query( $db, 
//Cria Tabela no banco de dados
'CREATE TABLE contatos (id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(255) NOT NULL,
whatsapp BIGINT)' ) ){

    echo"Tabela contatos criada com sucesso.<br>";
}else{
    echo"Não foi possivel criar a tabela contatos.<br>";
    echo mysqli_connect_error();
}
#endregion

#region Inserir na Tabela
$contato = ['nome' => 'Nicolas Alberto', 'whatsapp' => '5511984784684'];

if(mysqli_query( $db, //INSERE DADOS NO BANCO 
"INSERT INTO contatos (nome, whatsapp) 
VALUES ('{$contato['nome']}','{$contato['whatsapp']}' )" )){

    echo"Contato inserido com sucesso.<br>";
}else{
    echo"Contato não inserido.<br>";
}
#endregion

#region Listar na Tabela
//Lista o que está na tabela
$query = mysqli_query( $db,
' SELECT 
id, nome, whatsapp 
FROM 
contatos ');

echo"<table border='1'>";
echo"<tr><td>ID</td><td>Nome</td><td>WhatsApp</td></tr>";
while($registro = $query->fetch_assoc() ){
    echo "<tr> <td>{$registro['id']}</td> <td>{$registro['nome']}</td> <td>{$registro['whatsapp']}</td> </tr>";
}

echo"</table>";
#endregion

#region Apagar na Tabela
//Apagar o que está na tabela
if (mysqli_query( $db, 'DELETE FROM contatos WHERE id < 10' )){
        echo"Registro deletado com sucesso";
}else{
    echo"Registro não apagado";
}
#endregion

#region Testando com formulario html
//$_POST $_GET $_REQUEST - Vetores super globais para recebermos dados do usuário

//var_dump($_POST);
echo "<br><br> Nome: {$_POST['nm']}, WhatsApp: {$_POST['whats']}";

#endregion