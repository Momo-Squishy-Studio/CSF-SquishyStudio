<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer>
	<div class="footer-square">
		<?php wp_nav_menu( array( 'theme_location' => 'social-menu', 'link_before' => '') );?>
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

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */

?>

</body>
</html>
