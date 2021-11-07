<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer>
	<div class="footer-square">
		<?php
		wp_nav_menu( array( 'theme_location' => 'social-menu') );?>
	</div>

	<div id="partenaires-list">
		<?php //https://stackoverflow.com/questions/9802788/call-a-rest-api-in-php
		$patnPosts = json_decode(file_get_contents('http://localhost/wp-json/wp/v2/partners?orderby=title&order=asc'));
		echo $patnPost;
			foreach($patnPosts as $patnPost):
				$id = $patnPost->id;?>
					<a href="<?php echo get_field('link', $id)?>" target="_blank">
						<img src="<?php echo get_field('icon_' . get_field('icon_type', $id), $id);?>" alt="logo <?php echo $patnPost->title->rendered;?>">
					</a>
			<?php endforeach;?>
		</div>
	<p>Développement web - Collège Montmorency - 2021</p>
</footer>
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
