<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

if(isSet($_GET['lang']))
{
    $lang = $_GET['lang'];
    
    // register the session and set the cookie
    $_SESSION['lang'] = $lang;
    
    setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
    $lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
    $lang = $_COOKIE['lang'];
}
else
{
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['fr', 'nl', 'en']; 
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';	
}

$language = $lang;
if(!isSet($_GET['lang']))
{
	header("Location: /$language".$_SERVER["REQUEST_URI"]);
	die;
}


switch ($lang) {
  case 'en':
  $lang_file = 'lang.en.php';
  break;

  case 'fr':
  $lang_file = 'lang.fr.php';
  break;

  case 'nl':
  $lang_file = 'lang.nl.php';
  break;

  default:
  $lang_file = 'lang.en.php';

}
include_once 'languages/lang.en.php'; //always include english translation - so untranslated items get copied as well
include_once 'languages/'.$lang_file;
?>
