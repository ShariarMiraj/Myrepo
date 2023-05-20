<?php 

include '../control/feedback.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>


    <title>Feedback-form</title>
</head>
<body>
<a href="../view/home.php"><img src="../images/logo.png" width="200px" alt=""></a>
    <h1>Feedback Form</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Name : </td>
                <td><input type="text" name="name" value="" placeholder="Enter name"></td>
            </tr>
            <tr>
                <td>Phone : </td>
                <td><input type="tel" name="phone" value="" placeholder="Enter Phone Number"></td>
            </tr>
            <tr>
                <td>Feedback : </td>
                <td><input type="text" name="feedback" value="" placeholder="Enter Feedback"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
                <td><?php echo $status;?></td>
            </tr>

        </table>
    </form>
</body>
</html>