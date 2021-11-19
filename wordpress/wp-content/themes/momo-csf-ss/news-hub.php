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

		<div style='height: 100px; background: url("<?php echo get_template_directory_uri(); ?>/site_ressources/images/vague.svg") center / 100% 100% no-repeat'></div>

		<section class="evenements-bg">
		<div class="container">
			<div class="nouvelles-accueil">
				<div class="row">
					<div class="col-12">
					<h1 class="h1-evenements"><?php the_field('titre_nouvelles'); ?></h1>
					</div>
					<div class="col-12">
					<div class="trier-order">
						<label for="trier-par"><p class="p-blanc"><?php the_field('trier_par'); ?></p></label>
						<select class="order-button" name="order-by-date" id="order-date">
							<option class="order-button" selected="selected" value="desc"><?php the_field('plus_recentes'); ?></option>
							<option class="order-button" value="asc"><?php the_field('plus_anciennes'); ?></option>
						</select>
					</div>
					</div>
					<div id="fetch-api-cards-hub" class="row">
					</div>
					<div class="col-12">
						<button class="footer-button" id="afficher-plus-nouvelles"><?php the_field('bouton_afficher_nouvelles'); ?></button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#EC1A24" fill-opacity="1" d="M0,160L80,181.3C160,203,320,245,480,234.7C640,224,800,160,960,160C1120,160,1280,224,1360,256L1440,288L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
	
		<?php endif; ?>	

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;
get_template_part( 'partials/donation' ); // Affiche partials/donation.php
get_footer(); // Affiche footer.php 
?>