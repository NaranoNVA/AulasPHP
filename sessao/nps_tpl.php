<?php
session_start();

var_dump($_SESSION);

$_SESSION['user'] = 'Nicolau';

echo 'Seu ID é: '. session_id();

?>
<html>

<head></head>

<body>
    <div style="text-align: center;">
        <h1>Diga o quanto você gosta desta aula?</h1>
        <form method="post" action="nps.php">
        <span>Não Gosto - </span>
            <?php
                for ( $i = 1    ; $i <= 10; $i++){
                    echo" <input type='radio' id='nps$i' name='nota' value='$i'>
                    <label for='nps$i'>$i</label>
                    ";
                }
            ?>
            <span>- Gosto Muito</span>
            <p>Explique o motivo:</p>
            <textarea name='explicacao' rows="10" cols="75" ></textarea>
            <div style="text-align: center; margin-top: 5px;"><input type="submit"  name="avaliacao" value="Avaliar"> </div>
        </form>
        </div>
    
</body>

</html>