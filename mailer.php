<?php session_start();
if(isset($_POST['Submit'])) {
$youremail = 'adeyanju.tobi@yahoo.co.uk';
$fromsubject = 'CV';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject']; 
$message = $_POST['message']; 
	$to = $youremail; 
	$mailsubject = 'Message recived from'.$fromsubject.' Contact Page';
	$body = $fromsubject.'
	
	The person that contacted you is  '.$name.'
	 E-mail: '.$email.'
	 Subject: '.$subject.'
	
	 Message: 
	 '.$message.'
	
	|---------END MESSAGE----------|'; 
echo "Thank you fo your feedback. I will contact you shortly if needed.<br/>Go to <a href='/index.php'>Home Page</a>"; 
								mail($to, $subject, $body);
 } else { 
echo "You must write a message. </br> Please go to <a href='/contact.php'>Contact Page</a>"; 
}
?> 