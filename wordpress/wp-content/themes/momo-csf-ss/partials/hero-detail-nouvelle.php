<div class="container">
	<div class="hero">
	<img class="ballon-1" src="<?php echo get_template_directory_uri(); ?>\site_ressources\images\ballon_AP.svg" alt="ballon">
		<img class="ballon-2" src="<?php echo get_template_directory_uri(); ?>\site_ressources\images\ballon_AP.svg" alt="ballon">
		<img class="ballon-3" src="<?php echo get_template_directory_uri(); ?>\site_ressources\images\ballon_AP.svg" alt="ballon">
		<img class="hero-logo" src="<?php echo get_template_directory_uri(); ?>\site_ressources\icones\CSF_Logo_MASA_RNW.svg" alt="logo clown">
		<h1><?php the_title(); // Titre de la page ?></h1>
		<div class="hero-container">
			<p><?php the_field('resume'); ?>
            </p><br>
			<p id="p-rouge"><?php the_field('auteur'); ?> - <?php the_field('date'); ?> - <?php the_field('categorie'); ?></p>
		</div>
	</div>
	</div>