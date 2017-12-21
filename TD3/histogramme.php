<?php
    header("Content-type: image/jpeg");
    $width = 400;
    $height = 200;
    $image = imagecreate($width, $height);
    $scale = 2;
    $font = 2;
    $nb = 6;
    $data = array('22', '85', '45', '36', '32', '55');
    $titles = array('un', 'deux', 'trois', 'quatre', 'cinq', 'six');
    $green = imagecolorallocate($image, 0, 255, 0);

    $bgcolor = imagecolorallocate($image, 0x00, 0x00, 0xFF);
    imagefill($image, 0, 0, $bgcolor);
    $white = imagecolorallocate($image, 255, 255, 255);
    for ($i = 0; $i <= $height; $i +=20 ){
        imageline($image, 0, $i-1, 400, $i-1, $white);
        imagestring($image, 1, 0, $i, 100-$i/2, $white);
    }

    imageline($image, 25, 0, 25, 200, $white);

    $labelwidth = imagefontwidth($font) * 3 + 1;
    $recwidth = (($width - $labelwidth) / $nb) - 10;


    for($i = 0 ; $i < $nb ; ++$i) {
        $leftx = $labelwidth + (($i + 1) * 10) + ($i * $recwidth);
        $rightx = $leftx + $recwidth;
        $boty = $height - 1;
        $topy = $boty - ($data[$i] * $scale);
        imagefilledrectangle($image, $leftx, $topy, $rightx, $boty, $green);
        $labelx = $leftx + (($recwidth) / 2) - (imagefontheight($font) / 2);
        $labely = $boty - 10; // Pour ne pas écrire immédiatement en bas.
        imagestringup($image, $font, $labelx, $labely, $titles[$i] . ':' . $data[$i],  $bgcolor);
    }


    imagejpeg($image);
?>