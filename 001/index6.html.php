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
// nháy kép bao nháy đơn
$html = "<div class='container'>Thẻ div</div>";
// nháy đơn bao nháy kép
$html = '<div class="container">Thẻ div</div>';
// sử dụng ký tự escape ngoại lệ \" in ra "
$html = "<div class=\"container\">Thẻ div</div>";
// nháy bên ngoài là nháy bao chuỗi . nháy bên trong là nháy để in ra và phải có \ ở phía trước
$html = '<div class=\'container\'>Thẻ div</div>';
echo $html;
?>
</body>
</html>