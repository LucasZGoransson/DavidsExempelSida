<?php
	$str="";
	if(isset($_GET['status']))
	{
		if($_GET['status']==1)
		{
			$str="Felaktig användare";
		}
		
		elseif($_GET['status']==2)
		{
			$str="Felaktigt lösemord";
		}
	}
?>

<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="utf-8">
		<title>Logga in</title>
		<link rel="stylesheet" href="css/stilmall.css">
	</head>
	<body id="login">
		
		<div id="wrapper">

			<?php 
				require "php/header.php";
				require "php/nav.php";
			?>
		
			<main> <!--Huvudinnehåll-->
				<section>
					<form action="php/password.php" method="post">
				
						<p><label for="user">Användarnamn:</label>
						<input type="text" id="user" name="username"></p>
				
						<p><label for="pwd">Lösenord:</label>
						<input type="password" id="pwd" name="password"></p>
				
						<p><input type="submit" value="Logga in"></p>
				
					</form>
				
					<p class="create"><a href="createuser.php">Skapa användare</a></p>
			
				</section>
			</main>

		</div>
		
		<?php 
				require "php/footer.php";
		?>

	</body>
</html>
