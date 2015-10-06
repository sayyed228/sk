
<?php
$id = $_GET['id'];
//$sk_partners = $_GET['sk_partners'];

include_once 'dbconnect.php'; 


$sql = "DELETE FROM `sk_legal`.`what_we_do_list` WHERE `what_we_do_list`.`id` = '".$id."'";
//$sql = "DELETE FROM `sk_legal`.`sk_partners` WHERE `sk_partners`.`id` = '".$id."'";
mysql_query($sql) or die('Error updating database');



?>





