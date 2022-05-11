<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>
		
		<?php

			// string
			$nome = 'André Marques Vicente Da Silva';

			// int
			$idade = 34;

			// float
			$peso = 96.0;

			// boolean
			$fumante_sn = true; // (true = 1) ou (false = vazio)

			// ...lógica...//
			$idade = '30';

		?>

		<h1>Ficha cadastral</h1>
		<br/>
		<p>Nome: <?= $nome ?></p>
		<!--
		<p>Nome: <?php echo $nome ?></p>
		<p>Nome: <?php print $nome ?></p>
		 -->
		<p>Idade: <?= $idade ?></p>
		<p>Peso: <?= $peso ?></p>
		<p>Fumante: <?= $fumante_sn ?></p>
	</body>

</html>