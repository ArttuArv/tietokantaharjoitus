<?php
$host = 'localhost';
$dbname = 't9arar00';
$username = 't9arar00';
$password = 'jauhojuge';

$con = mysqli_connect($host, $username, $password, $dbname);

	if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}	
	
	$etunimi = mysqli_real_escape_string($con, filter_input(INPUT_POST,'en',FILTER_SANITIZE_STRING));
	$sukunimi = mysqli_real_escape_string($con, filter_input(INPUT_POST,'sn',FILTER_SANITIZE_STRING));
	$osoite = mysqli_real_escape_string($con, filter_input(INPUT_POST,'os',FILTER_SANITIZE_STRING));
	$puhelinnumero = mysqli_real_escape_string($con, filter_input(INPUT_POST,'puh',FILTER_SANITIZE_STRING));
	$tuote = mysqli_real_escape_string($con, filter_input(INPUT_POST,'tuote',FILTER_SANITIZE_STRING));
	$maara = mysqli_real_escape_string($con, filter_input(INPUT_POST,'maara',FILTER_SANITIZE_STRING));
	
	
	if (empty($etunimi) || empty($sukunimi) || empty($osoite) || empty($puhelinnumero) || empty($tuote) || empty($maara)) 
	{
		echo 'Korjaa tyhjät tietueet';
		return false;
	}
	
	
	$sql="CALL UusiAsiakasTilaus('$etunimi','$sukunimi','$osoite','$puhelinnumero','$tuote','$maara')";
	
	if (!mysqli_query($con, $sql)) 
	{
		die('Error: ' . mysqli_error($con));
	}
	
	echo "Tilaus lisätty onnistuneesti. Tilasit tuotteen $tuote ja $maara kappaletta";

mysqli_close($con);

?>