<?php
class basephone
{
    public $name;
    public $model;
    public $manufacture;

    public function __construct($name, $manufacture, $model)
    {
        $this->name;
        $this->model;
        $this->manufacture = $manufacture;
    }

    /*
     * gửi tin nhắn
     */
    public function sendsms($phone)
    {
        echo "<br>" . __METHOD__ . " " . $phone;
    }

//nhân tin nhắn
    public function receiveSmS($phone)
    {
        echo "<br>" . __METHOD__ . " " . $phone;
    }

//gọi điện
    public function callnumber($phone)
    {
        echo "<br>" . __METHOD__ . " " . $phone;
    }

//nhận cuộc gọi
    public function receivenumber($phone)
    {
        echo "<br>" . __METHOD__ . " " . $phone;
    }
}
/*
 * class smart phone kế thừa từ class base phone
 * extends = kế thừa từ 1 class cha
 * khi 1 class kế thừa từ 1 class cha
 * class con sẽ tự động có tất cả các thuộc tính và phương thức public hay protected của class cha
 * classsmartphone
 */
class smartPhone extends basephone
{
    public function __construct($name, $manufacture, $model)
    {
        //gọi đến hàm khoi tạo class cha
        parent::__construct($name, $manufacture, $model);
    }

    public function sendemail($address_email)
    {
        echo "<br>" . __METHOD__ . "" .$address_email;
    }
    public function facebook($accuont)
    {
        echo "<br>" . __METHOD__ . " " .$accuont;
    }
    public function playgame($game_name)
    {
        echo "<br>" . __METHOD__ . "" . $game_name;
    }
}
$samsungs10 = new smartPhone('samsung galaxu s10','s10','samsung');

$samsungs10 ->sendsms('0977489325');
$samsungs10 ->facebook('hayvl85');
echo "<pre>";
print_r($samsungs10);
echo "</pre>";