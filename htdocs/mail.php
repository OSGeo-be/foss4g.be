<?php
$headers = "From: Website FOSS4G <info@foss4g.be>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/".phpversion();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
	$subject = $_POST['subject'];
    $from = "FOSS4G contact: $name <$email>"; 
    $to = 'info@foss4g.be,johan.vandewauw@gmail.com'; 
    $body = "A new FOSS4G contact form was submitted by $name\n
	E-Mail: $email\n\n
	$subject\n
	$message";
if ($_POST['calculate']=='4')
{
	mail($to, $from, $body, $headers);
	header('Location: gracias.php');
	exit();
}
else
{
	   echo "<h1>Error</h1>\n
      <p>Invalid calculate field</p>";
   exit;
}

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


