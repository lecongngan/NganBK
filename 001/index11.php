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
    <h1>Các phương thức xử lí chuỗi trong PHP</h1>
    <pre>
        sttpos("chuoi","chuỗi con");
        tìm chuỗi con chuỗi trong chuỗi tham số
    </pre>

    <?php
    $str ="chao ha noi";
    echo "<br> ham strlen(bien) dùng để đếm số kí tự: " .strlen($str);
    echo "<br> HÀm str_word_count (biến) dùng để đến số chuỗi từ trong chuỗi: ".str_word_count($str);
    echo "<br> Hàm strrev(biến) dùng để đảo ngược chuỗi : " . strrev($str);
    echo  "<br> hàm strpos():" .strpos("chao ha noi","ha noi");
    echo "<br>";
    $x = strpos("chao ha noi","da nang");
    var_dump($x);
    echo "<br>";
    echo str_replace("ha noi","ho chi minh","chào thanh pho ha noi");
    ?>
</body>
</html>