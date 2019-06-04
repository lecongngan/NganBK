<?php
class  test{
    /*
     * Những thuộc tính dc khai báo giới hạn truy cập là public
     * thì có thể truy cập mọi nơi
     * @var int
     */
    public $a = 5;

    protected $b = 7;

    private $c = 8 ;

}
class test1 extends test
{
    public function truynhapthuoctinhpubliccha()
    {
        echo "<br>" . __METHOD__ . "" . $this->a;
    }

    public function truycapthuoctinhprotectedcha()
    {
        //chỉ có thể truy nhập thuộc tính hay bằng phương pháp có giới hạn protected
        //từ các class kế thừa cha
        //ko thể truy cập từ bên ngoài class cha hay class kế thừa từ class cha
        echo "<br>" . __METHOD__ . " " . $this->b;
    }

    public function truycapthuoctinhprivatecha()
    {
        echo "<br>" . __METHOD__ . " " . $this->c;
    }
}
$t1 = new test1();
$t1->truynhapthuoctinhpubliccha();
$t1->truycapthuoctinhprotectedcha();
$t1->truycapthuoctinhprivatecha();