<?php
session_start();
include '../control/show-employee.php';    
if(isset($_SESSION['status'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee List</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
</head>
<body>
    <div class="navbar">
    <a href="../view/home2.php"><img src="../images/logo.png" width="200px" alt=""></a>
    <a href="dashboard.php" class="reset-btn">Go to Dashboard</a>    
</div>

<div class="table-spacings">
    
<table border="1">
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Username</td>
            <td>Age</td>
            <td>Designation</td>
            <td>Gender</td>
            <td>Email</td>
            <td>Days</td>
            <td>Salary</td>
            
        </tr>
        
        <?php
            echo $list;    
        
        ?>

        
    </table>
</div>
    
</body>
</html>
<?php
	}else{
		echo "invalid request";
	}
?>