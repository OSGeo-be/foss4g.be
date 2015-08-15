<?php
$headers = "From: moritz.lennert@ulb.ac.be\r\n";
$headers .= "Reply-To: moritz.lennert@ulb.ac.be\r\n";
$headers .= "X-Mailer: PHP/".phpversion();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
	$subject = $_POST['subject'];
    $from = "FOSS4G contact: $name"; 
    $to = 'moritz.lennert@ulb.ac.be'; 
    $body = "Un nouveau formulaire FOSS4G a été soumis par $name\n
	E-Mail: $email\n\n
	$subject\n
	$message";
mail($to, $from, $body, $headers);
header('Location: gracias.php');
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


