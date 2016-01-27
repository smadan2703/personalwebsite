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
	$name = $_POST['name'];
	$fr = $_POST['email'];
	$sub = $_POST['subject'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];
	$to = "smadan2703@gmail.com"; // your email address
	$subject = "Email from MK Site - $sub";
	$message = "First Name : $name\n\nEmail ID : $email\n\nComments : $comments";
	$from = "smadan2703@gmail.com";
	if(mail($to,$subject,$message,"From:" . $email))
		{
		echo "Email was sent";
		}
}



?>