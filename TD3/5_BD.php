<?php include 'utils.inc.php' ?>

<?php start_page('BD'); ?>

<?php include 'base.php' ?>

<?php
 $dbLink = dbConnect('mysql-phortfal.alwaysdata.net', 'phortfal', '1234', 'phortfal_tpweb');
 $query = 'SELECT * FROM user';
 $dbResult = dbRequest($dbLink, $query);
 dbDispUser($dbResult);
 ?>

<?php end_page(); ?>