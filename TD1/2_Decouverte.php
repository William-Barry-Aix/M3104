<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>
    <?php
	 $var1 = 6;
	 $var2 = 1.3;
	 $var3 = 'Variable 3';
	?>
    <body>
    <?php
	 echo '<strong> Voici mon premier programme PHP </strong><br/>' . "\n";
	 echo 'C\'est pas mal non ? <br/>';
	?>
	<?php echo $var1 . ' ' . $var2; ?>
	<?php echo  '= ' . ($var1 + $var2); ?>
    </body>
</html>