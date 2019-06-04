<?php
class Test {
    /**
     * Những thuộc tính được khai báo giới hạn truy cập là public
     * thì có thể truy cập ở mọi nơi
     * @var int
     */
    public $a = 5;
    protected $b = 7;
    private $c = 8;
    public function methoda() {
        echo "<br>" . __METHOD__;
    }
    protected function methodb() {
        echo "<br>" . __METHOD__;
    }
    private  function methodc() {
        echo "<br>" . __METHOD__;
    }
}
class Test1 extends  Test {
    public function truycapphuongthucpubliccha() {
        echo "<br>" . __METHOD__ . " " . $this->methoda();
    }
    public function truycapphuongthucprotectedcha() {
        // chỉ Có thể truy cập vào thuộc tính hoặc phương thức có giới hạn là protected
        // từ các class kế thừa của class cha
        // không thể truy cập từ bên ngoài class cha hoặc class kế thừa từ class cha
        echo "<br>" . __METHOD__ . " " . $this->methodb();
    }
    public function truycapphuongthucprivatecha() {
        echo "<br>" . __METHOD__ . " " . $this->methodc();
    }
}
$t1 = new Test1();
$t1->truycapphuongthucpubliccha();
$t1->truycapphuongthucprotectedcha();
$t1->truycapphuongthucprivatecha();
/**
 * chỉ có thể truy cập vào các thuộc tính và method protected từ bên trong class kế thừa của nó
 * chỉ có thể truy cập vào các thuộc tính và method private trong chính bản thân class đó
 * phương thức và thuộc tính public thì có thể truy cập ở mọi nơi
 */