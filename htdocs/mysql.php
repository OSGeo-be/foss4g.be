<?php
$password='qsdfghjklm';
$user='website';
$db = 'foss4g-2016';

$link = mysqli_connect('localhost',$user,$password,$db);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
	};
?>