<?php
	
	if(empty($_POST['username'])||empty($_POST['password']))
	{
		header("Location:../login.php");
	}
	
	include "../includes/connect.php";
	
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
	
	/*
	echo $username;
	echo $password;
	*/
	
	$sql="SELECT password FROM users WHERE username=?";
	$res=dbh->prepare($sql);
	$res->bind_param("s", $username);
	$result=$res->execute();
	$result=$result->get_result();
	$row=$result->fetch_assoc();
	
	if(!$row)
	{
		echo"Användaren finns inte";
	}
	
	else
	{
		if($row==$password)
		{
			echo "Användaen är inloggad";
		}
		
		else
		{
			echo "Felaktigt lösenord";
		}
	}
	
?>