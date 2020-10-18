<?php 
  
/* 
 * To change this license header, choose License Headers in Project Properties. 
 * To change this template file, choose Tools | Templates 
 * and open the template in the editor. 
 */ 
$host='localhost'; 
$dbname='t9arar00'; 
$username='t9arar00'; 
$password='jauhojuge'; 
  
$con=mysqli_connect($host,$username,$password,$dbname); 
  
	if (mysqli_connect_errno()) 
	{ 
		echo "Yhteys epäonnistui" . mysqli_connect_error(); 
	} 
  
	$result = mysqli_query($con,"SELECT * FROM Tuotetiedot");
	
		echo "<table border='1'> 
		<tr> 
		<th>Nimi</th> 
		<th>Hinta</th>
		<th>Kalorit</th>
		<th>Proteiini</th>
		<th>Hiilihydraatti</th>
		<th>Rasva</th>		
		</tr>"; 
		
		while($row = mysqli_fetch_array($result)) 
		{ 
		echo "<tr>"; 
		echo "<td>" . $row['TuoteNimi'] . "</td>"; 
		echo "<td>" . $row['Hinta'] . " " . "€" . "</td>";
		echo "<td>" . $row['Kalorit'] . "</td>"; 
		echo "<td>" . $row['Proteiini'] . "</td>"; 
		echo "<td>" . $row['Hiilihydraatti'] . "</td>"; 
		echo "<td>" . $row['Rasva'] . "</td>"; 		
		echo "</tr>"; 
		} 
		
		echo "</table>";
		
		echo "<br>" . "</br>";
	
		echo "<table border='1'> 
		<tr> 
		<th>Etunimi</th> 
		<th>Sukunimi</th> 
		<th>Tuote</th>
		<th>Määrä</th>
		<th>Tilaushinta</th>		
		</tr>"; 
		
	$result = mysqli_query($con,"SELECT * FROM Asiakastilaus");
		
		while($row = mysqli_fetch_array($result)) 
		{ 
		echo "<tr>"; 
		echo "<td>" . $row['Etunimi'] . "</td>";
		echo "<td>" . $row['Sukunimi'] . "</td>"; 		
		echo "<td>" . $row['TuoteNimi'] . "</td>";
		echo "<td>" . $row['Maara'] . "</td>"; 
		echo "<td>" . $row['Tilaushinta'] . " " . "€" . "</td>"; 	
		echo "</tr>"; 
		} 
		
		echo "</table>"; 
		
		echo "<br>" . "</br>";
	
		echo "<table border='1'> 
		<tr> 
		<th>Etunimi</th>
		<th>Sukunimi</th>  			
		<th>Tuote</th>
		<th>Määrä</th>
		<th>Tilaushinta</th>
		<th>Kalorit</th>
		<th>Proteiini</th>
		<th>Hiilihydraatti</th>
		<th>Rasva</th>			
		</tr>"; 
		
	$result = mysqli_query($con,"SELECT * FROM KaikkiTiedot");
		
		while($row = mysqli_fetch_array($result)) 
		{ 
		echo "<tr>"; 
		echo "<td>" . $row['Etunimi'] . "</td>";
		echo "<td>" . $row['Sukunimi'] . "</td>"; 
		echo "<td>" . $row['TuoteNimi'] . "</td>";
		echo "<td>" . $row['Maara'] . "</td>"; 
		echo "<td>" . $row['Tilaushinta'] . " " . "€" . "</td>"; 
		echo "<td>" . $row['Kalorit'] . "</td>"; 
		echo "<td>" . $row['Proteiini'] . "</td>"; 
		echo "<td>" . $row['Hiilihydraatti'] . "</td>"; 
		echo "<td>" . $row['Rasva'] . "</td>"; 		
		echo "</tr>"; 
		} 

		
		echo "<table border='1'> 
		<tr> 
		<th>Etunimi</th>
		<th>Sukunimi</th>  			
		<th>Osoite</th>
		<th>Puhelinnumero</th>
		</tr>"; 
		
		echo "<br>" . "</br>";
		
	$result = mysqli_query($con,"SELECT * FROM Asiakas");
		
		while($row = mysqli_fetch_array($result)) 
		{ 
		echo "<tr>"; 
		echo "<td>" . $row['Etunimi'] . "</td>";
		echo "<td>" . $row['Sukunimi'] . "</td>"; 
		echo "<td>" . $row['Osoite'] . "</td>";
		echo "<td>" . $row['Puhelinnumero'] . "</td>"; 	
		echo "</tr>"; 
		} 
		
		echo "</table>"; 
		
		echo "<br>" . "</br>";
		echo "<br>" . "</br>";
	
  
mysqli_close($con); 

?>