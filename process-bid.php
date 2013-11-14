<?php
	require('includes/db.php');
	
	$name = $_POST['name'];
	$value = $_POST['value'];
	$car_id = $_POST['car_id'];
	
	
	$success = TRUE;
	try{
		if(!isset($value) || empty($value) || !is_numeric($value) || $value <= 0){	
			throw new Exception('Invalid bid amount. Please try again!');
		}
		if(!isset($name) || empty($name)){
			throw new Exception('A name must be specified to place a bid!');
		}
		if(!isset($car_id) OR empty($car_id) OR !is_numeric($car_id) OR $value < 0){
			throw new Exception('A name must be specified to place a bid!');
		}
	}catch (Exception $e){
		$success = FALSE;
		echo "An error occured <br /><br />";
		echo $e->getMessage();
		
	}	
	if($success){
		$bid = $db->query("INSERT INTO bid (car_id, name, value, datetime) VALUES ('$car_id', '$name' ,'$value', NOW())");
		echo "Success! Your bid was added!";
		header("Location: success.php/?id=$car_id");
		
	}
	
	
?>
