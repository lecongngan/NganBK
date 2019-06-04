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
    $month = date('m');
    switch ($month){
        case 1:
            echo "mùa xuân";
            break;
        case 2:
            echo "mùa xuân";
            break;
        case 3:
            echo "mùa xuân";
            break;
        case 4:
            echo "mùa he";
            break;
        case 5:
            echo "mùa he";
            break;
        case 6:
            echo "mùa he";
            break;
        case 7:
            echo "mùa thu";
            break;
        case 8:
            echo "mùa thu";
            break;
        case 9:
            echo "mùa thu";
            break;
        case 10:
            echo "mùa đông";
            break;
        case 11:
            echo "mùa đông";
            break;
        case 12:
            echo "mùa đông";
            break;
        default:
            echo "Không xác định";
    }
?>
</body>
</html>