<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 2</title>
</head>
<body>

<fieldset>
	<legend>Peso de la Maquina</legend>
	<form method="POST">
		
		<label for="" 50 >Masa:  ???</label> <br><br>
		<label for="N1" 50 >Fuerza</label>
		<input type="number" name="N1">
		<br><br>
		<label for="N2">Gravedad:   9.8m/s2</label>
		
		<input type="submit" name="enviar" value="Calcular">
	</form>
</fieldset>
</body>
</html>
<?php
echo "<h1>calculo de masa</h1>"; 

echo "Formula: M= F / G ";
$fuerza=$_POST['N1'];
$gravedad=9.8;
$masa= $fuerza / $gravedad;

echo "El resultado de la masa: " .$fuerza. " / "  .$gravedad.  " = ".$masa;

?>
