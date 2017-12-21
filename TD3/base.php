<?php 
function dbConnect($dbHost, $dbLogin, $dbPass, $dbBd){
	$dbLink = mysqli_connect($dbHost, $dbLogin, $dbPass)
 	or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

 	mysqli_select_db($dbLink , $dbBd)
 	or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
 	return $dbLink;
}
?>


<?php
function dbRequest($dbLink, $query){
	if(!($dbResult = mysqli_query($dbLink, $query)))
	{
		echo 'Erreur de requête<br/>';
		// Affiche le type d'erreur.
		echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
		// Affiche la requête envoyée.
		echo 'Requête : ' . $query . '<br/>';
		exit();
	}
	return $dbResult;
}
?>

<?php
function dbDispUser($dbResult){
	while($dbRow = mysqli_fetch_assoc($dbResult))
	{
		echo $dbRow['id'] . '<br/>';
		echo $dbRow['email'] . '<br/>';
		echo date('d.m.Y', strtotime($dbRow['date'])) . '<br/>';
		echo '<br/><br/>';
	}
}
?>