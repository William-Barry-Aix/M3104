<?php include 'utils.inc.php' ?>

<?php start_page('BD'); ?>

<form action="test-pass.php" method="post">
    <p>Login<input type="text" name="login"></p>
    <p>Mot de passe<input type="password" name="mdp"></p>
    <input type="submit" value="ok">
</form>
<?php
    $step = $_GET['step'];
    if ($step == 'ERROR'){
        echo ('mauvais identifants');
    }
?>



<?php end_page(); ?>
