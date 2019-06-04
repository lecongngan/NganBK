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
    <pre>
        kiểu số
    </pre>
    <?php
    $a = 20;
    $b = 10;
    echo "<br> Tổng : ".($a+$b);
    echo "<br> trừ : ".($a-$b);
    echo "<br> Nhân : ".($a*$b);
    echo "<br> chia : ".($a/$b);
    echo "<br> lấy phần dư : ".($a%$b);
    echo '<br> var_dump(); được sử dụng để debug xem kiểu dữ liệu và giá trị của biến<br>';
    var_dump($a);
    echo '<br>';
    var_dump($b);
    echo '<br>';
    ?>
</body>
</html>