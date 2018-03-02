<?php
$comment = $_GET["comment"];

$mycomment=fopen("/home/qinyachen/public_html/comment.txt", "w");

fwrite($mycomment,$comment);


header("location:login.php")

?>