<?php 
    session_start();

	if(isset($_SESSION['status'])){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
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
            <td>
                
            <a href="../view/personal-info.php">Personal information</a>
            
        
        </td>
            <td rowspan="6" id="content"></td>
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
            <td><a href="../view/feedback-show.php">See Feedbacks</a></td>
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