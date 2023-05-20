<?php
include('../model/db.php');
    
$user = "";
$fname = "";
$lname = "";
$designation = "";
$salary = "";
$r="";
$SaveError="";




if(isset($_REQUEST["search"])){
    $mydb= new db();
    $conobj= $mydb->openCon();
    $user = $_REQUEST["username"];
    $results=$mydb->showByUsername("employee",$user,$conobj);
        if($results->num_rows > 0)
            {
                
                while($myrow=$results->fetch_assoc())
                { 
                    $fname=$myrow["fname"];
                    $lname=$myrow["lname"];
                
                    $designation=$myrow["designation"];
             
                    $salary=$myrow["salary"];
                }
                
                $r="readonly";
            }
            else{
                $SaveError = '<img src="../images/cross.png" width= "15px">User not Found';
            }
            $mydb->CloseCon($conobj);
            
}
    
if(isset($_REQUEST["update"])){
    $user = $_REQUEST["username"];
    $fname =$_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $designation = $_REQUEST["designation"];
    $salary = $_REQUEST["salary"];
    $mydb= new db();
    $conobj= $mydb->openCon();
    $results=$mydb->updateEmployees("employee", $fname,$lname,$user,$designation,$salary,$conobj);
    if($results >0){
        $SaveError = '<img src="../images/tick.png" width = "15px"> Updated';
    }
    else{
        $SaveError = '<img src="../images/cross.png" width= "15px"> Problem while updating';
    }
    $mydb->CloseCon($conobj);
}

if(isset($_REQUEST["delete"])){
    $user = $_REQUEST["username"];
    $fname =$_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $designation = $_REQUEST["designation"];
    $salary = $_REQUEST["salary"];
    $mydb= new db();
    $conobj= $mydb->openCon();
    $results=$mydb->deleteEmployee("employee",$user,$conobj);
    if($results >0){
        $SaveError = '<img src="../images/tick.png" width = "15px"> Deleted';
    }
    else{
        $SaveError = '<img src="../images/cross.png" width= "15px"> Problem while updating';
    }
    $mydb->CloseCon($conobj);
}



?>