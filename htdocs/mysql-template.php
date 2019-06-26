<?php
$password='';
$user='root';
$db = 'foss4g-2017';

$link = mysqli_connect('localhost',$user,$password,$db);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
};
mysqli_set_charset($link, 'utf8mb4');
?>
