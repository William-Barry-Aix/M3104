
<?php include 'base.php' ?>

<?php //récéption des $_POST
 $id = $_POST['id'];
 $sexe = $_POST['sexe'];
 $EMail = $_POST['EMail'];
 $mdp = $_POST['mdp'];
 $mdpVerif = $_POST['mdpVerif'];
 $Tel = $_POST['Tel'];
 $pays = $_POST['pays'];
 $conditions = $_POST['conditions'];
 $action = $_POST['action']; ?>

<?php
 if($action == 'mailer')
 {
	$message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
	$message .= 'Email : ' . $EMail . PHP_EOL;
	$message .= 'Mot de passe : ' . PHP_EOL . $mdp;
	if (mail($EMail, $subject, $message))
		$mail = true;
	else
		$mail = false;
 }
 else
 {
 	$mail = false;
 }
?>

<?php
$dbLink = dbConnect('mysql-phortfal.alwaysdata.net', 'phortfal', '1234', 'phortfal_tpweb');
$today = date('Y-m-d');
$query = 'INSERT INTO user (pseudo, date, email) VALUES (\''. $id .'\', \'' . $today . '\', \'' . $EMail . '\')';
if(!($dbResult = dbRequest($dbLink, $query)))
{
    echo 'Erreur dans requête<br />';
    // Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
    // Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}else{

    echo('Bonjour, '. $id . PHP_EOL
    . 'Votre inscription a bien été enregistrée, merci.');
}

?>
<?php // /*Redirection*/ header('Location: 4_Formulaire.php?mail='. $mail); ?>