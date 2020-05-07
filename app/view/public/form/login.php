<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-12-06
 * Time: 10:18
 */

// PHASE 07-LOGIN
?>

<h2 class="h2">Identifiez‑vous :</h2>

<form action="<?=BASE_URL?>login/loginAuth" method="post">

	<div class="form-group">

		<label for="login" class="bmd-label-static"><b>Votre pseudo‑onyme</b></label>

		<input type="text" class="form-control" id="login" name="login" aria-describedby="login" placeholder="Gazmen ou Quentin…">

	</div>

	<div class="form-group">

		<label for="password" class="bmd-label-static"><b>Mot de passe</b></label>

		<input type="password" class="form-control" id="password" name="password" placeholder="Gazmen ou Quentin">

	</div>

	<button type="submit" class="btn btn-secondary btn-outline-primary">Envoyez</button>

</form>

</div>