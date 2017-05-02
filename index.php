<?php
    $name = $_Post['Name'];
    $email = $_Post['Email'];
    $message = $_Post['Message']
    $to = 'drblaylock@gmail.com';
    $subject = 'Lov Cycling Contact';
    $human = $_Post['Human'];

    $body = "From: $name \n Email: $email \n Message:\n $message";

    if ($_POST['submit'] && $human == '4') {
       if (mail ($to, $subject, $body)) {
     echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }  else if ($_POST['submit'] && $human != '4') {
        echo '<p>You answered the anti-spam question incorrectly!</p>';
      }
    }
?>
