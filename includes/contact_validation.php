<?php
ob_start();
echo "Please wiat...";

$to_email = "support@ssmotivation.co.za";

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$subject = "[Contact Form] " . $_POST["subject"];


function isValidEmail($email) {
    return strpos($email, "@") !== false;
}

/*function isPostBack() { 
    return ($_SERVER['REQUEST_METHOD'] == 'POST');
}*/

if($email != "" && $message != "" && isValidEmail($email)) {

	$full_message = "Name : \t\t". $name . "\n";
	$full_message .= "Email : \t\t". $email . "\n";
	$full_message .= "Message :\n\n". $message . "\n";

	mail($to_email, $subject, $full_message);
	
	//echo "<input type='hidden' name='feedback' value='Your form has been successfully submitted.' >";
	
	$feedback = "Your form has really been successfully submitted.";
	
	$feedback = urlencode($feedback);
	
	header("location: ../contact.php?feedback=" . $feedback);
    
	exit();
}

die("Your data is invalid.");

ob_flush();
?>