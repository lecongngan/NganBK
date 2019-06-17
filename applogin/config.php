<?php
/*
 * hằng số kết nối đến csdl
 */
define("DB_SEVER", "localhost");
define("DB_SEVER_USERNAME", "root");
define("DB_SEVER_PASSWORD", "");
define("DB_SEVER_NAME", "demoapplogin");
/**
 * mysqli_connect kết nối csdl
 */
$connection = mysqli_connect(DB_SEVER,DB_SEVER_USERNAME,DB_SEVER_PASSWORD,DB_SEVER_NAME);
/**
 * Kiểm tra xem kết nối đến csdl có thành công hay không
 * nếu kết nối không thành công thì ngắt kết nối đến chương trình bằng câu lệnh die()
 */
if($connection == false){
    die("ERROR Không thể kết nối đến CSDL" . mysqli_connect_error());
}