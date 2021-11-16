<?php 
/**
 * 	Template Name: Équipe
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">François Ferland</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso1.jfif" class="card-img-top">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="modal-footer">
		</div>
	  </div>
	</div>
  </div>

  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Billy Maude</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso2.jfif" class="card-img-top">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="modal-footer">
		</div>
	  </div>
	</div>
  </div>
  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Héroux Devtek</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso3.jfif" class="card-img-top">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="modal-footer">
		</div>
	  </div>
	</div>
  </div>
	
  <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Jolicoeur Lacasse</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso4.jfif" class="card-img-top">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="modal-footer">
		</div>
	  </div>
	</div>
  </div>

  <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Jean Crevier</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso5.jfif" class="card-img-top">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="modal-footer">
		</div>
	  </div>
	</div>
  </div>

  <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Jean-François Paré</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso6.jfif" class="card-img-top">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="modal-footer">
		</div>
	  </div>
	</div>
  </div>

  <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Katel Le Fustec</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso7.jfif" class="card-img-top">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="modal-footer">
		</div>
	  </div>
	</div>
  </div>

  <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Michèle D’Argenio</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso8.jfif" class="card-img-top">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="modal-footer">
		</div>
	  </div>
	</div>
  </div>

  <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Marie-Eve Aubry</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso9.jfif" class="card-img-top">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="modal-footer">
		</div>
	  </div>
	</div>
  </div>
<!-- Modal -->

<?php get_template_part( 'partials/hero-generique' );?>

	<section class="nouvelles-don">
		<img class="ballon-4" src="<?php echo get_template_directory_uri(); ?>/site_ressources\images\ballon_AP.svg" alt="ballon">
		<img class="ballon-5" src="<?php echo get_template_directory_uri(); ?>/site_ressources\images\ballon_AP.svg" alt="ballon">
		<img class="ballon-6" src="<?php echo get_template_directory_uri(); ?>/site_ressources\images\ballon_AP.svg" alt="ballon">
		<div class="container">
			<div class="nouvelles-accueil">
				<div class="row">
					<div class="col-12">
					<h1>Direction et bénévoles</h1>
					</div>
					<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
						<div class="card card1" id="card-v2">							
							<div class="card-body">
								<h2 class="card-title">Président</h2>
								<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso1.jfif" class="card-img-top">
								<p>François Ferland</p>
								<div class="card-footer" id="card-footer-v2"><button type="button" class="hero-button" data-bs-toggle="modal" data-bs-target="#exampleModal1">
									En Savoir Plus
								  </button></div>
							</div>
						</div>
					</div>

					
					<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
						<div class="card card1" id="card-v2">
							<div class="card-body">
								<h2 class="card-title">Graphisme</h2>
								<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso2.jfif" class="card-img-top">
							   <p>Billy Maude</p>
							   <div class="card-footer" id="card-footer-v2"><button type="button" class="hero-button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
								En Savoir Plus
							  </button></div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
						<div class="card card1" id="card-v2">
							<div class="card-body">
								<h2 class="card-title">Technicien</h2>
								<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso3.jfif" class="card-img-top">
							   <p>Héroux Devtek</p>
							   <div class="card-footer" id="card-footer-v2"><button type="button" class="hero-button" data-bs-toggle="modal" data-bs-target="#exampleModal3">
								En Savoir Plus
							  </button></div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
						<div class="card card1" id="card-v2">            
							<div class="card-body">
								<h2 class="card-title">Avocat et médiateur</h2>
								<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso4.jfif" class="card-img-top">
								<p>Jolicoeur Lacasse</p>
								<div class="card-footer" id="card-footer-v2"><button type="button" class="hero-button" data-bs-toggle="modal" data-bs-target="#exampleModal4">
									En Savoir Plus
								  </button></div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
						<div class="card card1" id="card-v2">
							<div class="card-body">
								<h2 class="card-title">Secrétaire-trésorier</h2>
								<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso5.jfif" class="card-img-top">
							   <p>Jean Crevier</p>
							   <div class="card-footer" id="card-footer-v2"><button type="button" class="hero-button" data-bs-toggle="modal" data-bs-target="#exampleModal5">
								En Savoir Plus
							  </button></div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
						<div class="card card1" id="card-v2">
							<div class="card-body">
								<h2 class="card-title">Soutien technique</h2>
								<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso6.jfif" class="card-img-top">
							   <p>Jean-François Paré</p>
							   <div class="card-footer" id="card-footer-v2"><button type="button" class="hero-button" data-bs-toggle="modal" data-bs-target="#exampleModal6">
								En Savoir Plus
							  </button></div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
						<div class="card card1" id="card-v2">
							<div class="card-body">
								<h2 class="card-title">Directrice générale</h2>
								<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso7.jfif" class="card-img-top">
							   <p>Katel Le Fustec</p>
							   <div class="card-footer" id="card-footer-v2"><button type="button" class="hero-button" data-bs-toggle="modal" data-bs-target="#exampleModal7">
								En Savoir Plus
							  </button></div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
						<div class="card card1" id="card-v2">
							<div class="card-body">
								<h2 class="card-title">Adjointe à la direction</h2>
								<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso8.jfif" class="card-img-top">
							   <p>Michèle D’Argenio</p>
							   <div class="card-footer" id="card-footer-v2"><button type="button" class="hero-button" data-bs-toggle="modal" data-bs-target="#exampleModal8">
								En Savoir Plus
							  </button></div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
						<div class="card card1" id="card-v2">
							<div class="card-body">
								<h2 class="card-title">Responsable du Comité</h2>
								<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/this_person_not_exist/perso9.jfif" class="card-img-top">
							   <p>Marie-Eve Aubry</p>
							   <div class="card-footer" id="card-footer-v2"><button type="button" class="hero-button" data-bs-toggle="modal" data-bs-target="#exampleModal9">
								En Savoir Plus
							  </button></div>
							</div>
						</div>
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