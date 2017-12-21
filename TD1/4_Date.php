<?php include 'utils.inc.php';?>

<?php start_page('caca');?>
	<?php //variables
	 $var1 = 6;
	 $var2 = 1.3;
	 $var3 = 'Variable 3';?>
    <?php //affichange intro
	 echo '<strong> Voici mon premier programme PHP </strong><br/>';
	 echo 'C\'est pas mal non ?<br/>';?>
	<?php //affichage addition
	 echo $var1 . ' ' . $var2;
	 echo  '= ' . ($var1 + $var2) . '<br/>'; ?>
	<?php
	 $jour = date('l F d, Y');
	 echo $jour.'<br/>';
	 $jour = date('d/m/Y', strtotime('2020-04-01'));
 	 echo $jour.'<br/>';
 	 $jour = date("F j, Y, g:i a"); 
 	 echo $jour.'<br/>';
	?>
<?php end_page(); ?>


