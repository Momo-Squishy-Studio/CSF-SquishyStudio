<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer class="footer-square vague-top">
	<container>
		<div class="row">
			<div class="col-xl-4 col-md-6 col-sm-12">
				<div class="aligner">
					<a href="/"><img class="whiteclown" src="<?php echo get_option('alt_logo');?>" href="index.html"></a>
					<h1 class="quote-blanc">Clowns sans<br>frontières</h1>
				</div>
				<button class="footer-button">Faire Un Don</button>
			</div>

			<div class="col-xl-4 col-md-6 col-sm-12 aligner2">
				<a class="info" href="tel:+514-495-1287">Téléphone : 514-495-1287</a>
				<a class="info" href="mailto:contact@clownssansfrontieres.ca">Courriel : contact@clownssansfrontieres.ca</a>
				<a class="info" href="https://goo.gl/maps/2mN1r1q5v54WZ1su5">
					Adresse: 105 rue Ontario Est, bureau 203,<br>Montréal, Québec, H2X 1G9
				</a>
			</div>

			<div class="col-xl-4 col-md-12  ">
				<?php wp_nav_menu( array( 'theme_location' => 'social-menu', 'container' => '', 'menu_class' => 'aligner3') );?>
			</div>
		</div>
	</container>

	<div id="partenaires-list">
		<?php //https://stackoverflow.com/questions/9802788/call-a-rest-api-in-php
			$patnPosts = json_decode(file_get_contents(get_site_url() . '/wp-json/wp/v2/partners?orderby=title&order=asc'));
			echo $patnPost;
			foreach($patnPosts as $patnPost):
				$acf = $patnPost->acf;
		?>
			<a href="<?php echo $acf->link?>" target="_blank" class="partenaire">
				<img src="<?php echo get_partner_img_url($acf);?>" alt="logo <?php echo $patnPost->title->rendered;?>">
			</a>
		<?php endforeach;?>
	</div>

	<div class="copyright">©2021 | clowns sans frontières | squishy studios</div>
</footer>

<script src="https://kit.fontawesome.com/f5e9d462b9.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>
</html>
