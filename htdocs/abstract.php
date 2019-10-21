<?php
include_once("mysql.php");

$start=$_GET['start'];
$track=intval($_GET['track']);

$query = "select abstract FROM presentations where start=? and track=?";
$stmt = mysqli_stmt_init($link);
$stmt = mysqli_prepare($link, $query);
mysqli_stmt_bind_param($stmt,"si",$start,$track);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt,$abstract);
mysqli_stmt_fetch($stmt);
header('Content-type: application/json');
echo json_encode(nl2br(htmlentities($abstract)));

?>
