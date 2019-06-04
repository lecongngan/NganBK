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
<h1>Biến trong PHP : lưu trữ thông tin và thay đổi trong quá trình chạy</h1>
<pre>
    Khai báo biến trong PHP như thế nào ?
    $tên_biến
    Biến trong php thì ko cần từ khoá var giống js
    và phải bắt đầu bằng $ tiếp theo là tên biến
    tên biến phải viết liền , không được dùng tiếng việt có dấu
    không được dùng ký tự đặc biệt như @#...
    tên biến chỉ chứa các số và chữ cái A đến Z và ký tự _
    tên biến có phân biệt hoa thường ví dụ $a khác $A
    trong js nối chuỗi bằng +
    trong php nối chuỗi bằng .
</pre>
<?php
$a =5;
$b =7;
$c =$a+$b;
echo '$c : ' .$c;
?>

</body>
</html>