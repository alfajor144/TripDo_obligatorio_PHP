
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<title><?php echo $title ?></title>    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Registro de usuario">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/styles/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/styles/<?= $style ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/styles/<?= $responsive ?>">
</head>

<body>
	<!-- Header -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class=" header_container fixed-top d-flex flex-row align-items-center justify-content-start">
						<!-- Logo -->
						<div class="logo_container ">
                            <a href="<?= base_url() ?>">
                                <div class="logo">
                                    <div>TripDo</div>
                                    <div>Agencia de viajes</div>
                                    <div class="logo_image"><img src="<?= base_url()?>/public/images/logo.png" alt=""></div>
                                </div>
                            </a>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav ml-auto ">
							<ul class="main_nav_list ">

								<?php foreach($main_menu as $item): ?>
								<li class="main_nav_item">
									<a href="<?= $item['url'] ?>"><?= $item['title'] ?></a>
								</li>
								<?php endforeach ?>									
							</ul>
						</nav>

						<!-- Main Navigation -->
						<!-- <nav class="main_nav ml-auto ">
							<ul class="main_nav_list ">
								<li class="main_nav_item active"><a href="index.html">Inicio</a></li>
								<li class="main_nav_item"><a href="#">About us</a></li>
								<li class="main_nav_item"><a href="busqueda.html">Buscar</a></li>
								<li class="main_nav_item"><a href="viaje.html">Viaje</a></li>
								<li class="main_nav_item"><a href="#">Contact</a></li>
							</ul>
						</nav> -->
						<!-- Hamburger -->
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->
	<div class="menu_container menu_mm">
		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<div class="menu_search_form_container">
					<form action="#" id="menu_search_form">
						<input type="search" class="menu_search_input menu_mm">
						<button id="menu_search_submit" class="menu_search_submit" type="submit"><img
								src="<?= base_url()?>/public/images/search_2.png" alt=""></button>
					</form>
				</div>
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="#">Home</a></li>
					<li class="menu_item menu_mm"><a href="about.html">About us</a></li>
					<li class="menu_item menu_mm"><a href="offers.html">Offers</a></li>
					<li class="menu_item menu_mm"><a href="news.html">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
				</ul>

				<!-- Menu Social -->

				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest"
									aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin"
									aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram"
									aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook"
									aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter"
									aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>
		</div>
	</div>

        
