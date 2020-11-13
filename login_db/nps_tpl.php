<?php
require 'sessao.php';
$_SESSION['nome'] = 'Nicolas';
?>
<html>
	<head></head>
	<body>
		<?php include 'index_menu_tpl.php'; ?>
		<div style="text-align: center;">
			<h3>
                <span>Qual a probabilidade de você recomendar minha </span>
                <span> empresa para um colega ou amigo?</span>
            </h3>
			<form method="post" action="nps.php">
				Pouco provável 
				<?php 
				for ( $i = 1 ; $i <= 10 ; $i++ ) {
				
					echo "	<input type='radio' id='nps$i' name='nota' value='$i'>\n 
							<label for='nps$i'>$i</label>\n 
							";
				}
				?>
				<div><span> Muito provável</span></div>
				
				<div><span>Explique o motivo de sua nota, por favor.</span></div>
				<textarea name='explicacao' cols="90" rows="5"></textarea>
				<input type="submit" name="avaliacao" value="Avaliar">
			</form>
            </div>
	</body>
</html>