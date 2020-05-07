<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-11-30
 * Time: 10:10
 */

// PHASE 06-SEARCH
?>

<!-- Begin h2 -->
<h2 class="h2" style="margin-bottom: 25px;">Contactez nous</h2>

	<!-- Begin /.form-area -->
	<div class="form-area">

		<!-- Begin /.form -->
		<form action="<?= BASE_URL ?>mail/send" method="post" role="form">

			<div class="form-group">
				<label for="lastName">Nom</label>
				<input type="text" class="form-control" id="lastName" name="last_name" placeholder="Écrivez‑ici">
			</div>

			<div class="form-group">
				<label for="firstName">Prénom</label>
				<input type="text" class="form-control" id="firstName" name="first_name" placeholder="Écrivez‑ici">
			</div>

			<div class="form-group">
				<label for="subject">E‑mail</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="Écrivez‑ici">
			</div>

			<!--
			<div class="form-group">
				<label for="subject">Numéro mobile</label>
				<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Écrivez‑ici" required>
			</div>
			-->

			<!-- PHASE 10-MAIL -->
			<!-- 2018-12-20 - 11H40 -->
			<div class="form-group">
				<label for="recipient">Votre destinataire</label>
				<select class="custom-select" id="recipient" name="recipient">
					<?php foreach($levels as $key => $value) : ?>
					<option value="<?=$value['level_mail'] ?>"><?= $value['level_name'] ?></option>
					<?php endforeach; ?>
				</select>
			</div>

			<div class="form-group">
				<label for="subject">Votre sujet</label>
				<input type="text" class="form-control" id="subject" name="subject" placeholder="Écrivez‑ici">
			</div>

			<div class="form-group">
				<label for="message">Votre message</label>
				<textarea class="form-control" type="textarea" id="message" name="message" placeholder="Écrivez votre message ici" maxlength="140" rows="7"></textarea>
				<span class="help-block"><p id="characterLeft" class="help-block ">Vous avez at‑teint la limite</p></span>
			</div>

			<button type="submit" id="submit" name="submit" class="btn btn-primary">Envoyer</button>

		</form>
		<!-- End /.form -->

	</div>
	<!-- End /.form-area -->

</div>
