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
	
	$etunimi = mysqli_real_escape_string($con, filter_input(INPUT_POST,'etunimi',FILTER_SANITIZE_STRING));
	$sukunimi = mysqli_real_escape_string($con, filter_input(INPUT_POST,'sukunimi',FILTER_SANITIZE_STRING));
	$osoite = mysqli_real_escape_string($con, filter_input(INPUT_POST,'osoite',FILTER_SANITIZE_STRING));
	$puhelinnumero = mysqli_real_escape_string($con, filter_input(INPUT_POST,'puhnum',FILTER_SANITIZE_STRING));
	
	if (empty($etunimi) || empty($sukunimi) || empty($osoite) || empty($puhnum)) 
	{
		echo 'Korjaa tyhjät tietueet';
		return false;
	}
	
	$sql = "INSERT INTO Asiakas (Etunimi, Sukunimi, Osoite, Puhelinnumero)
	VALUES ('$etunimi', '$sukunimi', '$osoite', '$puhelinnumero')";
	
	if (!mysqli_query($con, $sql)) 
	{
		die('Error: ' . mysqli_error($con));
	}
	
	echo "Uusi Asiakas lisätty";

mysqli_close($con);

?>