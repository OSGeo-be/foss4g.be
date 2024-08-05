<?php
include "mailserver.inc";
require_once "Mail.php";
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];
	$subject = $_POST['subject'];
    $from = "FOSS4G contact: $name <$email>"; 
    $to = 'foss4g@osgeo.nl'; 
    $body = "A new FOSS4G contact form was submitted by $name\n
	E-Mail: $email\n\n
	$subject\n
	$message";

$headers = array ('From' => $from,
	  'To' => $to,
	    'Subject' => $subject);

try{
$smtp = Mail::factory('smtp',
	  array ('host' => $host,
	      'auth' => true,
          'username' => $username,
      'password' => $password));
$mail = $smtp->send($to, $headers, $body);
header('Location: gracias.php');

} catch (phpmailerException $e) {
	    $errors[] = $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
	    $errors[] = $e->getMessage(); //Boring error messages from anything else!
}
exit();
if (!isset($_POST['submit'])) {
   echo "<h1>Error</h1>\n
      <p>Accessing this page directly is not allowed.</p>";
   exit;
}
$email = preg_replace("([\r\n])", "", $email);
$find = "/(content-type|bcc:|cc:)/i";
if (preg_match($find, $name) || preg_match($find, $email) || preg_match($find, $url) || preg_match($find, $message)) {
   echo "<h1>Error</h1>\n
      <p>No meta/header injections, please.</p>";
   exit;
}
?>


