<?php
session_start();
/**
 * Nếu đã tồn tại session hoặc đã đăng nhập
 */
if(isset($_SESSION["loggedin"]) && ($_SESSION["loggedin"] == true )){
    header("Location: index.php");
    exit();
}
/**
 * Nạp file kết nối CSDL
 */
include_once "config.php";
// tạo biến lưu trữ lỗi trong quá trình đăng nhập
$errors = array();
/**
 * Xử lý đăng nhập
 */
if(isset($_POST) && !empty($_POST)){
    if(empty($_POST["username"]) || !isset($_POST["username"])) {
        $errors[] = "Chưa nhập username";
    }
    if(empty($_POST["password"]) || !isset($_POST["username"])) {
        $errors[] = "Chưa nhập password";
    }
    /**
     * Nếu mảng error bị rỗng tức là k có lỗi
     */
    if(is_array($errors) && empty($errors)) {
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        $sqlLogin = "SELECT * FROM users WHERE username = ? AND password = ?";
        //Chuẩn bị cho phần SQL
        $stmt = $connection-> prepare($sqlLogin);
        // Bind 3 biến vào câu sql
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        //Lấy ra bản ghi
        $res = $stmt->get_result();
        $row = $res->fetch_array(MYSQLI_ASSOC);
        if(isset($row['id']) && ($row['id'] > 0)) {
            /**
             * Nếu tồn tại bản ghi
             * thì sẽ tạo session đăng nhập
             */
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $row['username'];
            header("Location: index.php");
            exit();
        }
        else {
            $errors[] = "Dữ liệu đăng nhập không đúng";
        }
    }
    if (is_array($errors) && !empty($errors)){
        $errors_string = implode("<br>", $errors);
        echo "<div class='alert alert-danger'>";
        echo $errors_string;
        echo "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container" style="margin-top: 150px">
    <div class="row">
        <div class="col-md-12">
            <h1> Đăng nhập</h1>
            <form name="login" action="" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label >Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <p><a href="register.php">Đăng ký</a> </p>
                </div>
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>