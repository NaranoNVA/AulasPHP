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
<div style="text-align: center; ">
        <h1>Altere os dados do usuario.</h1>
        <table>
            <tr>
                <td>
                    <form method="post">
                        <?php
                        if(isset($editado_ok)){
                            echo '<div style="color: green">';
                                    echo 'Editado com sucesso!';
                                    echo '</div>';
                        }

                        if (isset($erros)) {
                            if (count($erros) > 0) {
                                foreach ($erros as $erro) {
                                    echo '<div style="color: red">';
                                    echo $erro;
                                    echo '</div>';
                                }
                            }
                        }
                        ?>

                        <div style="margin-top:5px;">
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" value="<?PHP echo $nome; ?>" required>
                        </div>

                        <div style="margin-top:5px;">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" value="<?PHP echo $email; ?>" required>
                        </div>

                        <div style="margin-top:5px;">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" value="****" require>
                        </div>

                        <div style="margin-top:5px;">
                            <label for="csenha">Confirmar Senha</label>
                            <input type="password" id="csenha" name="csenha" value="****" require>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $_GET['editar'];?>">
                        <div style="margin-top:5px;"> <input type="submit" name="gravar" value="Gravar"> </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>