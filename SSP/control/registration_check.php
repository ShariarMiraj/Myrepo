<?php
include('../model/db.php');
session_start();

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
$existingdata = file_get_contents('../data/user.JSON');
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
    // else{
    //     $user= $_REQUEST["username"];
    //     foreach($tempJSONdata as $data){
    //         if(@$data->username == $user){
    //             $usernameError="This user name already exists";
    //             $count +=1;
    //         }
    //         else{
    //             continue;
    //         }
    //     }
    // }
    if(empty($_REQUEST["age"]) && !is_numeric($_REQUEST["age"])){
        $ageError = "Must enter age and it should only be a number";
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
 
        
    if ($count==0){
        $formdata = array(
            'firstname'=> $_REQUEST["fname"],
            'lastname'=> $_REQUEST["lname"],
            'age'=>$_REQUEST["age"],
            'username'=>$_REQUEST["username"],
            'gender'=>$gender,
           
            'email' => $_REQUEST["email"],
            'password'=>$_REQUEST["pass"],
            'address'=>$_REQUEST["address"],
            'File'=> $fileLocation
        );
        
        $tempJSONdata[] =$formdata;
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
       
       //write json data into data.json file
       if(file_put_contents("../data/user.JSON", $jsondata)) {
            
        }
       else {
            $count+=1;
            $SaveError="Problem in Saving Data";
        }


            $fname= $_REQUEST["fname"];
            $lname= $_REQUEST["lname"];
            $age=$_REQUEST["age"];
            $username=$_REQUEST["username"];
            $gender=$gender;
           
            $email = $_REQUEST["email"];
            $password=$_REQUEST["pass"];
            $address=$_REQUEST["address"];
            $file= $fileLocation;

        $connection = new db();
        $conobj=$connection->OpenCon();
    
    $userQuery=$connection->insertUser($fname,$lname,$username,$age,$gender,$email,$password,$file,$address,"user",$conobj);
    
    if ($userQuery==true) {
     
      header("Location: ../view/login.php");
       }
     else {
    $error = "Username or Password is invalid";
    }
    $connection->CloseCon($conobj);
    }
    
// if($count==0){
//     header("Location:../view/login.php");
// }


    


        
  
}
    


	

?>
