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
	$to = "smadan2703@gmail.com"; // your email address
	$subject = "Contact form submission";
	$message = "first name : $name";
	$from = "smadan2703@gmail.com";
	if(mail($to,$subject,$message))
		{
		echo "Email was sent";
		}
}



?>