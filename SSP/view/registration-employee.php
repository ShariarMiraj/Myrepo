<?php
    
    include "../control/employee-registration.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Registration Employee</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
</head>
<body>
<div class="registration-form employee-form">
    <div class="login-page-container">
    <a href="dashboard.php"><img src="../images/logo.png" width="200px" alt=""></a>
<h1>Registration Form</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <table width = "800px">
            <tr>
                <td>First Name : </td>
                <td><input type="text" name="fname" value="" placeholder="Enter First Name" ></td>
                <td><?php echo $nameError;?></td>
            </tr>
            <tr>
                <td>Last Name : </td>
                <td><input type="text" name="lname" value="" placeholder="Enter Last Name"></td>
                <td><?php echo $nameError;?></td>
            </tr>
            <tr>
                <td>Username : </td>
                <td><input type="text" name="username" value="" placeholder="Enter Username"></td>
                <td><?php echo $usernameError;?></td>
            </tr>
            <tr>
                <td>Age : </td>
                <td><input type="number" name="age" value=""></td>
                <td><?php echo $ageError;?></td>
            </tr>
            <tr>
                <td>Gender : </td>
                <td>
                    
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="Others">Others

                </td>
                <td><?php echo $genderError;?></td>
            </tr>
           
            <tr>
                <td>Email : </td>
                <td><input type="email" name="email" value="" placeholder="Enter Email"></td>
                <td><?php echo $emailError;?></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" name="pass" value="" placeholder="Enter Password"></td>
                <td><?php echo $passwordError;?></td>
            </tr>
            <tr>
                <td>Confrim Password : </td>
                <td><input type="password" name="Cpass" value="" placeholder="Re-enter Password"></td>
                <td><?php echo $passwordError;?></td>
            </tr>
            <tr>
                <td>Designation : </td>
                <td>
                    <input type="radio" name="designation" value="Accountant">Accountant
                    <input type="radio" name="designation" value="Manager">Manager
                    <input type="radio" name="designation" value="Executive">Executive
            
                </td>
                <td><?php echo $designationError;?></td>
            </tr>
            <tr>
                <td>Working Days : </td>
                <td>
                    <input type="checkbox" name="days[]" value="Sunday">Sunday
                    <input type="checkbox" name="days[]" value="Monday">Monday
                    <input type="checkbox" name="days[]" value="Tuesday">Tuesday
                    <input type="checkbox" name="days[]" value="Wednesday">Wednesday
                    <input type="checkbox" name="days[]" value="Thursday">Thrusday
                    <input type="checkbox" name="days[]" value="Friday">Friday
                    <input type="checkbox" name="days[]" value="Saturday">Saturday
                </td>
                <td><?php echo $daysError;?></td>
            </tr>
            <tr>
                <td>Enter Salary : </td>
                <td><input type="number" name="salary" value="" placeholder="Enter Salary"></td>
                <td><?php echo $salaryError;?></td>
            </tr>
            <tr>
                <td>Upload a photo : </td>
                <td><input type="file" name="file" value="" placeholder="Photo"></td>
                <td><?php echo $fileError;?></td>
            </tr>
            <tr>
                <td>Address : </td>
                <td><input type="text" name="address" value="" placeholder="Enter address "></td>
                <td><?php echo $addressError;?></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" class="update" value="submit"></td>
                <td><input type="reset" value="Reset" class="update"></td>
                <td><?php echo $SaveError;?></td>
            </tr>
            
        </table>
    </form>
    </div>
</div>
</body>
</html>