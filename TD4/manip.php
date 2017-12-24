<?php include "utils.inc.php" ?>
<?php include "Library.php" ?>
<?php include "Book.php" ?>
<?php start_page('Library'); ?>
<?php
session_start();
if (isset($_GET['add'])) {
    echo <<<'EOD'
    <h1> Ajout d'un livre</h1>
    <form action="menu.php">
        Titre <input type="text" name="titleAdd"><br>
        Auteur <input type="text" name="author"><br>
        Editeur <input type="text" name="editor"><br>
        Nb Pages <input type="number" name="pageNb"><br>
        <input type="submit" value="Ajouter">
    </form>
EOD;
} else if (isset($_GET['sup'])){
    echo '<h1> Suppréssion d\'un livre</h1>'
    . '<form action="menu.php">'
        . '<SELECT name="titleSup" size="1">' . PHP_EOL;
    /* @var $lib Library */
    $lib = $_SESSION['libs'][0];
    foreach ($lib->getBooks() as $book){
        echo '<option value="' . $book->getTitle() . '">' . $book->getTitle() . '</option>';
    }
    echo '</SELECT><br>'
        . '<input type="submit" name="sup" value="Supprimer">'
    . '</form>';
}
?>

<?php end_page(); ?>
