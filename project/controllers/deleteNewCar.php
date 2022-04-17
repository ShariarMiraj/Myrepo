<?php 
	session_start();
	require('../models/smodel.php');
	

		
		
		$id = $_REQUEST['id'];
		
		
			
			deleteCar($id);
			header('location: ../views/new_car.php');
            

	
?>