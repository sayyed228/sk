<?php 
include("dbconnect.php");
$array	= $_POST['arrayorder'];

if ($_POST['update'] == "update"){
	
	$count = 1;
	foreach ($array as $idval) {
		$query = "UPDATE sk_partners SET listorder = " . $count . " WHERE id = " . $idval;
		mysql_query($query) or die('Error, insert query failed');
		$count ++;	
	}
	echo 'All saved! refresh the page to see the changes';
}
?>