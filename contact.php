<?ph
/* checking if data was sent */
if(isset($_POST))
{
	foreach($_POST as $key => $field)
		{
		if(trim($field==""))
			echo "this field is required, your input is blank: <b>$key</b> <br>";
		$key=$field; //putting the response into variables
		}
		//Email information
  $admin_email = "smadan2703@gmail.com";
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $comment = $_POST['comment'];
    echo "test";
	echo $email;
/* starting the email message 
	$to = "smadan2703@gmail.com"; // your email address
	
	$message = "First Name: $name ";
	$message = "Email Address: $email <br> Comment: <br> $comment";
	$from = "smadan2703@gmail.com";*/
	if(mail($admin_email, "$subject", $comment, "From:" $email))
		{
		echo "Email was sent";
		}
}



?>