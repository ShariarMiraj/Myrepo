<?php
include('../model/db.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is empty";
}
else
{

$_SESSION["username"] = $_POST['username'];
$_SESSION["password"] = $_POST['password'];
$user = $_REQUEST["username"];
$pass = $_REQUEST["password"];
$existingdata = file_get_contents('../data/admin.JSON');
$tempJSONdata = json_decode($existingdata);
    foreach($tempJSONdata as $data ){
        if($data->username == $user && $data->password==$pass){
            //$_SESSION['status'] = true;
            //header("Location: ../view/dashboard.php");
            
            break;
        }
        else{
            $error = "Wrong Username or password";
        }
    }
    $connection = new db();
    $conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"admin",$user,$pass);

if ($userQuery->num_rows > 0) {
 
  $_SESSION['username']=$_POST['username'];
  $_SESSION['password']=$_POST['password'];
  $_SESSION['status'] = true;
  header("Location: ../view/dashboard.php");
   }
 else {
$error = "Username or Password is invalid";
}
$connection->CloseCon($conobj);


    
   }
   

 
}



?>