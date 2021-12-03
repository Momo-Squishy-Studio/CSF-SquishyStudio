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

<?php get_template_part( 'partials/description' ); ?>

</path>
</svg>

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
					<h1><?php the_field('prochaines_nouvelles'); ?></h1>
					</div>
					<div class="row">
	
					<?php $next_post = get_previous_post();
					$next_value = get_post_meta( $next_post->ID, 'CUSTOM_FIELD', $single = true); ?>	
							
					<div class="col-xl-12 col-lg-12 col-sm-12 mb-4">
					<div class="card card1" id="card-v2">
						<div class="card-body">
							<h2 class="card-title"><?php echo get_the_title( $next_post->ID ); ?></h2>
							<div class="featured-image">
							<?php if ( has_post_thumbnail() ) :           
                            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $next_post->ID ), 'medium' ); ?>
							<img src="<?php echo $featured_image[0]; ?>" class="card-img-top"/>
							<?php endif; ?>
							<p><?php the_field('resume'); ?></p>
							</div>
							<div class="card-footer" id="card-footer-v2"><a href="<?php echo get_permalink( $next_post->ID ); ?>"><button class="hero-button">En Savoir Plus</button></a></div>
						</div>
					</div>
					</div>
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
