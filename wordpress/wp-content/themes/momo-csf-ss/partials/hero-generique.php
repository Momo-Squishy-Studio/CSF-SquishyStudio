<section>
	<div class="container">
    	<div class="hero">
		<img class="ballon-1" src="<?php echo get_template_directory_uri(); ?>\site_ressources\images\ballon_AP.svg" alt="ballon">
		<img class="ballon-2" src="<?php echo get_template_directory_uri(); ?>\site_ressources\images\ballon_AP.svg" alt="ballon">
		<img class="ballon-3" src="<?php echo get_template_directory_uri(); ?>\site_ressources\images\ballon_AP.svg" alt="ballon">
		<img class="hero-logo" src="<?php echo get_template_directory_uri(); ?>\site_ressources\icones\CSF_Logo_MASA_RNW.svg" alt="logo clown">
		<h1><?php the_title(); // Titre de la page ?></h1>
		<div class="hero-container">
			<p><?php the_field('description_page'); ?></p><br>
			<button class="hero-button"><?php the_field('bouton_don'); ?></button>
		</div>
	</div>
	<div class="bg-swiper">
	<div class="swiper-container">
		<div class="swiper-wrapper">
		<div class="swiper-slide">
		<img class="carousel-accueil-img" src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/image_01.jpg">
		</div>
		<div class="swiper-slide">
		<img class="carousel-accueil-img" src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/image_02.jpg">
		</div>
		<div class="swiper-slide">
		<img class="carousel-accueil-img" src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/image_03.jpg"> 
		</div>
		<div class="swiper-slide">
		<img class="carousel-accueil-img" src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/image_04.jpg">
		</div>
		</div>
		<div class="swiper-pagination"></div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
	  </div>
	</div>
</div>
</section>