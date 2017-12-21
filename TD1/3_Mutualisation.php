
<?php start_page('caca'); ?>
   	<?php
	 $var1 = 6;
	 $var2 = 1.3;
	 $var3 = 'Variable 3';
	?>
    <?php
	 echo '<strong> Voici mon premier programme PHP </strong><br/>';
	 echo 'C\'est pas mal non ?<br/>';
	?>
	<?php echo $var1 . ' ' . $var2; ?>
	<?php echo  '= ' . ($var1 + $var2); ?>
<?php end_page(); ?>

<!-- Méthodes -->

<?php function start_page($title)
 {
 echo ' <!DOCTYPE html> <html lang="fr"><head>'. PHP_EOL .'<meta charset="utf-8" />' . PHP_EOL . '<title>' . $title . '</title></head><body>' . PHP_EOL;
 };?>
<?php function end_page()
 {
 echo '</body>' . PHP_EOL . '</html>';
 }; ?>
