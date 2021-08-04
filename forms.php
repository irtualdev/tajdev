<?php
if(isset($_POST['Submit'])){
    $nsme=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];

    $to='devtajpuriya12345@gmail.com';
    $subject='Form Submission';
    $message="Name: ",$name."\n"."Phone: ".$phone."\n"."Worte Sonething: "."\n\n".$msg;
    $headers="From: ".$email;

    if(mail($to, $subject, $message, $headers)){
        echo "<h2>Sent Successfully! Thank You"." ".$name.",We will Shortly Contact You!</h2>";

    }else{
        echo "Something Went Wrong";
    }
}
?>