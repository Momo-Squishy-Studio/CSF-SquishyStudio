<?php 
/**
 * 	Template Name: Hub de services
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<?php get_template_part( 'partials/hero-generique' );?>

<?php get_template_part( 'partials/description' );?>

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
					<h1><?php the_title(); // Titre de la page ?></h1>
					</div>
					<div id="fetch-api-cards-hub-services" class="row">
					</div>
				</div>
			</div>
		</div>
</section>

<script>
		fetch("<?php the_field('json'); ?>")
	.then(response => response.json())
	.then(data => {
		let html3 = "";
		let fetchDivEquipe = document.querySelector('#fetch-api-cards-hub-services')

		for (let i = 0; i < 2; i++) {

			let link = data[i].link;
			let title = data[i].title.rendered;
			let membre = data[i].acf.resume;
			let image = data[i]._embedded['wp:featuredmedia'][0].source_url;

			html3 += 
				`<div class="col-xl-6 col-lg-6 col-sm-12 mb-4">
					<div class="card card1" id="card-v2">
						<div class="card-body">
							<h2 class="card-title">${title}</h2>
							<img src="${image}" class="card-img-top"/>
							<p>${membre}</p>
							<div class="card-footer" id="card-footer-v2"><a href='${link}'><button class="hero-button"><?php the_field('en_savoir_plus'); ?></button></a></div>
						</div>
					</div>
				</div>`;

			fetchDivEquipe.innerHTML = html3;
		 }
	  });
</script>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>