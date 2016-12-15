<?php

$emailFrom = "dbrown52@u.rochester.edu";

$emailTo = "dbrown52@u.rochester.edu";

$subject = "Project 3 - Individual Portfolio

$name = Trim(stripslashes($_POST['name']));

$email = Trim(stripslashes($_POST['Email']));

$phone = Trim(stripslashes($_POST['Telephone']));

$message = Trim(stripslashes($_POST['message']));

$body = "";

$body .= "Name: ";

$body .= $name;

$body .= "\n";

$body .= "Email: ";

$body .= $email;

$body .= "\n";

$body .= "Phone: ";

$body .= $phone;

$body .= "\n\n";

$body .= "\n\n";

$body .= "Message: \n";

$body .= $message;

$body .= "\n";

mail($emailTo, $subject, $body, "From: <$emailFrom>");

header("Location:contact-thanks.html");

?>