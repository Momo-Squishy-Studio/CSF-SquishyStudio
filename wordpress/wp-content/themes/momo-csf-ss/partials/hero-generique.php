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
</div>
</section>