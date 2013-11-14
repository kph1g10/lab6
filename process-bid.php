<?php
	require('includes/db.php');
	
	$bid = $db->query("INSERT INTO bid (car_id, name, value, datetime) VALUES ('{$_POST['car_id']}', '{$_POST['name']}' ,'{$_POST['value']}', NOW())");
?>