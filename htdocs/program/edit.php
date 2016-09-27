<?php
include_once("../mysql.php");

/** handle the uploaded form **/


if(!empty($_POST['submit']) && $_POST['submit'] == "save changes" && !empty($_POST['id'])) 
{
	$sql = "UPDATE presentations set presenter=?, email=?, 
		affiliation=?,url=?,title=?,abstract=?,language=?,presentation_url=? where guid=?";
	$upd = mysqli_prepare ($link, $sql);
	mysqli_stmt_bind_param($upd,"ssssssis",$_POST['presenter'],$_POST['email'],$_POST['affiliation'],$_POST['url'],$_POST['title'],$_POST['abstract'],$_POST['language'],$_POST['presentation_url'],$_POST['id']);

	mysqli_stmt_execute($upd);
	/* note that for invalid ID's nothing will happen */
}
?>
<html>
<head>
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<!-- CSS Reset -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
<!-- Milligram CSS minified -->
<link rel="stylesheet" href="https://milligram.github.io/css/milligram.min.css">
<style>
 textarea { height: 10em;}
</style>
</head>
<body>
<?php
/** render the page **/
$guid = ($_GET['id']);
if (preg_match("/^(\{)?[a-f\d]{8}(-[a-f\d]{4}){4}[a-f\d]{8}(?(1)\})$/i", $guid))
	{
		$id= mysql_escape_string($guid);
	}
	else
		
	{
		echo "invalid id";
		exit();}

$query="select * FROM presentations where guid='$id'";
$result = mysqli_query($link,$query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>
<h1>Presenter submission</h1>
<div>This form enables presenters at FOSS4G.be to update the details of their presentation. Please do not share the link as anyone with the link can update all records. Note that start time, end time and track can not be changed using this form.
</div>
<form method="post">
<fieldset>
<label for="start">Start Time (hhmm):</label> <?php echo $row["start"]?>
<label for="end">End Time (hhmm):</label> <?php echo $row["end"]?>
<label for="track">Track:</label> <?php echo $row["track"]?>

<input type="hidden" name="id" id="id" value="<?php echo htmlentities($row["guid"])?>" />
<label for="presenter">Presenter:</label><input type="text" name="presenter" id="presenter" value="<?php echo htmlentities($row["presenter"])?>" />
<label for="email">E-mail:</label><input type="text" name="email" id="email" value="<?php echo htmlentities($row["email"])?>" />
<label for="affiliation">Affiliation:</label><input type="text" name="affiliation" id="affiliation" value="<?php echo htmlentities($row["affiliation"])?>" />
<label for="url">URL (eg twitter link):</label><input type="text" name="url" id="url" value="<?php echo htmlentities($row["url"])?>" />
<label for="title">Presentation Title:</label>
<input type="text" name="title" value="<?php echo htmlentities($row['title'])?>" />
<label for="abstract">Abstract:</label>
<textarea name="abstract" id="abstract" rows="5">
<?php echo htmlentities ($row['abstract'])?></textarea>
<label for="language">Language:</label><span>Note that for track 1 we provide translations (<b>NL->FR</b>) and (<b>FR->NL</b>). <br />For other tracks we prefer presentations in English (for our international audience), but presenters can choose the language they prefer.</span>
<select id="language" name="language">
	<option value="1"<?php if ($row['language'] == '1') echo ' selected="selected"'; ?>>nl</option>
	<option value="2"<?php if ($row['language'] == '2') echo ' selected="selected"'; ?>>fr</option>
	<option value="3"<?php if ($row['language'] == '3') echo ' selected="selected"'; ?>>en</option>
</select>

<input type="text" name="presentation_url" value="<?php echo htmlentities($row['presentation_url])?>" />


<input type="submit" name="submit" value="save changes"/>

</fieldset>
</form>

<?php

mysqli_close($link);

?>
</body>
</html>
