<?php
	
	if(empty($_POST['username'])||empty($_POST['password']))
	{
		header("Location:../login.php");
	}
	
	include "connect.php";
	
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
	
	/*
	echo $username;
	echo $password;
	*/
	
	$sql="SELECT password FROM users WHERE username=?";
	$res=$dbh->prepare($sql);
	$res->bind_param("s", $username);
	$result=$res->execute();
	$result=$result->get_result();
	$row=$result->fetch_assoc();
	
	if(!$row)
	{
		//echo"Användaren finns inte";
		header("Location:login.php?status=1");
	}
	
	else
	{
		if($row==$password)
		{
			//echo "Användaen är inloggad";
			session_start();
			$_SESSION['username']=$username;
			header("Location:admin.php");
		}
		
		else
		{
			//echo "Felaktigt lösenord";
			header("Location:login.php?status=2");
		}
	}
	
?>