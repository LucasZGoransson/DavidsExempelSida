<?php
	$db= new mysqli("localhost","lugo01002","qwe123","webbshop");
	
	
	if(!$db)
	{
		echo "Connecton failed!";
		exit;
	}
?>