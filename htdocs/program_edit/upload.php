<?php
include_once("../mysql.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
// check id is set and valid -> fail otherwise
$guid = ($_GET['id']);
$id = $guid;
$query="select * FROM presentations where guid='$id'";
$result = mysqli_query($link,$query);
$row = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result) == 0)
{
    echo "id not found (g)";
    exit();
}

?>
<!DOCTYPE html>
<html>
<body><p>
Your talk: <?php print($row['title']);   ?></p>
<p>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select presentation to upload (only pdf, odp, pptx allowed):<br>
    <input type="hidden" name="id" value="<?php print($guid)?>">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Presentation" name="submit">
</form></p>

</body>
</html>


<?php


}

else
{

	// upload
	$guid = ($_POST['id']);
$id = $guid;
$query="select * FROM presentations where guid='$id'";
$result = mysqli_query($link,$query);
if (mysqli_num_rows($result) == 0)
{
    echo "id not found (p)";
    exit();
}



$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
print($target_file);
// Check if file already exists
//if (file_exists($target_file)) {
//    echo "Sorry, file already exists.";
//    $uploadOk = 0;
//}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    exit();
}
// Allow certain file formats
$extensions = array("odp", "pptx", "ppt", "pdf");
if(!in_array($imageFileType,$extensions)){
	echo "Sorry, only ".implode(",", $extensions)." files are allowed.";
	exit();
}
// Check if $uploadOk is set to 0 by an error
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    	$url = 'https://2019.foss4g.be/uploads/'.  $_FILES["fileToUpload"]["name"];
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br><a href='$url'>$url</a>";
	$sql = "UPDATE presentations set presentation_url=? where guid=?";
	$upd = mysqli_prepare ($link,  $sql);
	mysqli_stmt_bind_param($upd,"ss",$url,$guid);

	mysqli_stmt_execute($upd) or die(mysqli_error($link));;
	/* note that for invalid ID's nothing will happen */
	mysqli_close($link);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }



}
?>
