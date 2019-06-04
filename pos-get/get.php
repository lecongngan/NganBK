<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_GET) && !empty($_GET)){
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}
?>
<h1>Form HTML</h1>
<pre>
     lúc đầu link mặc định là http://localhost:8080/Newfolder/1901ePHP/pos-get/get.php
     khi form có metho="get" gửi dữ liệu đi thì link http://localhost:8080/Newfolder/1901ePHP/pos-get/get.php?username=admin%40gmail.com&password=123&submit=%C4%90%C4%83ng+k%C3%BD
    lúc này php sẽ đưa tên của ô in put trong form và giá trị của chúng lên trên url
</pre>
<div>
    <form name="register" action="" method="get">

        <div>
            <label>Username</label>
            <input type="text" name="username" value="" placeholder="nhập username">
        </div>

        <div>
            <label>Password</label>
            <input type="password" name="password" value="" placeholder="nhập pasword">
        </div>

        <div>
            <input type="submit" name="submit" value="Đăng ký">
        </div>

    </form>
</div>
</body>
</html>