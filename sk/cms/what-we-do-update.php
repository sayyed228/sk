

<?php
$id = $_GET['id'];
$Title = $_GET['Title'];
$description = $_GET['description'];

include_once 'dbconnect.php'; 



$sql = "UPDATE `sk_legal`.`what_we_do_list` SET `Title` = '".$Title."', `Description` = '".$description."' WHERE `what_we_do_list`.`id` = '".$id."'";

//$sql = "UPDATE `sk_legal`.`sk_partners` SET `Name` = '".$Name."' WHERE `sk_partners`.`id` = '".$id."'";
mysql_query($sql) or die('Error updating database');





?>


