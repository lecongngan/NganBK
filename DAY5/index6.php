<?php
/**
 * Created by PhpStorm.
 * User: T3H
 * Date: 5/23/2019
 * Time: 8:05 PM
 */
class Test {
    /**
     * Những thuộc tính được khai báo giới hạn truy cập là public
     * thì có thể truy cập ở mọi nơi
     * @var int
     */
    public $a = 5;
    protected $b = 7;
    private $c = 8;
    /**
     * Chỉ có thể truy cập vào các phương thức hay các thuộc tính
     * có giới hạn truy cập private trong chính bản thân class đó
     */
    public function getC() {
        echo "<br>" . __METHOD__ . " " . $this->c;
    }
}
$t = new Test();
$t->getC();