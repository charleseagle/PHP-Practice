<?php

$to = 'sunqicharles@gmail.com';
$subject = 'This is an email.';
$body = 'This is a test email'."\n\n".'Hope you got it.';
$headers = 'From: Charle <charleseagletrade@qrksun.com>';

if (mail($to, $subject, $body, $headers)) {
	echo 'Email has been sent to '.$to;
}
else{
	echo 'There was an error sending the email.';
}
	
?>

<form action="index.php" method="POST">
	Name: <br><input type="text" name="contact_name"><br><br>
	Email address: <br><input type="text" name="contxt_email"><br><br>
	Message:<br>
	<textarea name="contact_text" rows="6" cols="30"></textarea><br><br>
	<input type="submit" value="Send">
</form>