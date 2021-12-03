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
					<h1 class="h1-evenements"><?php csf_get_option('ttl_nouvelles'); ?></h1>
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

<script>
	var orderby = document.getElementById("order-date");

function getnouvelles(param){

	fetch(`<?php the_field('json'); ?>/wp-json/wp/v2/news?_embed&per_page=13&order=date&order=${param}`)
	.then(response => response.json())
	.then(data => { 
		console.log(data);
		let html2 = "";
		let fetchDivHub = document.querySelector('#fetch-api-cards-hub')

		for (let i = 0; i < `${clickplus}`; i++) {

			let link = data[i].link;
			let title = data[i].title.rendered;
			let auteur = data[i].acf.auteur;
			let categorie = data[i].acf.categorie;
			let date = data[i].acf.date;
			let resume = data[i].acf.resume;
			let image = data[i]._embedded['wp:featuredmedia'][0].source_url;

			html2 += 
				`<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
					<div class="card card1">
						<div class="card-body">
							<h2 class="card-title">${title}</h2>
							<img src="${image}" class="card-img-top"/>
							<p>${resume}</p>
							<div class="card-footer"><a href='${link}'><button class="hero-button"><?php csf_get_option('txt_btn_plus'); ?></button></a></div>
						</div>
					</div>
				</div>`;

			fetchDivHub.innerHTML = html2;
		}
	});
}

//-  ----------------------------------------------------------------------------
getnouvelles("desc")

orderby.addEventListener("change", function() {
	var getFunction2 = this.value
	getnouvelles(getFunction2)
});

var clickplus = 6;
let btnNews= document.querySelector('#afficher-plus-nouvelles');
btnNews.addEventListener('click', function() {

	clickplus += 6;

	if(clickplus > 13)
		clickplus = 13;

	fetch(`<?php the_field('json'); ?>/wp-json/wp/v2/news?_embed&per_page=${clickplus}&order=date&order=desc`)
	.then(response => response.json())
	.then(data => {
		let html2 = "";
		let fetchDivHub = document.querySelector('#fetch-api-cards-hub')

		for (let i = 0; i < `${clickplus}`; i++) {

			let link = data[i].link;
			let title = data[i].title.rendered;
			let auteur = data[i].acf.auteur;
			let categorie = data[i].acf.categorie;
			let date = data[i].acf.date;
			let resume = data[i].acf.resume;
			let image = data[i]._embedded['wp:featuredmedia'][0].source_url;

			html2 += 
				`<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
					<div class="card card1">
						<div class="card-body">
							<h2 class="card-title">${title}</h2>
							<img src="${image}" class="card-img-top"/>
							<p>${resume}</p>
							<div class="card-footer"><a href='${link}'><button class="hero-button"><?php csf_get_option('txt_btn_plus'); ?></button></a></div>
						</div>
					</div>
				</div>`;

			fetchDivHub.innerHTML = html2;
		}

		if (clickplus > 12) btnNews.style.display = "none";
		console.log(clickplus);
	});
	});
	</script>
	
	<?php endif; ?>	

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;
get_template_part( 'partials/donation' ); // Affiche partials/donation.php
get_footer(); // Affiche footer.php 
?>