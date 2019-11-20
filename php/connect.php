<?php
	$dbh= new mysqli("localhost","lugo01002","qwe123","webbshop");
	
	
	if(!$dbh)
	{
		echo "Connecton failed!";
		exit;
	}
?>