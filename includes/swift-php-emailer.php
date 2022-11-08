<?php

if($_POST) {

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $visitor_email = $_POST['email'];
    $comment = $_POST['comments'];
    $sub_name = $_POST['subject'];

    $to = $_POST['mailto'];

    $subject = $sub_name." ";
    $subject .= $visitor_email;

    $message = "<p><b>Form Submission:</b></p>";
    $message .= "<p><b>Name: " . $first_name . " " . $last_name . "</b></p>";
    $message .= "<p><b>Email: " . $visitor_email . "</b></p>";
    $message .= "<p><b>Comment: " . $comment . "</b></p>";

    $headers = array(
      'From: "'.$full_name.'" <'.$visitor_email.'>' ,
      'Reply-To: "'.$full_name.'" <'.$visitor_email.'>' ,
      'X-Mailer: PHP/' . phpversion() ,
      'MIME-Version: 1.0' ,
      'Content-type: text/html; charset=iso-8859-1'
    );
    $headers = implode( "\r\n" , $headers );

    $retval = mail ($to,$subject,$message,$headers);

    if( $retval == true ) {
        echo "<h2 class='mt-0 mt-md-2 text-white'>Thank you for your interest in Elm Street Development. We will contact you as soon as possible.</h2>";
    } else {
        echo "<h2 class='mt-0 mt-md-2 text-white'>Message could not be sent...</h2>";
    }

}

?> 