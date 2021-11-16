<?php
/**
 * Modèle permettant d'afficher un article (Post).
 */

get_header(); // Affiche header.php

// Avons-nous des articles à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les articles (logiquement, il n'y en aura qu'un)
	while ( have_posts() ) : the_post(); 
?>

<?php get_template_part( 'partials/hero-detail-nouvelle' );?>

<div style='height: 100px; background: url("<?php echo get_template_directory_uri(); ?>/site_ressources/images/vague.svg") center / 100% 100% no-repeat'></div>

<?php get_template_part( 'partials/description' ); ?>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#EC1A24" fill-opacity="1" d="M0,160L80,181.3C160,203,320,245,480,234.7C640,224,800,160,960,160C1120,160,1280,224,1360,256L1440,288L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
</path>
</svg>

<section class="nouvelles-don">
		<img class="ballon-4" src="<?php echo get_template_directory_uri(); ?>\site_ressources\images\ballon_AP.svg" alt="ballon">
		<img class="ballon-5" src="<?php echo get_template_directory_uri(); ?>\site_ressources\images\ballon_AP.svg" alt="ballon">
		<img class="ballon-6" src="<?php echo get_template_directory_uri(); ?>\site_ressources\images\ballon_AP.svg" alt="ballon">
		<div class="container">
			<div class="nouvelles-accueil">
				<div class="row">
					<div class="col-12">
					<h1><?php the_field('prochaines_nouvelles'); ?></h1>
					</div>
					<div class="row">
					<?php					
					$current_page = 3;

					 $arguments = array( // 👈 Tableau d'arguments
						'pages' => $current_page,
						'post_type' => 'news',
						'posts_per_page' => 3						
					  );
  					$news = new WP_Query($arguments);
  					while ($news->have_posts()) : $news->the_post(); 
					?>
					<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
					<div class="card card1">
						<div class="card-body">
							<h2 class="card-title"><?php the_title(); ?></h2>
							<div class="featured-image">
							<?php if ( has_post_thumbnail() ) :           
                            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' ); ?>
							<img src="<?php echo $featured_image[0]; ?>" class="card-img-top"/>
							<?php endif; ?>
							<p><?php the_field('resume'); ?></p>
							</div>
							<div class="card-footer"><a href="' . get_permalink() . '"><button class="hero-button">En Savoir Plus</button></a></div>
						</div>
					</div>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php endwhile; // Fermeture de la boucle

	else : // Si aucun article n'a été trouvée
		get_template_part( 'partials/404' ); // Affiche partials/404.php
	endif;

	get_footer(); // Affiche footer.php 
?>
