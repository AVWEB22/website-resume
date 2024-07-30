<?php
	if (empty($_POST['name_34591_48474_37471_22120']) && strlen($_POST['name_34591_48474_37471_22120']) == 0 || empty($_POST['email_34591_48474_37471_22120']) && strlen($_POST['email_34591_48474_37471_22120']) == 0 || empty($_POST['message_34591_48474_37471_22120']) && strlen($_POST['message_34591_48474_37471_22120']) == 0)
	{
		return false;
	}
	
	$name_34591_48474_37471_22120 = $_POST['name_34591_48474_37471_22120'];
	$email_34591_48474_37471_22120 = $_POST['email_34591_48474_37471_22120'];
	$message_34591_48474_37471_22120 = $_POST['message_34591_48474_37471_22120'];
	
	// Create Message	
	$to = 'receiver@yoursite.com';
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\nName_34591_48474_37471_22120: $name_34591_48474_37471_22120 \nEmail_34591_48474_37471_22120: $email_34591_48474_37471_22120 \nMessage_34591_48474_37471_22120: $message_34591_48474_37471_22120 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email_34591_48474_37471_22120";

	// Post Message
	if (function_exists('mail'))
	{
		$result = mail($to,$email_subject,$email_body,$headers);
	}
	else // Mail() Disabled
	{
		$error = array("message" => "The php mail() function is not available on this server.");
	    header('Content-Type: application/json');
	    http_response_code(500);
	    echo json_encode($error);
	}	
?>