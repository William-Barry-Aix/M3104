<?php include 'utils.inc.php' ?>
<?php include 'base.php' ?>

<?php //récéption des $_POST
$enregistre = false;

$login = $_POST['login'];
$mdp = $_POST['mdp']; ?>

<?php
$file= 'data.txt';
if(!($file = fopen($file, 'a')))
{
    echo 'Erreur d\'ouverture';
    exit();
}
?>

<?php
    $dbLink = dbConnect('mysql-phortfal.alwaysdata.net', 'phortfal', '1234', 'phortfal_tpweb');
    $query = 'SELECT * FROM user WHERE user.pseudo = \'' . $login . '\' AND user.mdp = \'' . $mdp . '\'';
    $dbResult = dbRequest($dbLink, $query);
    while($dbRow = mysqli_fetch_assoc($dbResult))
    {
        $enregistre = true;
    }

?>

<?php
    if($enregistre == false){
        header('Location: login.php?step=ERROR');
    }else{
        $dbLink = dbConnect('mysql-phortfal.alwaysdata.net', 'phortfal', '1234', 'phortfal_tpweb');
        $query = 'UPDATE user SET connections = connections+1 WHERE user.pseudo = \'' . $login  . '\'';
        dbRequest($dbLink, $query);
        fputs($file, 'login : ' . $login . ', mdp : ' . $mdp . PHP_EOL);
        fclose($file);
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['mdp'] = $mdp;

        start_page('Bienvenue');

        echo('Bienvenue ' . $login);

        end_page();
    }
?>


