<?php

$password='qsdfghjklm';
$user='website';
$db = 'foss4g-2016';

$link = mysqli_connect('localhost',$user,$password,$db);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
	};
$languages= array(0=>"?",1=>"nl", 2=>"fr",3=>"en");
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
 span.author {font-size:80%}
 span.lang {font-size:60%; float:left}
 td a {float:right}
</style>
</head>
<body>
<table>
<tbody>
<tr><th>time</th><th>track 1</th><th>track 2</th><th>track3</th><th>track 4</th></tr>
<?php
$query = "select * FROM presentations order by start, track";
$result = mysqli_query($link,$query);

$lasttrack =0;
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
	if ($lasttrack >=$row['track']) echo '<tr>';
	if ($lasttrack+2==$row['track']) echo '<td></td>';
	if ($row['track']==1)
		{printf( '<tr><td>%s</td>',$row['start']);}
	
	printf("<td><a href=edit.php?id=%s>X</a>%s<br><span class='author'>%s</span><span class='lang'>[%s]</span></td>",$row['guid'], $row['title'],htmlentities($row['presenter']), $languages[$row['language']]);
	$lasttrack = $row['track'];
	
}
echo '</tr>';
?>
</tbody>
</table>
</body>
</html>
