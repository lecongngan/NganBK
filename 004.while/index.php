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
<?php
$i=100;
for ($i =1;$i <=10;$i++){
    echo "<br>" .$i;
    $i++;
}
$i =100;
while ($i<=10){
    echo "<br>" .$i;
    $i++;
}
do{
    echo "<br>" .$i;
}while($i<=10)
?>
</body>
</html>