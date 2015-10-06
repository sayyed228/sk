<?php
//$id = $_GET['id'];
$Add = $_GET['Add'];

 include_once 'dbconnect.php'; 


$sql = "INSERT INTO `sk_legal`.`banks_and_financial_institutions` (`id`, `Name`) VALUES (NULL, '".$Add."');";
mysql_query($sql) or die('Error updating database');



//echo($fname.'&nbsp;');
//echo($lname.'&nbsp;');


?>

