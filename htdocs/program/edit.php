<?php
$password='qsdfghjklm';
$user='website';
$db = 'foss4g-2016';

mysql_connect(localhost,$user,$password);
@mysql_select_db($db) or die( "Unable to select database");
$query='select * FROM presentations';
mysql_query($query);
echo mysql_result($result, 0, "presenter");
mysql_close();

?>
