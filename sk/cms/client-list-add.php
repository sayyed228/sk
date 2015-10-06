<?php
$listorder = $_GET['listorder'];
$Add = $_GET['Add'];

$insert_data = mysql_real_escape_string($Add);

include_once 'dbconnect.php'; 

$sql = "INSERT INTO `sk_legal`.`banks_and_financial_institutions` (`id`, `Name`, `listorder`) VALUES (NULL, '".$insert_data."', '".$listorder."');";

mysql_query($sql) or die('Error updating database');




?>

