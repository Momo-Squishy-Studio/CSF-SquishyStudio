<?php 
/**
 * 	Template Name: Don
 * 	La page des MVP
 */

get_header(); // Affiche header.php


if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
	?>

	<article>
			<h2>
				<?php the_title(); // Titre de la page ?>
			</h2>
			
			<?php the_content(); // Contenu principal de la page ?>
	</article>
	<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	echo "Hello World";
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_template_part( 'partials/donation' ); // Affiche partials/donation.php

get_footer(); // Affiche footer.php 
?>