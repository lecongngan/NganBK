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
        biến và hằng nó đều chứa thông tin
        biến thì nó sẽ có thay đổi trong qua trình chạy
        còn hằng số thì thay đổi qua quá trình chạy
        vd tuổi của các bạn thay đổi qua từng năm
        nhưng tên thì vẫn giữ nguyên
        cú pháp khai báo hằng sô:
        define ("tên hằng số","giá trị hằng số");
        tên hằng số nên viết hoa
        biến thfi bắt đầu = $
        nhưng hằng số thì ko cân
    </pre>
    <?php
    define("NAME","Nguyễn tuấn anh");
    echo  NAME;
    echo "<br>";
    ?>
    <pre>
        Toán tử ++ vd : $a = 5; $a++; => $a là 6
        Toán tử -- vd : $a = 5; $a--; => $a là 4
    </pre>
    <?php
    $a =5;
    $a++;
    echo "<br> toán tử ++ :" .$a;
    $b = 5;
    echo "<br> toán tử -- :" .$b;
    ?>

    <pre>
    Khi có 1 biến + , - , * , / , % với chính bản thân nó
    hoặc nối chuỗi với chính nó thì mình sẽ toán tử viết tắt
    $a = $a + 3; => $a += 3;
    $a = $a - 1; => $a -= 1;
    $a = $a * 2; => $a *= 2;
    $a = $a /2; => $a /= 2;
    $a = $a % 2; => $a %= 2;
    $a = $a . " ha noi"; => $a .= " ha noi";
</pre>
    <h1> các phương thức xử lí chuỗi trong php</h1>
    <?php
    $str = "chao ha noi";
    // hàm dùng để đếm số kí tự
    echo "<br> hàm strlen(bien) dùng để đế số kí tự :" .strlen($str);
    echo "<br> hàm str_word_count(bien) dùng để đếm số từ trong chuỗi  :" .str_word_count($str);
    echo "<br> hàm strrev(bien) dùng để đảo ngược chuỗi :" .strrev($str);

    ?>
</body>
</html>
