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
$tuoi = 19;
if ($tuoi>=18){
    echo "<br> đủ tuổi đi tù";
}
else{
    echo "<br> chịch đi từ đấy";
}
 $point = 6.8;
    if ($point >= 9) {
        echo "<br> xuất săc";
    } else if($point >= 8) {
        echo "<br>giỏi";
    } else if ($point >= 7) {
        echo "<br> khá";
    } else if ($point >= 6.5) {
       echo "<br> trung binh kha";
    } else if($point >= 5) {
        echo "<br> trung bình";
    } else {
       echo "<br>yếu kém";
    }
?>
</body>
</html>