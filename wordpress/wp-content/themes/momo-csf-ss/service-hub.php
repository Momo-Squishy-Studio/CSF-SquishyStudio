<?php 
/**
 * 	Template Name: Hub de services
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<?php get_template_part( 'partials/hero-generique' );?>

<?php get_template_part( 'partials/description' );?>

<section class="nouvelles-don">
		<?php echo
			gen_ballon('10vw', '120px'),
			gen_ballon('80vw', '-400px', 1.2),
			gen_ballon('15vw', '800px');
		?>
		<div class="container">
			<div class="nouvelles-accueil">
				<div class="row">
					<div class="col-12">
					<h1><?php the_title(); // Titre de la page ?></h1>
					</div>
					<div id="fetch-api-cards-hub-services" class="row">
					</div>
				</div>
			</div>
		</div>
</section>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>