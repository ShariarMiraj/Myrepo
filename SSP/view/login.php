<?php 
	
    include '../control/login_check.php';
	if(isset($_SESSION['status'])){
        header("Location: dashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
</head>
<body>
<div class="login-page">
    <div class="login-page-container">
    <a href="../view/home.php"><img src="../images/logo.png" width="200px" alt=""></a>

    <h2>Login</h2>

<form name="myForm" action="" onsubmit="return logincheck()" method="post">
    <table>
        <tr>
            <td>Username : </td>
            <td><input type="text" id="uname" name="username" placeholder="Enter your username" onkeyup="logincheck()"></td>
            
        </tr>
        <tr>
        <td colspan="2" class="error" id="un-error"><?php echo $error; ?></td>
        </tr>
        <tr>
            <td>Password : </td>
            <td><input type="password" id="pass" name="password" placeholder="Enter your password" onkeyup="logincheck()"></td>
        </tr>
        <tr>
            <td colspan="2" class="error" id="pass-error"><?php echo $error; ?></td>
        </tr>
        <tr>
            <td><input name="submit" type="submit" value="LOGIN" class="login" id="login"></td>
            
            <td><a href="../view/registration-user.php">Don't have a account?</a></td>
        </tr>
    </table>
    </div>
</div>
    
    
    
</form>

<br>

</body>
</html>