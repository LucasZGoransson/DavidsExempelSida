<?php
	$db= new mysqli("localhost","lugo01002","qwe123","webbshop");
	
	
	if(!$db)
	{
		echo "Connecton failed!";
		exit;
	}
	
	$sql="SELECT * FROM produkter";
	
	$result = $db->query($sql);
	
	while($row=$result->fetch_assoc())
	{
		echo $row['namn'];
		echo ", ";
		echo $row['beskrivning'];
		echo ", ";
		echo $row['pris'];
		echo ", ";
		echo $row['bild'];
		echo "<br>";
	}
	
	
	mysqli_close($db);
	
?>