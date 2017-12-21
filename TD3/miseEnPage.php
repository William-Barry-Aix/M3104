<?php include 'utils.inc.php' ?>

<?php start_page('BD'); ?>

<?php include 'base.php' ?>

<?php
$dbLink = dbConnect('mysql-phortfal.alwaysdata.net', 'phortfal', '1234', 'phortfal_tpweb');
$query = 'SELECT * FROM user';
$dbResult = dbRequest($dbLink, $query);
?>

<table style="border: 1px solid black; border-collapse: collapse">
    <tr style="background-color:forestgreen">
        <th style="color: white; border: 1px solid black; border-collapse: collapse">Id</th>
        <th style="color: white; border: 1px solid black; border-collapse: collapse">E-Mail</th>
        <th style="color: white; border: 1px solid black; border-collapse: collapse">Pays</th>
        <th style="color: white; border: 1px solid black; border-collapse: collapse">Date</th>
        <th style="color: white; border: 1px solid black; border-collapse: collapse">Nb connexions</th>
    </tr>
    <?php
        while($dbRow = mysqli_fetch_assoc($dbResult))
        {
            echo('<tr style="background-color:'. use_color() .'">' . PHP_EOL .
                    '<td style="border: 1px solid black; border-collapse: collapse">' . $dbRow['id'] . '</td>' . PHP_EOL.
                    '<td style="border: 1px solid black; border-collapse: collapse">' . $dbRow['email'] . '</td>' . PHP_EOL.
                    '<td style="border: 1px solid black; border-collapse: collapse">' . $dbRow['pays'] . '</td>' . PHP_EOL.
                    '<td style="border: 1px solid black; border-collapse: collapse">' . date('d.m.Y', strtotime($dbRow['date'])) . '<br/>' . '</td>' . PHP_EOL.
                    '<td style="border: 1px solid black; border-collapse: collapse">' . '<img src="rg.jpg" height="5" width="' . 100*$dbRow['connections'] . '">' . '</td>' . PHP_EOL.
                '</tr>');
        }
    ?>
</table>
<br>
<?php
    $query = 'SELECT date, COUNT(*) as nb FROM user GROUP BY date';
    $dbResult = dbRequest($dbLink, $query);
?>
<table style="border: 1px solid black; border-collapse: collapse">
    <tr style="background-color:<?php echo ( use_color())?>">
        <th style="border: 1px solid black; border-collapse: collapse">Nombre d'inscriptions </th>
        <?php

            while($dbRow = mysqli_fetch_assoc($dbResult)) {
                echo('<td style="border: 1px solid black; border-collapse: collapse">' . '<img src="rg.jpg" height="' . 25*$dbRow['nb'] . '" width="30" style="margin auto">' . '</td>' . PHP_EOL);
            }
        ?>
    </tr>
    <tr style="background-color:<?php echo use_color()?>">
        <th style="border: 1px solid black; border-collapse: collapse">Date</th>
        <?php
        $dbResult->data_seek(0);
        while($dbRow = mysqli_fetch_assoc($dbResult)) {
            echo('<td style="border: 1px solid black; border-collapse: collapse">' . $dbRow['date'] . '</td>' . PHP_EOL);
        }
        ?>
    </tr>
    <?php

    ?>
</table>
    <img src="image.php"/><br/>



<?php end_page(); ?>