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
$class9a = array(
    "name_class"=>"9a",
    "students"=>array("ngan","duong","minh")
);
$class9b = array(
    "name_class"=>"9b",
    "students"=>array("luong","dat","trung")
);

$dinhtienhoang = array($class9a,$class9b);
echo "<pre>";
print_r($dinhtienhoang);
echo "</pre>";

if (is_array($dinhtienhoang)&& !empty($dinhtienhoang)){
    foreach ($dinhtienhoang as $key_class =>$class){
        echo "<br>-" .$class["name_class"];
        if (is_array($class["students"])&& !empty(["students"])){
            foreach ($class["students"] as $ket_student => $student){
                echo "<br>--" .$student;
            }
        }
    }
}
?>
</body>
</html>