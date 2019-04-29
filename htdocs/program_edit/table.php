<?php
include_once("../mysql.php");
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
<script   src="https://code.jquery.com/jquery-3.1.0.min.js"    crossorigin="anonymous"></script>

<style>
 span.author {font-size:80%}
 span.lang {font-size:60%; float:left}
 td a {float:right}
 div.abstract {display:none}
</style>
</head>
<body>
<table>
<tbody>
<tr><th>time</th><th>track 1</th><th>track 2</th><th>track3</th><th>track 4</th></tr>
<?php
$query = "select * FROM presentations where accepted=1 order by start, track";
$result = mysqli_query($link,$query);

$lasttrack =0;
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
	if ($row['track']==0)
	{
        printf ("<tr><td>%s</td><td colspan='4'><a href='edit.php?id=%s'>X</a>i %s</td></tr>", $row['start'], $row['guid'], $row['title']);
	}
	else
	{
	if ($lasttrack >=$row['track']) echo '<tr>';
	if ($lasttrack+2==$row['track']) echo '<td></td>';
	if ($row['track']==1)
		{printf( '<tr><td>%s</td>',$row['start']);}
	
	printf("<td><a href=edit.php?id=%s>X</a>%s<br><span class='author'>%s</span><span class='lang'>[%s]</span><span start='%s' track='%s' class='oa'>+</span><div class='abstract'>bla</div></td>",$row['guid'], $row['title'],htmlentities($row['presenter']), $languages[$row['language']],$row['start'],$row['track']);
	$lasttrack = $row['track'];
	}
}
echo '</tr>';
?>
</tbody>
</table>
</body>
<script>
$('.oa').click(function(){
	start = $(this).attr('start');
	track = $(this).attr('track');
	abstractdiv = $(this).next();
	
	abstractdiv.html(start );
$.get("abstract.php", {'start':start,'track':track}, function(data){
		abstractdiv.html(data);
	}
	);
	abstractdiv.toggle();
	});
</script>
</html>
