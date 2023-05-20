<?php
$status="";
$count=0;
    if(isset($_REQUEST["submit"])){
        if(empty($_REQUEST["name"])){
            $status="Fill Up All the boxes";
            $count +=1;
        }
        if(empty($_REQUEST["phone"])){
            $status="Fill Up All the boxes";
            $count +=1;
        }
        if(empty($_REQUEST["feedback"])){
            $status="Fill Up All the boxes";
            $count +=1;
        }

        if($count==0){
            $input_str= $_REQUEST["name"]." | ". $_REQUEST["phone"] ." | ".$_REQUEST["feedback"];
            $file = fopen('../data/feedback.txt', 'a');
	        fwrite($file, $input_str);
	        $status= "done";
	        fclose($file);
        }
    }
    
    
?>