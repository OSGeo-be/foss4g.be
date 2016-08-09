<?php
$password='qsdfghjklm';
$user='website';
$db = 'foss4g-2016';

mysql_connect(localhost,$user,$password);
@mysql_select_db($db) or die( "Unable to select database");
$query='select * FROM presentations';
$result = mysql_query($query);
if (!$result) {
    die('Could not query:' . mysql_error());
    }
echo mysql_result($result, 0, "presenter");
mysql_close();

?>
