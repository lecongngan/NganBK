<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>mảng nhiều chiều</h1>
<?php
$class1_to1=array("an","huong");
$class1_to2=array("son","linh");
$class1= array($class1_to1,$class1_to2);

$class2_to1=array("an2","linh2");
$class2_to2=array("son2","huong2");
$class2=array($class2_to1,$class2_to2);
$class3= array("an3","huong","son3","linh3");
$class4= array("an4","huong","son4","linh4");
$class5= array("an5","huong","son5","linh5");

$dinhtienhoang = array($class1,$class2,$class3,$class4,$class5);
echo "<pre>";
print_r($dinhtienhoang);
echo "</pre>";
?>
</body>
</html>