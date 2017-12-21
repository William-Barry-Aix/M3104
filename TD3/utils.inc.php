<?php function start_page($title)
 {
 echo ' <!DOCTYPE html> <html lang="fr"><head>'. PHP_EOL .'<meta charset="utf-8" />' . PHP_EOL . '<title>' . $title . '</title></head><body>' . PHP_EOL;
 };?>
<?php function end_page()
 {
 echo '</body>' . PHP_EOL . '</html>';
 }; ?>
<?php function use_color()
{
    static $color;
    if($color == '#7CCA62')
    {
        $color = '#B0DFA0';
    }
    else
    {
        $color = '#7CCA62';
    }
    return ($color);
} ?>
