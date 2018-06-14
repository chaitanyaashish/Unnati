<?php
require 'common.php';
$email=mysqli_real_escape_string($con,$_POST['email']);
$name=mysqli_real_escape_string($con,$_POST['name']);
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$regex_email="/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/";
if (!preg_match($regex_email,$email))
{
    echo 'Incorrect email';
}
$password=md5(mysqli_real_escape_string($con,$_POST['pass']));
if (strlen($password)<6)
{
    echo 'Password should have at least 6 characters';
}
$q1="Select id from users where email=$email;";
$res= mysqli_query($con, $q1);
if (mysqli_num_rows($res)>0)
{
    die("The email alredy exits.");
    
}
$q2="Insert into users(name,email,password,phone) values('$name','$email','$password','$contact');";
$res2= mysqli_query($con, $q2);
if ($res2)
{
    echo "User successfully registered.";
    session_start();
    $_SESSION['id']= mysqli_insert_id($con);
    $_SESSION['email']=$email;
    header('location:index.php');
    
}
else
{
    echo"Some problem occurred. Please try again.";
}
?>
