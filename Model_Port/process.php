<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
<?php
  
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = "jafaria2397@gmail.com";
        $subject = "New Contact Form Submission";

        $headers = "From: $name <$email>" . "\r\n";

        $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";

        mail($to,$subject,$body,$headers);

          echo ("Thank you for your message! We'll be in touch shortly"); 
          
    }
?>