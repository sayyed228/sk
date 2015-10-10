<?php
$listorder = $_GET['listorder'];
$AddTitle = $_GET['AddTitle'];
$Adddescription = $_GET['Adddescription'];



include_once 'dbconnect.php'; 




$sql = "INSERT INTO `sk_legal`.`what_we_do_list` (`id`, `Title`, `Description`, `listorder`) VALUES (NULL, '".$AddTitle."', '".$Adddescription."', '".$listorder."');";

mysql_query($sql) or die('Error updating database');






?>

