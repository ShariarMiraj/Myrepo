<?php

session_start();
include('../model/db.php');

$nameError="";
$usernameError="";
$ageError="";
$gender="";
$genderError = "";
$emailError="";
$passwordError="";
$fileLocation="";
$fileError="";
$addressError="";
$SaveError="";
$designationError="";
$daysError="";
$salaryError ="";
$existingdata = file_get_contents('../data/employee.JSON');
$tempJSONdata = json_decode($existingdata);
$count=0;

if(isset($_REQUEST["submit"])){
    if(empty($_REQUEST["fname"]) || empty($_REQUEST["lname"])){
        $nameError="Must enter first and last name";
        $count +=1;
    }
    if(is_numeric($_REQUEST["fname"]) || is_numeric($_REQUEST["lname"])){
        $nameError="Name must be characters";
        $count +=1;
    }
    if(empty($_REQUEST["username"])){
        $usernameError="Must enter username";
        $count +=1;
    }
    else{
        $user= $_REQUEST["username"];
        foreach($tempJSONdata as $data){
            if(@$data->username == $user){
                $usernameError="This user name already exists";
                $count +=1;
            }
            else{
                continue;
            }
        }
    }
    if(empty($_REQUEST["age"]) && !is_numeric($_REQUEST["age"])){
        $ageError="Must enter age and it should only be a number";
        $count +=1;
    }
    if(isset($_REQUEST["gender"])){
        $gender=$_REQUEST["gender"];
    }
    else{
        $genderError="Please Select a gender";
        $count +=1;
    }
    if(empty($_REQUEST["email"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST["email"]))
    {
        $emailError="Must enter email";
        $count +=1;
    }
    if(empty($_REQUEST["pass"]) || strlen($_REQUEST["pass"])< 8){
        $passwordError="Please Enter Password and must be minimum 8 Characters";
        $count +=1;
    }
    if(empty($_REQUEST["Cpass"]) || strlen($_REQUEST["Cpass"])< 8 || $_REQUEST["Cpass"] != $_REQUEST["pass"]){
        $passwordError="Passwords Dont match";
        $count +=1;
    }
    $designation = "null";
    if(isset($_REQUEST["designation"])){
        $designation = $_REQUEST["designation"];
    }
    else{
         $designationError="Designation is not selected ";
         $count +=1;
    }
    $checked="";
    if(isset($_REQUEST["days"])){
            foreach($_REQUEST['days'] as $selected){
            $checked =  $selected.",".$checked;
            }
    }
    else{
        $daysError= "Please Select checkbox";
    }
	if($_FILES['file']['type'] == "image/png" || $_FILES['file']['type'] == "image/jpg"){
        if (move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/".$_FILES["file"]["name"])) {
            $fileLocation= "../uploads/".$_FILES["file"]["name"];
         } 
         else {
             $fileError= "Sorry, there was an error uploading your file.";
             $count +=1;
         }
    }
    else{
        $fileError= "invalid file type";
        $count+=1;
    }

    if(empty($_REQUEST["address"])){
        $addressError="Must enter address";
        $count +=1;
    }  
   
 
     $fileLocation= "../uploads/".$_FILES["file"]["name"];
    
    if(empty($_REQUEST["salary"])){
        $salaryError = "Must enter Salary";
        $count +=1;
    }
        
    // if ($count==0){
    //     $formdata = array(
    //         'firstname'=> $_REQUEST["fname"],
    //         'lastname'=> $_REQUEST["lname"],
    //         'age'=>$_REQUEST["age"],
    //         'username'=>$_REQUEST["username"],
    //         'gender'=>$gender,
           
    //         'email' => $_REQUEST["email"],
    //         'password'=>$_REQUEST["pass"],
    //         'address'=>$_REQUEST["address"],
    //         'designation'=>$designation,
    //         'days'=>$checked,
    //         'File'=> $fileLocation
    //     );
        
    //     $tempJSONdata[] =$formdata;
    //     $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
       
    //    //write json data into data.json file
    //    if(file_put_contents("../data/employee.JSON", $jsondata)) {
            
    //     }
    //    else {
    //         $count+=1;
    //         $SaveError="Problem in Saving Data";
    //     }
    // }
    

if($count==0){
    
    $fname= $_REQUEST["fname"];
    $lname= $_REQUEST["lname"];
    $username = $_REQUEST["username"];
    $age=$_REQUEST["age"];
    $username=$_REQUEST["username"];
    $gender=$gender;
   $days = $checked;
    $email = $_REQUEST["email"];
    $password=$_REQUEST["pass"];
    $address=$_REQUEST["address"];
    $file= $fileLocation;
    $salary = $_REQUEST["salary"];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->insertEmployee($fname,$lname,$username,$age,$gender,$email,$password,$designation,$days,$file,$address,$salary,"employee",$conobj);

if ($userQuery==true) {

header("Location: ../view/employee_list.php");
}
else {
$error = "Username or Password is invalid";
}
$connection->CloseCon($conobj);
    header("Location:../view/login.php");
}
    
 
        
  
}
    



	

?>
