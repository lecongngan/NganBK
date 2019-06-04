<?php
/**
 * Created by PhpStorm.
 * User: NganPTIT
 * Date: 5/30/2019
 * Time: 7:07 PM
 */
define("severname","localhost");
define("username","root");
define("password","");
define("dbname","appcrud");

$connection = mysqli_connect(severname,username,password,dbname);

/**
 * Kiểm tra kết nối đến CSDL có thành công không
 * nếu không thành công sẽ ngắt chương trình
 */
if(!$connection){
    die("ket noi csdl lỗi: " .mysqli_connect_error());
}
?>