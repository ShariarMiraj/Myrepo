<?php 
	
    include '../control/personal-info.php';
   
	if(isset($_SESSION['status'])){
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Personal information</title>
</head>
<body>
<table border="1">
        <tr>
            <td><a href="../view/home2.php"><img src="../images/logo.png" width="200px" alt=""></a></td>
            <td>
                <h2>Welcome to the Dashboard</h2>
            </td>
        </tr>
        <tr>
            <td><a href="../view/personal-info.php">Personal information</a></td>
            <td rowspan="6">
                <table>
                    <tr>
                        <td colspan="2" >
                            <img src="<?php echo $image;?>" width="100px" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>Name : </td>
                        <td><?php echo $username;?></td>
                    </tr>
                    <tr>
                        <td>Email : </td>
                        <td><?php echo $email;?></td>
                    </tr>
                    <tr>
                        <td>Age : </td>
                        <td><?php echo $age;?></td>
                    </tr>
                    
                </table>
            </td>
        </tr>
        <tr>
            <td><a href="../view/employee.php">Employee information</a></td>
        </tr>
        <tr>
            <td><a href="../view/client-info.php">Client information</a></td>
        </tr>
        <tr>
            <td><a href="../view/service-info.php">Service information</a></td>
        </tr>
        <tr>
            <td><a href="../view/service.php">Service Provider information</a></td>
        </tr>
        <tr>
            <td><a href="../control/logout.php">Log Out</a></td>
        </tr>


    </table>
    
</body>
</html>






<?php
	}else{
		echo "invalid request";
	}
?>