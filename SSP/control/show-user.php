<?php
include('../model/db.php');

$existingdata = file_get_contents('../data/employee.JSON');
$tempJSONdata = json_decode($existingdata);
$list="";
$user="";
        $name= "";
        $email= "";
        $age= "";
        $gender= "";
        $list="";

    // foreach($tempJSONdata as $data ){
    //     $user=@$data->username;
    //     $name= @$data->firstname. " ". @$data->lastname;
    //     $email= @$data->email;
    //     $age= @$data->age;
    //     $gender= @$data->gender;
    //     $designation = @$data->designation;
    //     $days= @$data->days;
        

    //     $list= "<tr>
    //             <td>".$myrow["fname"]."</td>
    //             <td>".$myrow["lname"]."</td>
    //             <td>".$myrow["age"]."</td>
    //             <td>".$myrow["email"]."</td>
    //             <td>".$myrow["designation"]."</td>
    //             <td>".$myrow["gender"]."</td>
    //             <td>".$myrow["address"]."</td>
   //              <td>".<img src="$myrow["file"]" width="15px">."</td>    
    //             </tr>" . $list;
    // }
   
    $mydb= new db();
    $conobj= $mydb->openCon();
    $results=$mydb->showAll("user",$conobj);
        if($results->num_rows > 0)
            {
                
                while($myrow=$results->fetch_assoc())
                { 
                    $list= "
                    
                    <tr>
                    <td>".$myrow["fname"]."</td>
                    
                    <td>".$myrow["lname"]."</td>
                    
                    <td>".$myrow["uname"]."</td>

                    <td>".$myrow["age"]."</td>
                    
                    
                    
                    <td>".$myrow["gender"]."</td>
                    
                    <td>".$myrow["email"]."</td>
                   
                    
                    </tr>
                    ".$list;
                }
                
                
            }

    //     $connection = new db();
    //     $conobj=$connection->OpenCon();
    
    // $userQuery=$connection->insertUser($fname,$lname,$username,$age,$gender,$email,$password,$file,$address,"user",$conobj);
    
    // while($row = mysqli_fetch_assoc($result)){
    //     print_r($row);
    //     echo "<br>";
    // }
    
    // $connection->CloseCon($conobj);
    



?>