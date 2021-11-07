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

	<?php get_template_part( 'partials/hero-generique' );?>

<div style='height: 100px; background: url("<?php echo get_template_directory_uri(); ?>/site_ressources/images/vague.svg") center / 100% 100% no-repeat'></div>

<section class="evenements-bg">
	<div class="container">
	<div class="temoignage">
		<div class="row">
			<div class="col-12">
				<div class="card card1">                        
					<div class="card-body">
						<p id=article-texte>
						<?php the_content(); // Contenu principal de la page ?>
						</p>                               
						<img src="<?php echo get_template_directory_uri(); ?>/site_ressources/images/image_06.jpg" class="card-img-top">
					</div>
					<div class="card-footer"><p id="p-rouge"><p id="p-rouge"><?php the_field('card_footer_text'); ?></p></div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#EC1A24" fill-opacity="1" d="M0,160L80,181.3C160,203,320,245,480,234.7C640,224,800,160,960,160C1120,160,1280,224,1360,256L1440,288L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
</path>
</svg>

<section class="nouvelles-don">
	<div class="don-accueil">
		<img class="ballon-7" src="<?php echo get_template_directory_uri(); ?>\site_ressources\images\ballon_AP.svg" alt="ballon">
		<img class="ballon-8" src="<?php echo get_template_directory_uri(); ?>\site_ressources\images\ballon_AP.svg" alt="ballon">
		<div class="row">
		<div class="col-12">
		<h1>Faire Un Don</h1>
		</div>
		<div class="col-12">
		<div class="don-bulles">
			<div class="bulle">5$</div>
			<div class="bulle">10$</div>
			<div class="bulle">15$</div>
			<div class="bulle">20$</div>
			<div class="bulle">25$</div>
			<div class="bulle">30$</div>
			<div class="bulle">35$</div>
			<div class="bulle">50$</div>
		</div>
		<!-- animation mono -->
		<div id="mono">
			<img src="https://i.imgur.com/DOif5Qj.png" id="roue">
			<img src="https://i.imgur.com/qYqHcNS.png" id="monocycle">
		  </div>
		  
		  <div id="mono2">
			<img src="https://i.imgur.com/DOif5Qj.png" id="roue2">
			<img src="https://i.imgur.com/qYqHcNS.png" id="monocycle2">
		  </div>
		  <!-- animation mono fin-->
		<button class="hero-button" id="mono-don">Donner</button>
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