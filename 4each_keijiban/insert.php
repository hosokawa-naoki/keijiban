<?php
mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=lesson1001;host=localhost;","root","mysql");

$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("location:http://localhost/4each_keijiban/index.php");
?>