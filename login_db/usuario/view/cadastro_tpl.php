<html>

<head>
    <style>
        table{
            margin-left: auto; 
            margin-right: auto; 
            margin-top: 20px;
        }
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
    <title>Meu site</title>
</head>

<body>
    <div style="text-align: center;">
        <h1>Cire suia conta de usuario.</h1>
        <table>
            <tr>
                <td>
                    <form method="post" action="cadastro.php">
                        <br>
                        <?php
                        
                        if (count($erros) > 0){
                            
                            foreach ($erros as $erro){
                                echo '<div style="color: red">';
                                echo $erro;
                                echo '</div>';
                            }
                            
                        }
                        ?>

                        <div style="margin-top:5px;">
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" require>
                        </div>

                        <div style="margin-top:5px;">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" require>
                        </div>

                        <div style="margin-top:5px;">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" require>
                        </div>

                        <div style="margin-top:5px;">
                            <label for="csenha">Confirmar Senha</label>
                            <input type="password" id="csenha" name="csenha" require>
                        </div>
                        <div style="margin-top:5px;"><input type="submit" name="cadastrar" value="Cadastrar"></div>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>