<?php 

	$idStranky ="domu";

	require_once "./data.php";
	
	if (array_key_exists("id-stranky", $_GET)) {
		$idStranky = $_GET["id-stranky"];
	}
	

?>

<!DOCTYPE html>
<lang="cs">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo  $poleStranek[$idStranky]->getTitulek(); ?></title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/all.min.css">
	
</head>
	<header>
		<div class="container">
			<div class="headerTop">
				<a class="odkaz" href="tel:+420777666555">+420/ 777 666 555</a>
				<div class="socIkony">
					<a href="https://www.facebook.com">
						<i class="fa-brands fa-square-facebook"></i>
					</a>
					<a href="https://twitter.com"><i class="fa-brands fa-youtube"></i></i></a>
					<a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
				</div>
			</div>
			<div><a class="logo" href="#">Prima<br>penzion</a></div>
			<?php
                require "./menu.php";
            ?>
			
			<img src="<?php echo "./img/{$poleStranek[$idStranky]->getObrazek()}" ?>" alt="PrimaPenzion">
	</header>


	<?php 
	require "./$idStranky.html";
	?>

	<footer>
		<div class="pata">

			<?php 
			
			require "./menu.php";
			
			?>
				
			
			<div class="logo">
				<a class="logo" href="#">Prima<br>penzion</a>
			</div>
			<div class="kontaktni-informace">
				
					<p><i class="fa-solid fa-location-dot"></i> <a class="odkaz" href="https://mapy.cz/s/hasurelugu" target="_blank"><b>PrimaPenzion</b>, Jablonského 640/2</a> </p>
					<p><i class="fa-solid fa-phone"></i><a class="odkaz" href="tel:">+420/ 606 123 456</a></p>
					<p><i class="fa-solid fa-envelope"></i><span>info@primakurzy.cz</span></p>
				
			</div>
			<div class="socIkony">
				<a href="https://www.facebook.com">
					<i class="fa-brands fa-square-facebook"></i>
				</a>
				<a href="https://twitter.com"><i class="fa-brands fa-youtube"></i></a>
				<a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
			</div>
			<div class="copy">&copy<b>PrimaPenzion</b> 2023</div>
		</div>
</footer>