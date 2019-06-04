<?php
/**
 * Created by PhpStorm.
 * User: NganPTIT
 * Date: 5/23/2019
 * Time: 7:50 PM
 */
class test{
  /*
   *những thuộc tính dc khai báo giới hạn truy cập là public
   * thì có thể truy nhập ở mọi nơi
   * @var int
   */
  public $a = 5;
  public $b = 7;
  public $c = 8;

}
$t = new test();
echo "<br> " .$t->a;
// truy nhập vào thuôc tính có giới hạn truy nhập là protected
//cannot access protected property
echo "<br>" .$t->b;
?>