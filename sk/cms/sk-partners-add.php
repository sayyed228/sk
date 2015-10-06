<?php
$listorder = $_GET['listorder'];
$Add = $_GET['Add'];
$Adddescription = $_GET['Adddescription'];



include_once 'dbconnect.php'; 




$sql = "INSERT INTO `sk_legal`.`sk_partners` (`id`, `Name`, `Description`, `listorder`) VALUES (NULL, '".$Add."', '".$Adddescription."', '".$listorder."');";

mysql_query($sql) or die('Error updating database');






?>

