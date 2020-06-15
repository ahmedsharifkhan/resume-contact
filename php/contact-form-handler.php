<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
        
        
    $email_from = 'someone@gmail.com';
    $email_subject = "New Foorm Submission";

    $email_body = "User Name: $name\n".
                       "User Email: $visitor_email.\n".
                            "User Message: $message. \n";



    $to = "abdunnoor540@gmail.com"
        
    $headers .="Form: $email_from\r\n";

    $headers .= "Reply-To: $visitor_email \r\n";
        
    mail($to,$email_subject,$mail-body,$sheaders);

    header("Location: index.html");
    
?>