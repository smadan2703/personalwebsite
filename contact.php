<?php

/* checking if data was sent */
if(isset($_POST))
{
	foreach($_POST as $key => $field)
		{
		if(trim($field==""))
			echo "this field is required, your input is blank: <b>$key</b> <br>";
		$key=$field; //putting the response into variables
		}
		
		/* starting the email message */
	$to = "smadan2703@gmail.com"; // your email address
	$subject = "Contact form submission-$_POST['subject']";
	$message = "First Name: $_POST['name'] ";
	$message = "Email Address: $_POST['email'] <br> Comment: <br> $_POST['comment'] ";
	$from = "smadan2703@gmail.com";
	if(mail($to,$subject,$message))
		{
		echo "Email was sent";
		}
}



?>