<?php
if(isset($_POST['submit'])){
  $to = "lephanh89@gmail.com"; // this is your Email address
  $from = $_POST['email']; // this is the sender's Email address
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $zipcode = $_POST['zipcode'];
  $subject = "Website form submission";
  $subject2 = "Copy of your form submission";
  $message = "Name: " . $first_name . " " . $last_name . "\n\n" . "Zip Code: " . $zipcode . "\n\n" . "Phone Number: " . $phone . "\n\n" . "Email: " . $email . "\n\n" . "Message:" . "\n\n" . $_POST['message'];
  $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

  $headers = "From:" . $from;
  $headers2 = "From:" . $to;
  mail($to,$subject,$message,$headers);
  mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
  echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
  $URL="http://www.johnlelandscaping.com/contact-us";
  echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
  echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
    }
?>
