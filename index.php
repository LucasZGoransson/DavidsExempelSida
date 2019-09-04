<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="utf-8">
		<title>Min onlinebutik</title>
		<link rel="stylesheet" href="css/stilmall.css">
	</head>
	<body id="index">
		
		<div id="wrapper">
      
			<?php
				require "php/indexheader.php";
				require "php/indexnav.php";
			?>
			
			<main> <!--Huvudinnehåll-->
				<section id="content">
					<article>
						<figure>
							<img src="bilder/teknikum.jpg" alt="">
							<figcaption>Daniel</figcaption>
						</figure>
						
						<p>Lite information angående lärare</p>	      
					
					</article>
					<article>
						<figure>
							<img src="bilder/teknikum.jpg" alt="">
							<figcaption>Andreas</figcaption>
						</figure>		
						
						<p>Some text about Andreas</p>	      
					
					</article>
					<article>
						<figure>
							<img src="bilder/teknikum.jpg" alt="">
							<figcaption>Tomas</figcaption>
						</figure>		
						
						<p>Some text about Tomas.</p>	      
					
					</article>
					<article>
						<figure>
							<img src="bilder/teknikum.jpg" alt="">
							<figcaption>David</figcaption>
						</figure>		
							
						<p>Some Text about David.</p>	      
					
					</article>
				</section>				
				
				<aside id="aside">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur fringilla ex nibh, at mattis mi placerat at.
					Duis in eros risus. Nulla non metus vestibulum, pretium diam sit amet, faucibus urna. Aenean imperdiet pellentesque
					sagittis. Nullam ac tristique dolor, et fringilla ex. Nullam feugiat magna risus, id sagittis felis venenatis a. Lorem
					ipsum dolor sit amet, consectetur adipiscing elit. Phasellus consectetur libero vel lacinia bibendum. Donec luctus tempus
					lacus, id congue mi fermentum id. Pellentesque in dui velit. In efficitur elit eget felis fermentum vehicula a nec sem.
					Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus id urna congue magna pharetra pretium in quis
					purus. Etiam sit amet mattis justo.</p>
            
					<p>Morbi mi sapien, porttitor in metus ut, fringilla fringilla mauris. Sed et erat fermentum, facilisis tortor et,
					bibendum turpis. Mauris sit amet auctor nisl, quis facilisis risus. Nulla odio augue, elementum quis sapien eget,
					lobortis scelerisque ante. Integer condimentum purus eget ipsum finibus feugiat. Donec fermentum augue ex, in rhoncus
					nisl eleifend ac. Donec consectetur diam consectetur mauris elementum, vitae scelerisque felis consequat. Maecenas
					volutpat lectus id rutrum auctor.</p>
				</aside>
			</main>
			
			<?php
				require "php/indexfooter.php";
			?>
			
		</div>
	</body>
</html>