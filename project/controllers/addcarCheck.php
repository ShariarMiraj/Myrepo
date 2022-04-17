<?php 
	session_start();
	require('../models/smodel.php');
	
	if(isset($_REQUEST['submit']))
	{
		
		$name = $_REQUEST['name'];
		$price = $_REQUEST['price'];
		

		if ($_FILES['pic']['size'] == 0) 
		{
			echo "Profile picture is not selected.". "<br>";
		}else
		{
			$src = $_FILES['pic']['tmp_name'];
			$des = "../assets/".$_FILES['pic']['name'];
			move_uploaded_file($src, $des);
		}


		
		
			$status = addCar($name,$price,$_FILES['pic']['name']);
			if($status)
			{
				header('location: ../views/new_car.php');
			}
			else 
			{
				echo "Error reg";	
			}
			

		}
    
	?>