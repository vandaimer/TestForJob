<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<form action="desafio1.php" method="post">
			Dividendo: <input type="text" name="dividendo">
			<br/>
			Divisor: <input type="text" name="divisor">
			<br/>
			<input type="submit">
		</form>
	</body>
</html>
<?php
if( !empty( $_POST ) )
{
	$dividendo = (int)$_POST['dividendo'];
	$divisor   = (int)$_POST['divisor'];
	if( $divisor === 0 )
	{
		echo "Digite um número diferente de zero para no campo divisor";
		return;
	}
	$resultado = $dividendo / $divisor;
	echo "Resultado: {$resultado}.";
}
