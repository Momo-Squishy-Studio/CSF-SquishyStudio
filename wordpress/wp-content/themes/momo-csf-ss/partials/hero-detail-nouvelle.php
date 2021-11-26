<div class="container">
	<div class="hero">
		<?php echo
			gen_ballon('-30vw'), //gen_ballon(<string>|0 x: transition sur l'axe x (0 pour désactiver), <string>|0 y: transition sur l'axe y (0 pour désactiver), <float> scale: taille du ballon)
			gen_ballon('35vw', '-180px', 1.2),
			gen_ballon('25vw', '300px', .7);
		?>
		<img class="hero-logo" src="<?php echo get_option('site_logo')?>" alt="logo">
		<h1><?php the_title(); // Titre de la page ?></h1>
		<div class="hero-container">
			<p><?php the_field('resume'); ?>
            </p><br>
			<p id="p-rouge"><?php the_field('auteur'); ?> - <?php the_field('date'); ?> - <?php the_field('categorie'); ?></p>
		</div>
	</div>
</div>