<?php 
/**
 * 	Template Name: Hub de nouvelles
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
	<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>

		<?php get_template_part( 'partials/hero-generique' );?>

		<section class="evenements-bg vague-top vague-bot">
		<div class="container">
			<div class="nouvelles-accueil">
				<div class="row">
					<div class="col-12">
					<h1 class="h1-evenements"><?php get_home_info('titre_nouvelles'); ?></h1>
					</div>
					<div class="col-12">
					<div class="trier-order">
						<label for="trier-par"><p class="p-blanc"><?php get_home_info('trier_par'); ?></p></label>
						<select class="order-button" name="order-by-date" id="order-date">
							<option class="order-button" selected="selected" value="desc"><?php get_home_info('plus_recentes'); ?></option>
							<option class="order-button" value="asc"><?php get_home_info('plus_anciennes'); ?></option>
						</select>
					</div>
					</div>
					<div id="fetch-api-cards-hub" class="row">
					</div>
					<div class="col-12">
						<button class="footer-button" id="afficher-plus-nouvelles"><?php get_home_info('bouton_afficher_nouvelles'); ?></button>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php endif; ?>	

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;
get_template_part( 'partials/donation' ); // Affiche partials/donation.php
get_footer(); // Affiche footer.php 
?>