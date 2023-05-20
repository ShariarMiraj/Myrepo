<?php
session_start();
include '../control/feedback-show.php';    
if(isset($_SESSION['status'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="../view/home2.php"><img src="../images/logo.png" width="200px" alt=""></a>
        <p>Name | Phone | Feedback </p>
        
        <p>
        <?php
            echo $feedback;    
        
        ?>
</p>
        <br>
    
    <a href="dashboard.php">Go to Dashboard</a>
</body>
</html>
<?php
	}else{
		echo "invalid request";
	}
?>