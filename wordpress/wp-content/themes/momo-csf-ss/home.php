<?php 
/**
 * 	Template Name: Accueil
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php
if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); ?>
	
	<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;
?>
	<div class="hero">
		<?php echo
			gen_ballon('-30vw'), //gen_ballon(<string>|0 x: transition sur l'axe x (0 pour désactiver), <string>|0 y: transition sur l'axe y (0 pour désactiver), <float> scale: taille du ballon)
			gen_ballon('35vw', '-180px', 1.2),
			gen_ballon('25vw', '300px', .7);
		?>
		<img class="hero-logo" src="<?php echo get_home_info('site_logo_' . get_home_info('site_logo_type'))?>" alt="logo">
		<h1><?php get_home_info('titre_site'); ?></h1>
		<div class="hero-container">
			<p><?php the_field('slogan'); ?></p>
			<button class="hero-button"><?php the_field('bouton_don'); ?></button>
		</div>
	</div>
	<?php get_template_part( 'partials/carousel' );?>

	<section class="evenements-bg vague-top vague-bot">
		<div class="container">
			<div class="evenements">
				<div class="row">

					<div class="col-12">
						<h1 class="h1-evenements"><?php get_home_info('evenements_titre'); ?></h1>
					</div>

					<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
						<div class="card card1">
							<div class="card-body">
								<h2 class="card-title"><?php get_home_info('spectacles_titre'); ?></h2>
								<img src="/wp-content/uploads/images/image_02.jpg" class="card-img-top">
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
								<div class="card-footer"><button class="hero-button"><?php get_home_info('en_savoir_plus'); ?></button></div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
						<div class="card card2">            
							<div class="card-body">
								<h2 class="card-title"><?php get_home_info('animations_titre'); ?></h2>
								<img src="/wp-content/uploads/images/image_02.jpg" class="card-img-top">
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
								<div class="card-footer"><button class="hero-button"><?php get_home_info('en_savoir_plus'); ?></button></div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-12 col-sm-12 mb-4">
						<div class="card card3">
							<div class="card-body">
								<h2 class="card-title"><?php get_home_info('ateliers_titre'); ?></h2>
								<img src="/wp-content/uploads/images/image_02.jpg" class="card-img-top">
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
								<div class="card-footer"><button class="hero-button"><?php get_home_info('en_savoir_plus'); ?></button></div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="temoignage">
				<div class="row">

					<div class="col-12">
						<h1 class="h1-evenements"><?php get_home_info('temoignage'); ?></h1>
					</div>
					
					<div class="col-12">
						<div class="card card1">
							<div class="card-body">
								<img src="/wp-content/uploads/images/image_02.jpg" class="card-img-top">
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
								<div class="card-footer"><button class="hero-button"><?php get_home_info('en_savoir_plus'); ?></button></div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>

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
					<h1><?php get_home_info('nouvelles'); ?></h1>
					</div>
					<div id="fetch-api-cards-accueil" class="row">
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'partials/donation' ); // Affiche partials/donation.php
//get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>