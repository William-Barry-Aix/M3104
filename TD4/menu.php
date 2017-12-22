<?php include "utils.inc.php" ?>
<?php include "Library.php" ?>
<?php include "Book.php" ?>
<?php start_page('Library'); ?>

<?php
    session_start();
    session_reset();
    $libs = $_SESSION['libs'];
    if (!isset($_SESSION['libs'])){
        $_SESSION['libs'] = array();
    }
    foreach ($libs as $lib){
        echo $lib . '<br>';
    }
?>
<?php
    $book = new Book("H-P", "bob", "nakama", 200);
    $lib = new Library("bernard", "ici", 6);
    $lib->addBook($book);
    $_SESSION['libs']["$lib->getName()"] = $lib;
?>

<?php end_page(); ?>
