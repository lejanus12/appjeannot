<?php

if (isset($_POST['submit'])){
    $name= trim($_POST['name']);
    $email= trim($_POST['email']);
    $subject= trim($_POST['subject']);
    $message= trim($_POST['message']);

    // $myMail = "malissard.jean@test.com";
    // $header = "from".$email;
    // $message2= "t'as recu c  e message de ".$name.".\n\n". $message;


    // // 1. email / 2. subject / 3. message /
    // mail($myMail,$subject,$message2,$header);
    header("Location: index.php?mailsend");
}



?>

