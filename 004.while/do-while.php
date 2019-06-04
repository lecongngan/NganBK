<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

Trong vòng lặp có 3 có thành phần quan trọng nhất :
1 . sự khởi đầu vòng lặp
2 . điều kiện chạy vòng lặp
3 . sự thay đổi sau mỗi vòng lặp

<pre>
sự khởi đầu vòng lặp
while(điều kiện chạy vòng lặp) {
    // các câu lệnh của vòng lặp
    sự thay đổi của vòng lặp sau mỗi lần chạy
}
</pre>

<pre>
    for(sự khởi đầu vòng lặp; điều kiện chạy vòng lặp; sự thay đổi của vòng lặp sau mỗi lần chạy ) {
        // các câu lệnh của vòng lặp
    }
</pre>

<pre>
    sự khởi đầu vòng lặp
    do {
        // các câu lệnh của vòng lặp
        sự thay đổi của vòng lặp sau mỗi lần chạy
    }while(điều kiện đề chạy vòng lặp);
</pre>

<?php
$i = 1;
do {
    if ( ($i % 2) == 0) {
        echo "<br>" . $i;
    }
    $i++;
} while($i < 100);
?>

</body>
</html>