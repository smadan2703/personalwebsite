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
 
 $con = mysql_connect("$dbhost","$dbuser","dbpass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("ratticdb", $con);

 $sql = "INSERT INTO info (name, dt, email, comments) VALUES('$name','$dt','$email',$comments)";
 
 if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)

/* checking if data was sent */

		
		/* starting the email message */
	

}



?>