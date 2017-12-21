<?php include 'utils.inc.php' ?>

<?php start_page('Environnement'); ?>


<?php
 // Correspond à l’adresse IP de celui qui visualise la page.
 echo getenv('REMOTE_ADDR') . '<br/>';
 // Correspond à l’adresse IP du serveur.
 echo getenv('HTTP_HOST') . '<br/>';
 // Correspond au logiciel serveur Web utilisé.
 echo getenv('SERVER_SOFTWARE') . '<br/>';
 echo phpinfo();
?>


<?php end_page(); ?>