<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php
$id = $_GET['id'];
//$sk_partners = $_GET['sk_partners'];

include_once 'dbconnect.php'; 


$sql = "DELETE FROM `sk_legal`.`sk_partners` WHERE `sk_partners`.`id` = '".$id."'";
//$sql = "DELETE FROM `sk_legal`.`sk_partners` WHERE `sk_partners`.`id` = '".$id."'";
mysql_query($sql) or die('Error updating database');



//echo($fname.'&nbsp;');
//echo($lname.'&nbsp;');


?>







</body>
</html>
