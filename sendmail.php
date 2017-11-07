<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Post Email</title>
</head>
<body>

<?php 
	$myemail="inka.pelin13@gmail.com";
	$subject= "Proba";

	$name= $_POST['Name'];
	$email= $_POST['Email'];
	$message= $_POST['Message'];
	$headers= "from: $name , $email \r\n";
	$headers.="To: $myemail\r\n";
	?>
<p>
	<?php echo $myemail, $subject, $message, $headers ?>
</p>
<?php
	mail($myemail, $subject, $message, $header);

?>	

<p>Thanks for sending.</p>
</body>
</html>