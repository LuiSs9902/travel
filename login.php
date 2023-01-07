<?php
    session_start();

    if(isset($_SESSION['user'])){
        header('location: index.php');
    }

    if(isset($_POST['dangnhap'])){
        $user = $_POST['username'];
        $password = $_POST['password'];

        if($user == 'admin' && $password == 'admin123'){
            $_SESSION['user'] = $user;
            header('Location: index.php');
        }
        else{
            echo "tài khoản hoặc mật khẩu sai";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assest/css/style.css">
</head>
<body>
    <div id="wrapper">
        <form action="login.php" method="post">
            <h3>Đăng Nhập</h3>
            <div class="form-group">
                <label for="">Usename</label>
                <input type="text" name="username">
            </div>
            <div class="form-group">
                <label for="">Mật Khẩu</label> 
                <input type="password" name="password">
            </div>
            <input type="submit" name="dangnhap" value="Đăng Nhâp" id="btn-login">
        </form>
    </div>
</body>
</html>
