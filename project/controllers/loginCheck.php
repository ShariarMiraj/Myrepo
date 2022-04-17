<?php 
	session_start();
	require('../models/smodel.php');

	if(isset($_REQUEST['submit']))
{

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username != null && $password != null)
    {

        $status = login($username, $password);

     if($status)
    {
        $_SESSION['status'] = true;
        $_SESSION['current_user'] = userInfo($username);
        setcookie('status', 'true', time()+3600, '/');
        /*setcookie('m_status', 'true', time()+4600, '/');*/
        header('location: ../views/homepage.php');
    }
    else 
    {
        echo "not ok";

    }

            //

        //echo 'invalid username/password   <br><br><a href="../m_views/m_login.php">Back</a>';
        }
        else{
        echo 'null submission  <br><br>';
    }
}

?>