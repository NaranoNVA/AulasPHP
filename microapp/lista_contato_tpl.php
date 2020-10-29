<html>

<head></head>

<body>
    <div style="text-align: center;">
        <a href="index.html">Novo contato</a>
        <table border="1">
            <tr>
                <td>ID</td><td>Nome</td><td>WhatsApp</td><td>Ação</td>
            </tr>
                <?php
                    if( count($tabela) > 0){ // Se tiver dado na tabela
                        foreach ($tabela as $id => $reg) {
                            echo"<tr>
                            <td>$id</td><td>{$reg['Nome']}</td><td>{$reg['WhatsApp']}</td><td><a href='apaga_contato.php?id=$id'>Apagar</a><a href='edita_contato.php?id=$id'>Editar</a></td>
                            </tr>";
                        }
                        
                    } else { // Se não tiver dado na tabela
                        echo"  <tr>
                        <td colspan='4'>Não há dados</td>
                    </tr>";
                    }
                ?>
        </table>
    </div>
</body>

</html>