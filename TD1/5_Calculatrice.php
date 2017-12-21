<?php include 'utils.inc.php' ?>

<?php start_page('Calculatrice'); ?>
	<h1>Machine à calculer</h1>
	<?php $operateurs = '*+-/'; ?>
	<form action="calcul.php" method="get">
   	 	<input type="text" name="op1" /> <input type="text" name="op2" /><br/>
   	 	<?php
		 for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
		 {
			echo '<input type="submit" name="action" value="' . $operateurs[$cpt] . '"/> <br/>' . "\n";
		 }
		?>
	</form>
<?php end_page(); ?>