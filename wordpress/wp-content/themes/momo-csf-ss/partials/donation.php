<div class="don-accueil">
	<?php echo
		gen_ballon('-40vw', '50px', 1.2),
		gen_ballon('40vw', '100px', .9)
	?>
	<div class="row">
		<h1 class="col-12" id="don"><?php csf_get_option('txt_btn_don'); ?></h1>
		<div class="col-12">
			<div class="don-bulles">
				<form name="donation" action="https://www.clownssansfrontieres.ca/donner/" class="donations">
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
					<?php gen_btn_don('hero-button',1,'onclick','setTimeout(()=>{this.parentElement.submit()}, 2500)','mono-don'); ?>
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