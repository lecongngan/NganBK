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
    $students = array("tuan","minh","ngan");
    echo "<br> đếm số phần tử trong mảng: " .count($students);
    echo "<pre>";
    print_r($students);
    echo "</pre>";
    echo "<br> sau khi sắp xếp asort() sắp xếp mảng chỉ số theo thứ tự tăng dần theo AZ dựa vào giá trị của các phần tử";
    echo "<pre>";
    print_r($students);
    echo "</pre>";

    rsort($students);
    echo "<br> sau khi sắp xếp rsort() sắp xếp mảng theo thứ tự giảm dần theo za sụa vào vị trí của các phần tử";
    echo "<pre>";
    print_r($students);
    echo "</pre>";
    ?>
</body>
</html>