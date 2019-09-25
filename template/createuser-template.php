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
				
						<legend>Personlig information:</legend>
				
						<p><label for="Username">Användarnamn:</label><br>
						<input type="username" name="username" value="TimBernersLee" required></p>
						
						<p><label for="Password">Lösenord:</label><br>
						<input type="password" name="password" value="1234567890" required></p>
				
						<p><label for="Mail">E-mail:</label><br>
						<input type="email" name="email" required></p>
						
						<p><label for="Phonenumber">Telefonnummer:</label><br>
						<input type="text" name="phonenumber" required></p>
						
						<p><label for="Adress">Adress:</label><br>
						<input type="text" name="adress" required></p>
						
						<p><label for="City">Ort:</label><br>
						<input type="text" name="city" required></p>
						
						<p><label for="ZIPCode">Postnummer:</label><br>
						<input type="text" name="zipcode" required></p>
				
						<p><label for="Gender">Välj kön:</label><br>
						<select name="Gender">
						<option value="male">Man</option>
						<option value="female">Kvinna</option>
						<option value="other">Annat</option>
						<option value="unspecified">Ospecificerat</option></p>
				
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