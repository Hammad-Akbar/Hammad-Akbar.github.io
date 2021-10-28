<?php 
if(isset($_POST['submit'])){
    $to = "akbarha528@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $message = $_POST['message'];
    $subject = $_POST['subject']
    $message2 = "Here is a copy of your message " . "\n\n" . $_POST['message'];
    $subject2 = "Copy of your response to Hammad Akbar"
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    }
    echo <p> "Mail Sent. Thank you" </p>;
?>