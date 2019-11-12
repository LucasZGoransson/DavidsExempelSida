<?php
	$db= new mysqli("localhost","lugo01002","qwe123","webbshop");
	
	
	if(!$db)
	{
		echo "Connecton failed!";
		exit;
	}
	
	
	$sql="SELECT * FROM kunder";
	$result = $db->query($sql);
	echo "<table>";
	while($row=$result->fetch_assoc())
	{
		
		echo "<tr><td>";
		echo $row['anvnamn'];
		echo "</td>";
				
		echo "<td>";
		echo $row['fornamn'];
		echo "</td>";
		
		echo "<td>";
		echo $row['efternamn'];
		echo "</td>";
		
		echo "<td>";
		echo $row['adress'];
		echo "</td>";
		
		echo "<td>";
		echo $row['postnummer'];
		echo "</td>";

		echo "<td>";
		echo $row['postadress'];
		echo "</td>";
		
		echo "<td>";
		echo $row['telefon'];
		echo "</td></tr>";
	}
	echo "</table>";
	
	
	$sql="SELECT * FROM orders";
	$result = $db->query($sql);
	echo "<table>";
	while($row=$result->fetch_assoc())
	{
		echo "<tr><td>";
		echo $row['orderID'];
		echo "</td>";
		
		echo "<td>";
		echo $row['produktID'];
		echo "</td>";
		
		echo "<td>";
		echo $row['antal'];
		echo "</td>";
		
		echo "<td>";
		echo $row['kundID'];
		echo "</td></tr>";
	}
	echo "</table>";
	
	
	$sql="SELECT * FROM produkter";
	$result = $db->query($sql);
	echo "<table>";
		while($row=$result->fetch_assoc())
	{
		echo "<tr><td>";
		echo $row['namn'];
		echo "</td>";
		
		echo "<td>";
		echo $row['beskrivning'];
		echo "</td>";
		
		echo "<td>";
		echo $row['pris'];
		echo "</td>";
		
		echo "<td>";
		echo $row['bild'];
		echo "</td></tr>";
	}
	echo "</table>";
	
	
	$sql="SELECT * FROM users";
	$result = $db->query($sql);
	echo "<table>";
		while($row=$result->fetch_assoc())
	{
		echo "<tr><td>";
		echo $row['anvnamn'];
		echo "</td>";
		
		echo "<td>";
		echo $row['email'];
		echo "</td>";
		
		echo "<td>";
		echo $row['password'];
		echo "</td>";
		
		echo "<td>";
		echo $row['status'];
		echo "</td></tr>";
	}
	echo "</table>";
	
	
	mysqli_close($db);
	
?>