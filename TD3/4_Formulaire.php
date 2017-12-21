<?php include 'utils.inc.php' ?>

<?php start_page('Environnement'); ?>

	<form action="data-processing.php" method="post">
		<p>id <input type="text" name="id"></p>
		male <input type="radio" name="sexe" value="male"> female <input type="radio" name="sexe" value="female"><br/>
		E-mail <input type="text" name="EMail"><br/>
		Mot de passe <input type="password" name="mdp"><br/>
		Vérification de mot de passe <input type="password" name="mdpVerif"><br/>
		Téléphone <input type="text" name="Tel"><br/>
		Pays <select name="pays">
		  <option value="France">France</option>
		  <option value="Espagne">Espagne</option>
		  <option value="Angleterre">Angleterre</option>
		  <option value="Allemagne">Allemagne</option>
		</select><br/>
		Conditions générales <input type="checkbox" name="conditions"><br/>
		<input type="submit" name="action" value="mailer">
	</form>
	<?php
	 if (!empty($mail = $_GET['mail'])){
	 	if ($mail == true){
	 		echo ('<p>Votre mail a bien été envoyé</p>');
	 	}
	 	else {
	 		echo ('<p>Votre mail est en cours d\'envoie</p>');
	 	}
	 }
	 else
	 	echo ('<p>Votre mail n\'as pas été envoiyé </p>');
	?>


<?php end_page(); ?>