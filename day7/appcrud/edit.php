<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<?php
/*
 * Nạp kết nối CSDL vào file này
 */
include_once "config.php";
$name = '';
$gia = '';
$tonkho = '';
$nhacungcap = '';
$ngaytao = '';
if (isset($_GET['id'])) {
    $employee_id = (int) $_GET['id'];
    $sqlSelect = "SELECT * FROM employees WHERE id = " . $employee_id;
    $result = mysqli_query($connection, $sqlSelect);
    $row = mysqli_fetch_assoc($result);
    // cú pháp rút gon của if else ( condition ? câu lênh chạy khi đk la true : câu lệnh chạy khi dk = false
    $name = isset($row['name']) ? $row['name'] : '';
    $gia = isset($row['gia']) ? $row['gia'] : '';
    $tonkho = isset($row['tonkho']) ? $row['tonkho'] : '';
    $nhacungcap = isset($row['nhacungcap']) ? $row['nhacungcap'] : '';
    $ngaytao = isset($row['ngaytao']) ? $row['ngaytao'] : '';
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa nhân viên </h1>

            <div>
                <form name="create" action="" method="post">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <label>Giá Sản Phẩm</label>
                        <input type="text" class="form-control" name="gia" value="<?php echo $gia ?>">
                    </div>
                    <div class="form-group">
                        <label>Tồn Kho</label>
                        <input type="text" class="form-control" name="tonkho" value="<?php echo $tonkho ?>">
                    </div>
                    <div class="form-group">
                        <label>Nhà cung cấp</label>
                        <input type="text" class="form-control" name="nhacungcap" value="<?php echo $nhacungcap ?>">
                    </div>
                    <div class="form-group">
                        <label>Ngày Tạo</label>
                        <input type="text" class="form-control" name="ngaytao" value="<?php echo $ngaytao ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>



</body>
</html>