<?php include 'utils.inc.php' ?>

<?php start_page('Calculatrice'); ?>
<?php //récéption des $_POST
 $op1 = $_GET['op1'];
 $op2 = $_GET['op2'];
 $action = $_GET['action'];
 ?>
<?php //conditions + affichage
 switch($action)
 {
 	case '+' :
 		echo $op1 + $op2;
 		break;
 	case '-' :
 		echo $op1 - $op2;
 		break;
 	case '*' :
 		echo $op1 * $op2;
 		break;
 	case '/' :
 		echo $op1 / $op2;
 		break;
 }
 ?>
<?php end_page(); ?>