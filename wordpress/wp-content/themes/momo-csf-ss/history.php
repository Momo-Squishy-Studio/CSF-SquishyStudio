<?php 
/**
 * 	Template Name: Histoire
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
	
	<?php endif; ?>
	
	<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
	
endif;

get_template_part( 'partials/hero-generique' );
get_template_part( 'partials/description' );
get_template_part( 'partials/donation' ); // Affiche partials/donation.php

get_footer(); // Affiche footer.php 
?>