<?php
/**
 * Created by PhpStorm.
 * User: NganPTIT
 * Date: 5/14/2019
 * Time: 8:24 PM
 */
    $mang = array("le cong ngan","luong hai minh","nguyen thi duong","ahi hi");
    echo "<br>" .$mang[0];
    echo "<br>" .$mang[1];
    echo "<br>" .$mang[2];
    echo "<br>" .$mang[3];
    echo "<br> ";
    echo "<pre>";
    print_r($mang);
    echo "<pre>";
    //thay đổi giá trị của các phần tử trong mang thông qua key của nó
    $mang[0]="123";
    $mang[1]="152";
    $mang[2]="456";
    $mang[3]="789";
    echo  "<br>" .$mang[0];
    echo  "<br>" .$mang[1];
    echo  "<br>" .$mang[2];
    echo  "<br>" .$mang[3];
    //lenh in ra cấu trúc trong mảng php
    echo "<pre>";
    print_r($mang);
    echo "</pre>";
?>