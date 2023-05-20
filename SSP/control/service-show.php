<?php

$existingdata = file_get_contents('../data/service-provider.JSON');
$tempJSONdata = json_decode($existingdata);


        $name= "";
        $location= "";
        $service= "";
        $phone= "";
        $email = "";
        
        $list="";

    foreach($tempJSONdata as $data ){
       
        $name= @$data->name;
        $location= @$data->location;
        $service= @$data->service;
        $phone= @$data->phone;
        $email = @$data->email;
        
        

        $list= "<tr>
                <td>".$service."</td>
                <td>".$name ."</td>
                <td>".$location."</td>
                
                <td>".$phone."</td>
                <td>".$email."</td>
                
                </tr>" . $list;
    }
   


?>