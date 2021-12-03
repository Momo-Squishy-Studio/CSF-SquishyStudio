<section class="evenements-bg vague-top vague-bot">
	<div class="container">
	<div class="temoignage">
		<div class="row">
			<div class="col-12">
				<div class="card card1">                        
					<div class="card-body">
						<p id=article-texte>
							<?php the_content(); // Contenu principal de la page ?>
						</p>
					</div>
					<div class="card-footer"><p id="p-rouge"><?php the_field('auteur'); ?> - <?php the_field('date'); ?> - <?php the_field('categorie'); ?></p></div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>