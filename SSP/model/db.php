<?php
class db
{
    function openCon()
    {
$servername="localhost";
$username="root";
$password="";
$dbname="ssp";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    echo "error connecting db";
}
return $conn;
    }
function insertEmployee($fname,$lname,$username,$age,$gender,$email,$password,$designation,$days,$file,$address,$salary,$table,$conn)
{
$sqlstr="INSERT into $table (fname,lname,username,age,gender,email,password,designation,days,file,address,salary) 
VALUES ('$fname','$lname','$username',$age,'$gender','$email','$password','$designation','$days','$file','$address','$salary')";
if($conn->query($sqlstr))
{
    echo "data inserted";
}
else
{
echo "failed".$conn->error;
} 
}
function insertUser($fname,$lname,$uname,$age,$gender,$email,$password,$file,$address,$table,$conn)
{
$sqlstr="INSERT into $table (fname,lname,uname,age,gender,email,password,file,address) 
VALUES ('$fname','$lname','$uname',$age,'$gender','$email','$password','$file','$address')";
$result = $conn->query($sqlstr); 
return $result;
}
function CheckUser($conn,$table,$username,$password)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
return $result;
}


function showAll( $tablename,$conn)
    {
        $sqlstr="SELECT * FROM $tablename";
        return $conn->query($sqlstr);
    }

function showByUsername($tablename,$user,$conn)
    {
        $sqlstr="SELECT * FROM $tablename WHERE username='$user'";
        return $conn->query($sqlstr);
    }

function updateEmployees($tablename, $fname,$lname,$user,$designation,$salary,$conn){
    $sqlstr="UPDATE $tablename SET fname='$fname',lname='$lname',designation='$designation',salary='$salary' WHERE username='$user'";
    return $conn->query($sqlstr);
}

function deleteEmployee( $tablename,$user,$conn)
    {
        $sqlstr="DELETE FROM $tablename WHERE $tablename.username='$user'";
        return $conn->query($sqlstr);
    }

function CloseCon($conn)
 {
 $conn -> close();
 }



}
?>