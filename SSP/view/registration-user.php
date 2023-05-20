<?php
    include "../control/registration_check.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration User</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
</head>
<body>
<div class="registration-form">
    <div class="login-page-container">
    <a href="home.php"><img src="../images/logo.png" width="200px" alt=""></a>
<h1>Registration Form</h1>
   
    <form action="" method="post" enctype="multipart/form-data" onsubmit="return validateUserRegistration()" name="userForm">
        <table>
            <tr>
                <td>First Name : </td>
                <td><input type="text" name="fname" value="" placeholder="Enter First Name" id="fname" onkeyup="fnameCheck()"></td>
                <td id="fnameError"><?php echo $nameError;?></td>
            </tr>
            <tr>
                <td>Last Name : </td>
                <td><input type="text" name="lname" value="" placeholder="Enter Last Name" id="lname" onkeyup="lnameCheck()"></td>
                <td id="lnameError"><?php echo $nameError;?></td>
            </tr>
            <tr>
                <td>Username : </td>
                <td><input type="text" name="username" value="" placeholder="Enter Username" id="username" onkeyup="usernameCheck()"></td>
                <td id="usernameError"><?php echo $usernameError;?></td>
            </tr>
            <tr>
                <td>Age : </td>
                <td><input type="text" name="age" value="" placeholder="Enter Age" id="age" onkeyup="ageCheck()"></td>
                <td id="ageError"><?php echo $ageError;?></td>
            </tr>
            <tr>
                <td id>Gender : </td>
                <td>
                    
                    <input type="radio" name="gender" value="Male" onclick="radioCheck()" id="male">Male
                    <input type="radio" name="gender" value="Female" onclick="radioCheck()" id="female">Female
                    <input type="radio" name="gender" value="Others" onclick="radioCheck()" id="others">Others

                </td>
                <td id="genderError"><?php echo $genderError;?>Please Check Gender</td>
            </tr>
           
            <tr>
                <td>Email : </td>
                <td><input type="email" name="email" value="" placeholder="Enter Email" id="email" onkeyup="emailCheck()"></td>
                <td id="emailError"><?php echo $emailError;?></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" name="pass" value="" placeholder="Enter Password" id="pass" onkeyup="passCheck()"></td>
                <td id="passwordError"><?php echo $passwordError;?></td>
            </tr>
            <tr>
                <td>Confrim Password : </td>
                <td><input type="password" name="Cpass" value="" placeholder="Re-enter Password" id="Cpass" onkeyup="CpassCheck()"></td>
                <td id="CpasswordError"><?php echo $passwordError;?></td>
            </tr>
            
            <tr>
                <td>Upload a photo : </td>
                <td><input type="file" name="file" value="" placeholder="Photo" id="file" onchange="fileError(this.value);"></td>
                <td id="fileError"><?php echo $fileError;?></td>
            </tr>
            <tr>
                <td>Address : </td>
                <td><input type="text" name="address" value="" placeholder="Enter address " id="address" onkeyup="addressCheck()"></td>
                <td id="addressError"><?php echo $addressError;?></td>
            </tr>
            <tr>
                <td><input type="submit" class="login" onsubmit="return validateUserRegistration()" name="submit" value="Register"></td>
                <td><input type="reset" value="Reset"  class="reset-btn"></td>
                <td><?php echo $SaveError;?></td>
            </tr>
            
        </table>
    </form>
    </div>
</div>
</body>
</html>