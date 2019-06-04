
<?php
$data = [0 => 1, 1 => [3 => 4, 5 => 6]];
foreach ($data as $val) {
    if (is_array($val)) {
        foreach ($val as $v) {
            echo $v . "<br/>";
        }
    } else
        echo $val . "<br>";
}

$students = array("nguyen van a1","nguyen van a2","nguyen van a3","nguyen van a4","nguyen van a5",);
echo "<pre>";
print_r($students);
echo "<br> Dạng foreach đầy đủ";
//dạng foreach đầy đủ
if (is_array($students)&& !empty($students)){
    foreach ($students as $key => $value){
        echo "<br> Key: " .$key . "value :" .$value;
    }
}
echo "<br> Dạng foreach rút gọn";
//dang foreach rút gọn chỉ lặp và xuất ra cái value
if (is_array($students) && !empty($students)) {
    foreach ($students as $value) {
        echo "<br> value: " . $value;
    }
}

$students = array("a" => "nguyen van a1","b" => "nguyen van a2","c" => "nguyen van a3",
    "d" => "nguyen van a4","e" => "nguyen van a5",);
echo "<pre>";
print_r($students);
echo "</pre>";
echo "<br> Dạng foreach đầy đủ";
// Dạng foreach đầy đủ
if (is_array($students) && !empty($students)) {
    foreach($students as $key => $value) {
        echo "<br> Key : " . $key . " Value : " . $value;
    }
}
echo "<br> Dạng foreach rút gọn";
// Dạng foreach rút gọn chỉ lặp và xuất ra cái value
if (is_array($students) && !empty($students)) {
    foreach($students as  $value) {
        echo "<br> Value : " . $value;
    }
}

?>
