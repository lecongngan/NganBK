<?php
 
$phpArray = array("Nghệ an quê mình", "Hà nội đất khách", "HCM quê người");

class Student{
    public $name;
    public $age;
    public $location;

    public function __construct($name,$age,$location)
    {
        $this->name = $name;
        $this->age = $age;
        $this->location= $location;
    }

}
$minh = new Student("Lê Công Ngân", 22,"Nghệ an em ơi");
echo "<pre>";
print_r($minh);
echo "</pre>";

echo "<pre>";
print_r($phpArray);
echo "</pre>";

/**
 * chuyển đổi từ mảng và đối tượng trong PHP sang json
 */
$phpJson1 = json_encode($phpArray);
echo "<pre>";
print_r($phpJson1);
echo "</pre>";

$phpJson2 = json_encode($ngan);
echo "<pre>";
print_r($phpJson2);
echo "</pre>";
