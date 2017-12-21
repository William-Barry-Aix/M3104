<?php
    header("Content-type: image/jpeg");
    // Crée une image de 200 pixels de large par 300 de haut.
    $image = imagecreate(200, 300);
    // Crée une couleur bleu utilisable dans l'image.
    $bgcolor = imagecolorallocate($image, 0x00, 0x00, 0xFF);
    // Utilise la couleur bleu crée comme couleur de fond.
    imagefill($image, 0, 0, $bgcolor);
    // Crée le fichier jpeg à envoyer à partir de l'image crée.
    imagejpeg($image);
?>