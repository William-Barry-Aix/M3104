<?php include "utils.inc.php" ?>
<?php include "Library.php" ?>
<?php include "Book.php" ?>
<?php start_page('Library'); ?>
<?php
    /* @var $_SESSION['libs'] Library[]*/
    session_start();
    //session_destroy();
    //$_SESSION = array();
    $lib = new Library("Bernard", "ici", 6);
    if (!isset($_SESSION['libs'])){
        $_SESSION['libs'][0] = $lib;
    }
    if (isset($_GET['titleAdd'])){
        if ($_GET['titleAdd'] != '') {
            $book = new Book($_GET['titleAdd'], $_GET['author'], $_GET['editor'], $_GET['pageNb']);
            $_SESSION['libs'][0]->addBook($book);
        }
    }
    if (isset($_GET['sup'])){
        if (isset($_GET['titleSup'])){
            $book = $_SESSION['libs'][0]->getBooks()[$_GET['titleSup']];
            $_SESSION['libs'][0]->remBook($book);

        }
    }

?>

<h1>Bibliothèque <?php echo(array_values($_SESSION['libs'])[0]->getName())?></h1>
<h2>Livres</h2>
<?php echo($_SESSION['libs'][0]) ?>

<form method="get" action="manip.php">
    <br>
    <input type="submit" name="add" value="Ajouter">
    <input type="submit" name="sup" value="Supprimer">
</form>


<?php end_page(); ?>
