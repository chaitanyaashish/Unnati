<?php
include 'common.php';
$idevent=$_POST['id'];
$area=$_POST['area'];
$user_id=$_SESSION['id'];
$q1="Select * from events where userid="+$_SESSION['id']+" AND id="+$idevent+";";
$res= mysqli_query($con, $q1);
if (mysqli_num_rows($res) > 0)
{
    echo 'You have already registered for this event';
}
else
{
    $q2="Insert into events values($idevent,$user_id,'$area');";
    $res2= mysqli_query($con,$q2);
    if (!$res2)
    {
         echo "Some problem occurred while registering.";
    }
    else
    {
       require 'PHPMailerAutoload.php';
        $mail1 = new PHPMailer;

$mail1->isSMTP();
$mail1->Host = 'tls://smtp.gmail.com:587';
$mail1->SMTPAuth= true;
$mail1->SMTPSecure='ssl';
$mail1->Port='587';
$mail1->isHTML();
$mail1->Username="interntest22@gmail.com";
$mail1->Password="interntest";
$mail1->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail1->setFrom("UNNATI");

$mail1->Subject="Registered for a new event.";
$mail1->Body="You have successfully registered in our event. This is a confirmation mail.";
$mail1->addAddress($_SESSION['email']);
if(!$mail1->send()) {
  echo 'Mail1 was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  header('location:index.php');
}
    }
}


?>
