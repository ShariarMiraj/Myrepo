<?php
session_start();
include '../control/editEmployee.php';    
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


    
<div class="registration-form employee-form">
    <div class="login-page-container">
    
<h1>Edit Form</h1>
<h3>Search by Username</h3>

<br>
<br>

    <form action="" method="post" enctype="multipart/form-data">
        <table>
        <tr>
                <td>Username : </td>
                <td><input type="text" name="username" value="<?php echo $user;?>" placeholder="Enter Username" <?php echo $r;?>></td>
                
            </tr>
            <tr>
                <td>First Name : </td>
                <td><input type="text" name="fname" value="<?php echo $fname;?>" placeholder="Enter First Name" ></td>
                
            </tr>
            <tr>
                <td>Last Name : </td>
                <td><input type="text" name="lname" value="<?php echo $lname;?>" placeholder="Enter Last Name"></td>
                
            </tr>
            
            
            
            <tr>
                <td>Designation : </td>
                <td>
                    <input type="text" name="designation" value="<?php echo $designation;?>" placeholder="Enter Designation">
                   
                </td>
                
            </tr>
            <tr>
                <td>Salary : </td>
                <td><input type="text" name="salary" value="<?php echo $salary;?>" placeholder="Enter address "></td>
                
            </tr>
            <tr>
                <td colspan="2">
                <br>
<br>
                <input type="submit" name="search" id="search" value="Search">
                <input type="submit" name="update" class="update" value="Update">
                <input type="submit" name="delete" class="delete" value="Delete">
            </td>

                
                <td colspan="2"><?php echo $SaveError;?></td>
            </tr>
            
        </table>
    </form>
    </div>
</div>


    
</body>
</html>
<?php
	}else{
		echo "invalid request";
	}
?>