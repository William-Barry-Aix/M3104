<?php function start_page($title)
 {
 echo ' <!DOCTYPE html> <html lang="fr"><head>'. PHP_EOL .'<meta charset="utf-8" />' . PHP_EOL . '<title>' . $title . '</title></head><body>' . PHP_EOL;
 };?>
<?php function end_page()
 {
 echo '</body>' . PHP_EOL . '</html>';
 }; ?>