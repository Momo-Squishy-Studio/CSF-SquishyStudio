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

		<section class="nouvelles-don">
		<img class="ballon-4" src="<?php echo get_template_directory_uri(); ?>\site_ressources\images\ballon_AP.svg" alt="ballon">
		<img class="ballon-5" src="<?php echo get_template_directory_uri(); ?>\site_ressources\images\ballon_AP.svg" alt="ballon">
		<img class="ballon-6" src="<?php echo get_template_directory_uri(); ?>\site_ressources\images\ballon_AP.svg" alt="ballon">
		<div class="container">
			<div class="nouvelles-accueil">
				<div class="row">
					<div class="col-12">
					<h1><?php the_title(); // Titre de la page ?></h1>
					</div>
					<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
						<div class="card card1" id="card-v2">							
							<div class="card-body">
								<h2 class="card-title">Nouvelle 1</h2>
								<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/image_02.jpg" class="card-img-top">
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
								<div class="card-footer" id="card-footer-v2"><a href="detail-nouvelle.html"><button class="hero-button">En Savoir Plus</button></a></div>
							</div>
						</div>
					</div>
	
					<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
						<div class="card card2" id="card-v2">            
							<div class="card-body">
								<h2 class="card-title">Nouvelle 2</h2>
								<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/image_02.jpg" class="card-img-top">
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
								<div class="card-footer" id="card-footer-v2"><a href="detail-nouvelle.html"><button class="hero-button">En Savoir Plus</button></a></div>
							</div>
						</div>
					</div>
	
					<div class="col-xl-4 col-lg-12 col-sm-12 mb-4">
						<div class="card card3" id="card-v2">
							<div class="card-body">
								<h2 class="card-title">Nouvelle 3</h2>
								<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/image_02.jpg" class="card-img-top">
							   <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
								<div class="card-footer" id="card-footer-v2"><a href="detail-nouvelle.html"><button class="hero-button">En Savoir Plus</button></a></div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-12 col-sm-12 mb-4">
						<div class="card card3" id="card-v2">
							<div class="card-body">
								<h2 class="card-title">Nouvelle 4</h2>
								<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/image_02.jpg" class="card-img-top">
							   <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
								<div class="card-footer" id="card-footer-v2"><a href="detail-nouvelle.html"><button class="hero-button">En Savoir Plus</button></a></div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-12 col-sm-12 mb-4">
						<div class="card card3" id="card-v2">
							<div class="card-body">
								<h2 class="card-title">Nouvelle 5</h2>
								<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/image_02.jpg" class="card-img-top">
							   <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
								<div class="card-footer" id="card-footer-v2"><a href="detail-nouvelle.html"><button class="hero-button">En Savoir Plus</button></a></div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-12 col-sm-12 mb-4">
						<div class="card card3" id="card-v2">
							<div class="card-body">
								<h2 class="card-title">Nouvelle 6</h2>
								<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/image_02.jpg" class="card-img-top">
							   <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
								<div class="card-footer" id="card-footer-v2"><a href="detail-nouvelle.html"><button class="hero-button">En Savoir Plus</button></a></div>
							</div>
						</div>
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

get_footer(); // Affiche footer.php 
?>