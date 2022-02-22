<!DOCTYPE html>
<html>
	<!-- Integrade head.php -->
	<?php include("include/head.php"); ?>

	<body>
		<!-- Integrate header & nav -->
		<?php include("include/header-nav.php"); ?>

		<div id="form">
			<fieldset>
				<legend>Contactez-nous</legend>

				<form method="POST">
					<div class="sender-info">
						<div>
							<label for="name">Nom :</label>
							<input type="text" name="" required id="name">
						</div>

						<div>
							<label for="email">Email :</label>
							<input type="email" name="" required id="email">
						</div>

						<div>
							<label for="telephone">Téléphone :</label>
							<input type="telephone" name="" required id="telephone">
						</div>
					</div>

					<div class="request">
						<label for="request">Message :</label>
						<textarea name="request" placeholder="Expliquez votre demande..." rows="8" required id="request"></textarea>
					</div>

					<div class="personal-info">
						<input type="checkbox" name="" id="check-conscent">
						<label for="check-conscent">En cochant cette case, j'accepte de partage les réponses de mon formulaire.</label>
					</div>

					<div class="submit-contact">
						<input type="submit" name="" value="Envoyer">
					</div>
				</form>
			</fieldset>
		</div>

		<!-- Integrate footer.php -->
		<?php include("include/footer.php"); ?>

		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>