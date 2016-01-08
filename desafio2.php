<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		Primeiro caracter único de uma string<br/>
		<form action="desafio2.php" method="post">
		Palavra: <input type='text' name="palavra">
		<br/>
		<input type='submit' value="Qual é o caracter?">
		</form>
	</body>
</html>
<?php
if( !empty( $_POST ) )
{
	$palavra = $_POST['palavra'];

	if( empty( $palavra ) )
	{
		echo "Palavra vazia.";
		return;
	}

	if( strlen( $palavra ) === 1 )
	{
		echo $palavra;
		return;
	}

	foreach( str_split( $palavra ) as $letra )
	{
		if( substr_count( $palavra, $letra ) === 1)
		{
			echo "Primeiro caracter único: {$letra}";
			break;
		}
	}
}
