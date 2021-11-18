<div class="don-accueil">
	<img class="ballon-7" src="<?php echo get_template_directory_uri(); ?>\site_ressources\images\ballon_AP.svg" alt="ballon">
	<img class="ballon-8" src="<?php echo get_template_directory_uri(); ?>\site_ressources\images\ballon_AP.svg" alt="ballon">
	<div class="row">
		<h1 class="col-12" id="don"><?php the_field('bouton_don'); ?></h1>
		<div class="col-12">
			<div class="don-bulles">
				<form action="" class="donations">
					<input type="radio" name="amount" id="5" value="5">
					<input type="radio" name="amount" id="10" value="10">
					<input type="radio" name="amount" id="15" value="15">
					<input type="radio" name="amount" id="20" value="20">
					<input type="radio" name="amount" id="25" value="25">
					<input type="radio" name="amount" id="30" value="30">
					<input type="radio" name="amount" id="35" value="35">
					<input type="radio" name="amount" id="other" value="autre">
					<input type="number" name="amountOther" id="">
					<br>
					<input type="submit" class="hero-button" id="mono-don" value="<?php the_field('bouton_don'); ?>">
				</form>
				
				<!-- animation mono -->
				<div id="mono">
					<img src="https://i.imgur.com/DOif5Qj.png" id="roue">
					<img src="https://i.imgur.com/qYqHcNS.png" id="monocycle">
				</div>
				<!-- animation mono fin-->
				<div id="mono2">
					<img src="https://i.imgur.com/DOif5Qj.png" id="roue2">
					<img src="https://i.imgur.com/qYqHcNS.png" id="monocycle2">
				</div>
			</div>
		</div>
	</div>
</div>