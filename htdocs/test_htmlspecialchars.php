<?php

include_once("mysql.php");
mysqli_set_charset('utf8', $link);
mysqli_set_charset('utf8');
ini_set('default_charset','utf-8');

$tekst = "olé";

print($tekst);
print("<hr>");
print(htmlspecialchars($tekst));
print("<hr>");
print(htmlspecialchars($tekst,  ENT_SUBSTITUTE,'UTF-8', true));
print("<hr>");
print("blabla");

$query = "select * FROM presentations where title like 'Dans les%' order by start, track";
$result = mysqli_query($link,$query);

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    print($row["title"]);
    print("<hr>");
    print(htmlentities($row["title"]));
    print("<hr>");
    print(htmlentities($row["title"], ENT_COMPAT));
}

?>
