<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
include_once "config.php";
$sqlselect = "SELECT * FROM employees";
/**
 * mysqli_query(tham số 1, tham số 2) là hàm thực hiện câu query mysql
 * tham số 1 chính là biến kết nối CSDL $connection
 * tham số 2 chính là câu query sql
 */
$result = mysqli_query($connection,$sqlselect);
/**
 * In ra biến $result
 * mysqli_result Object
[current_field] => 0
[field_count] => 4
[lengths] =>
[num_rows] => 0
[type] => 0
)
 */
/**
 * mysqli_num_rows() truyền vào tham số của hàm mysqli_query()
 * được sử dụng để đếm số bản ghi trả về của câu SQL
 */
//if (mysqli_num_rows($result)>0){
//    while ($row = mysqli_fetch_assoc($result)){
//
//    }
//}else{
//    echo "<br> ko có bản ghi nào trong csdl";
//}
//
//?>
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <table class="table">
            <div class="col-md-12">
                <div style="margin:30px">
                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-success">thêm mới nhân viên</a>
                </div>
                <thead>

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Giá Tiền</th>
                    <th scope="col">Tồn kho</th>
                    <th scope="col">Nhà cung cấp</th>
                    <th scope="col">Ngày tạo</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>
                <?php

                if (mysqli_num_rows($result)>0){
                while ($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <th scope="col"><?php echo $row['id'] ?></th>
                    <th scope="col"><?php echo $row['name'] ?></th>
                    <th scope="col"><?php echo $row['gia'] ?></th>
                    <th scope="col"><?php echo $row['tonkho'] ?></th>
                    <th scope="col"><?php echo $row['nhacungcap'] ?></th>
                    <th scope="col"><?php echo $row['ngaytao'] ?></th>
                    <th >
                        <div>
                            <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id'] ?>">sửa nhân viên</a>
                        </div>
                        <div>
                            <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>">xóa nhân viên</a>
                        </div>
                    </th>
                </tr>
                <?php }
                }else{
                echo "<br> ko có bản ghi nào trong csdl";
                }
                ?>
<!--                <tr>-->
<!--                    <th scope="row">1</th>-->
<!--                    <td>Mark</td>-->
<!--                    <td>Otto</td>-->
<!--                    <td>@mdo</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th scope="row">2</th>-->
<!--                    <td>Jacob</td>-->
<!--                    <td>Thornton</td>-->
<!--                    <td>@fat</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th scope="row">3</th>-->
<!--                    <td>Larry</td>-->
<!--                    <td>the Bird</td>-->
<!--                    <td>@twitter</td>-->
<!--                </tr>-->
                </tbody>
        </table>
    </div>
</div>
</div>
</body>
</html>