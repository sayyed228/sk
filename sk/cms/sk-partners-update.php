

<?php
$id = $_GET['id'];
$Name = $_GET['Name'];
$description = $_GET['description'];

include_once 'dbconnect.php'; 



$sql = "UPDATE `sk_legal`.`sk_partners` SET `Name` = '".$Name."', `Description` = '".$description."' WHERE `sk_partners`.`id` = '".$id."';";
mysql_query($sql) or die('Error updating database');





?>





