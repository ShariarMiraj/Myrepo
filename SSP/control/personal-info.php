<?php

session_start();


$u_name=$_SESSION['username'];
$fname="";
$lname="";
$email="";
$image="";
$age="";
$user="";
$existingdata = file_get_contents('../data/admin.JSON');
$tempJSONdata = json_decode($existingdata);
$data="";
foreach($tempJSONdata as $data){
    
    if(@$data->username == $u_name){
         
        $username= $data->username;
        $age= $data->age;
        $email=$data->email;
        $image=$data->File;
    }
}

?>