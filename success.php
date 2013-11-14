<?php

require('includes/header.php');

// get the database connection
require('includes/db.php');
// get the car and bid classes
require('classes/car.class.php');
require('classes/bid.class.php');

?>

<!-- main content -->
<div id="content" class="row">

	<h3>Success! Your bid was added!</h3>
	<a href="../car.php/?id=<?=$_GET['id']?>">Return to the Car</a>
	
</div><!-- /main content -->


<?php require_once('includes/footer.php'); ?>