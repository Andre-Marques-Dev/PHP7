<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>
		
		<?php

			$nome = 'Mustafá';
			$cor = 'azul';
			$idade = 25;
			$atividade_preferida = 'andar de bicicleta';

			// Operador (.) ponto
			echo 'olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ', estou vendo também que você possui ' . $idade . ' anos e que gosta de ' . $atividade_preferida;	

			// aspas duplas
			echo '<br/>';

			echo "olá $nome vi que sua cor preferida é $cor , estou vendo também que você possui $idade anos e que gosta de $atividade_preferida"

		?>
	</body>

</html>