<section>
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
				<p><?php the_field('description_page'); ?></p><br>
				<?php gen_btn_don('hero-button',1,'onclick','window.location.href=\'https://www.clownssansfrontieres.ca/donner\''); ?>
				<!-- <button class="hero-button"><?php csf_get_option('txt_btn_don'); ?></button> -->
			</div>
		</div>
	</div>
</section>