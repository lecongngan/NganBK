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
<h1>comment trong php</h1>
<pre>
    comment thì chạy mà chỉ dc dùng để giải thích code cho các lập trình viên
    phân biệt sự khác biệt khi echo giá trị 1 biến
    bằng nháy "" hay nháy đơn
</pre>
<?php
/*
 * coment nhiều dong
 */
$a =12;
echo "nháy kép hiểu là biến  :giá trị của biên $a bằng : " .$a;
echo "<br>";
echo 'nhay don hiểu là tên biến: giá trị của biến $a băng :' .$a;

echo "<br>";
$ten = ['Tài', 'Tuấn', 'Hà'];
print_r($ten);

?>
</body>
</html>