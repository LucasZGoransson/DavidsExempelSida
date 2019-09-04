<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="utf-8">
		<title>Produkter</title>
		<link rel="stylesheet" href="css/stilmall.css">
	</head>
	<body id="sida3">
		
		<div id="wrapper">
			
			<?php
				require "php/sida3header.php";
				require "php/sida3nav.php";
			?>
			
			<main> <!--Huvudinnehåll-->
				<section id="content">
					<h2>Varor</h2>
          
					<figure><img src="bilder/apple.jpg" alt="Grönt surt">
						<figcaption>Äpple 50
							<p><a href="#">Köp</a></p>
						</figcaption>
					</figure>
					
					<figure><img src="bilder/orange.jpg" alt="Orange söt">
						<figcaption>Apelsin 38
							<p><a href="#">Köp</a></p>
						</figcaption>
					</figure>
					
					<figure><img src="bilder/pear.jpg" alt="Gult saftigt">
						<figcaption>Päron 100
							<p><a href="#">Köp</a></p>
						</figcaption>
					</figure>
					
					<figure><img src="bilder/banana.jpg" alt="Gul böjd">
						<figcaption>Banan 30
							<p><a href="#">Köp</a></p>
						</figcaption>
					</figure>
				</section>
				
				<aside id="aside">
				   <p>News</p>
				</aside>
			</main>
		</div>
		
			<?php
				require "php/sida3footer.php";
			?>
  
	</body>
</html>