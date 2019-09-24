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
				
						<p><input type="submit" value="Skapa användare"></p>
				
					</form>
				</section>
			</main>

		</div>
		
		<?php 
				require "php/footer.php";
		?>

	</body>
</html>