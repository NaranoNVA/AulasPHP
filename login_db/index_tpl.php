<html>

<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
    <title>Meu site</title>
</head>

<body>
    <div style="text-align: center;">
        <table>
            <tr>
                <td>
                    <form method="post" action="index.php">
                        <br>
                        <?php
                        if (isset($msg)) echo $msg;
                        ?>
                        <div style="margin-top:5px;">
                        <label for="login">Login</label>
                        <input type="text" id="login" name="login">
                        </div>

                        <div style="margin-top:5px;">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha">
                        </div>

                        <div style="margin-top:5px;">
                        <a href="usuario/cadastro.php">Cadastre-se</a>
                        </div>

                        <div style="margin-top:5px;"><input type="submit" name="entrar" value="Entrar"></div>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>