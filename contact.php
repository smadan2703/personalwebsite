<?php
if(isset($_POST))
{
	foreach($_POST as $key => $field)
		{
		if(trim($field==""))
			echo "this field is required, your input is blank: <b>$key</b> <br>";
		$key=$field; //putting the response into variables
		}
		
$dbhost = "rattic-db.cmyjlrhcajvb.ap-southeast-1.rds.amazonaws.com";
$dbuser = "rattic";
$dbpass = "vine2013M";
$dbname = "ratticdb";
$dt = "27-mar-2016";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];
	$to = "smadan2703@gmail.com"; // your email address
	$subject = "Email from MK Site";
	$message = "First Name : $name\n\nEmail ID : $email\n\nComments : $comments";
	
	
	if(mail($to,$subject,$message,"From:" . $email))
		{
		echo "Email was sent";
		}
 
/* checking if data was sent */

		
		/* starting the email message */
	

}



?>