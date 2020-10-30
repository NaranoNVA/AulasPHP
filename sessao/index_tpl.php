<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão</title>
</head>
<body>
    <div style="text-align: center;">
        <form method="POST"> <!-- Se nao colocar o Action ele volta para a pagina que deu include/anterior -->
         
        <?php if(isset($msg)){  echo $msg; } ?>

        <div style="margin-top:5px;">
        <label for="login">Login: </label>
        <input type="text" name="login">
        </div>

        <div style="margin-top:5px;">
        <label for="senha">Senha: </label>
        <input type="password" name="senha">
        </div>

        <div style="margin-top:5px;"><input type="submit" name="entrar"></div>
        </form>
    </div>
</body>
</html>