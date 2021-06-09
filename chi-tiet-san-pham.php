<!DOCTYPE html>
<html lang="en">
<body class="bg-second body">
	<?php
	include_once('components/head.php');
	include_once('components/header.php');
	?>
	<section class="region bg-third py-2">
		<div class="container px-lg-5 px-md-3 px-1">
			<span class="text-white">Vietnam</span>
		</div>
	</section>
	<main class="bodier">
		<div class="container px-lg-5 px-md-3 px-1">
			<?php include_once('components/breadcrumb.php') ?>
			<div class="head-title py-lg-4 py-3 bg-white px-lg-5 px-md-3 px-2 mb-5">
				<h2>DIRECT OPERATED CHECK VALVE, SAE FLANGE - SERIES C5V</h2>
			</div>
			<div class="row py-lg-5 py-3 px-lg-5 px-3 gx-0 bg-white mb-5 overflow-hidden">
				<div class="col-md-4 col-12">
					<div class="product-slider text-center mb-lg-3 mb-2">
						<div class="product-slider__inner mb-4">
							<img src="assets/images/product 2.webp" alt="" width="120" height="120" class=" _img mx-auto mb-5 img-fluid">
							<p href="" title="" class="h4 text-decoration-none text-primary">Click for large View</p>
						</div>
						<div class="product-slider__slide d-flex justify-content-center">
							<a href="" title="" class="_img-link">
								<img src="assets/images/product.webp" alt="" class="img-fluid _img mx-auto" width="60" height="60">
							</a>
							<a href="" title="" class="_img-link">
								<img src="assets/images/product 2.webp" alt="" class="img-fluid _img mx-auto" width="60" height="60">
							</a>
							<a href="" title="" class="_img-link">
								<img src="assets/images/product 2.webp" alt="" class="img-fluid _img mx-auto" width="60" height="60">
							</a>
						</div>
					</div>
					<p class="product-description">Parker direct operated check valves series C5V with SAE flange are easy to install and provide high flow rates. They can be mounted either directly on the outlet flange of pumps or on the inlet flange of actuators to achieve a very compact design.</p>
				</div>
				<hr class="d-md-none d-block">
				<div class="offset-md-1 offset-0 col-md-6 col-12 bg-gray">
					<p class="product-name fw-600 h3">Parker direct operated</p>
					<p class="product-price fs-1125rem">
						600
						<i class="">USD</i>
					</p>
					<div class="product-shortdes mb-lg-3 mb-2">
						Parker direct operated check valves series C5V with SAE flange are easy to install and provide high flow rates. They can be mounted either directly on the outlet flange of pumps or on the inlet flange of actuators to achieve a very compact design
					</div>
					<a href="" class="text-decoration-none px-4 py-3 bg-primary-color d-lg-inline-block d-block text-center fw-600 ">
						Contact now
					</a>
				</div>
			</div>
			<div class="row gx-0 mb-5 overflow-hidden">
				<div class="col-12">
					<div class="row row-cols-md-4 row-cols-2 gx-lg-4 gx-2 gy-2">
						<?php
						for ($i=0; $i <4 ; $i++) { 
							?>
							<div class="col">
								<a href="" class="product-link-info text-uppercase d-block px-2 bg-fourth text-center text-decoration-none fw-600">product-overview</a>
							</div>
							<?php
						}
						?>
					</div>
				</div>
				<div class="s_content bg-white" style="min-height: 300px;">
					
				</div>
			</div>
			<div class="recommended mb-5 overflow-hidden">
				<div class="py-2 ps-lg-5 ps-md-3 ps-2 bg-fourth text-white mb-2 fw-600 text-uppercase">
					RECOMMENDED
				</div>
				<div class="bg-white">
					<div class="row row-cols-8 row-cols-md-4 row-cols-2 px-lg-5 px-md-4 px-2 py-4 gy-2">
						<?php for ($i=0; $i < 8; $i++) { 
							
							?>
							<div class="col">
								<a href="" class="_img-link d-block border-secondary border text-center" title="">
									<img src="assets/images/product 3.webp" class="_img img-fluid" alt="">
								</a>
								<a href="" class="product-suggest-link d-block text-center link-secondary">OBSOLETE: Pilot Operated Check Valve, SAE Flange - Series C5P</a>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="row gx-0 overflow-hidden">

				<?php include_once('components/follow-us.php') ?>
				<?php include_once('components/contact-us.php') ?>
			</div>
		</div>
	</main>
	<?php include_once('components/footer.php') ?>
	<?php include_once('components/extension.php') ?>
</body>
<?php include_once('components/script.php') ?>
</html>