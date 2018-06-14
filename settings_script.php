<?php
include 'common.php';
if (!isset($_SESSION['email']))
{
    header('location:index.php');
}
$user_id=$_SESSION['id'];
$old=md5(mysqli_real_escape_string($con,$_POST['old']));
$new=md5(mysqli_real_escape_string($con,$_POST['new']));
$renew=md5(mysqli_real_escape_string($con,$_POST['renew']));
$q1="Select password from users where id=$user_id;";
$res1= mysqli_query($con, $q1);
$row= mysqli_fetch_array($res1);
if ($old!=$row[0])
{
    echo 'Incorrect Old Password';
}
else
{
    if ($new!=$renew)
    {
        echo 'New Passwords do not match';
    }
    else 
    {
        if (strlen($new)<6)
        {
            echo 'The password should have at least 6 characters.';
        }
        else
        {
            $q2="Update users set password='$new' where id=$user_id;";
            $res2= mysqli_query($con, $q2);
            if (!$res2)
            {
                echo 'Some error occurred. Please <a href="settings.php"> try again.</a>';
            }
            else 
            {
                echo "Updation Successful.";
                header ('location:index.php');
            }
        }
    }
}
?>


