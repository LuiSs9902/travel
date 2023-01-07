<?php

    include 'dbconnect.php';
    if(isset($_POST['submit'])){
        $placename = $_POST['place_name'];
        $intro = $_POST['intro'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $img = $_FILES['img']['name'];

        // lay dia chi thu muc hinh anh da taotruoc do
        $target_dir = "./assest/img/place/";
        // tao duong dan truy cap den file
        $target_file = $target_dir.$img;
        //echo "da chay toi day ";
        // check cac bien luu tru thong tin dam bao chung da duoc nhap du lieu
        if(isset($placename) && isset($intro) && isset($price) && isset($discount)&&isset($img)){
            move_uploaded_file($_FILES['img']['tmp_name'],$target_file);

            // viet cau lenh sql
            $sql = "INSERT INTO `place`(`id_place`, `place_name`, `intro`, `discount`, `price`, `img`) 
            VALUES (null,'$placename','$intro','$discount','$price','$img')";
            $result = mysqli_query($conn,$sql);
            // kiemtra cau lenh truy van tra ve TRUE
            if($result == true){
                // hien thi thong bao thanh cong
                echo "<script> alert('Ban da them thanh cong') </script>";
                header("Location:index.php");
            }else{
                echo "Them san pham that bai".$sql;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./assest/css/CRUA.css"> -->
    <title>ADD PLACE</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-image: url(./assest/img/backgroundadd.png);
        }
        .addplace{
            width: 600px;
            margin: 100px auto;
        }
        h1{
            text-align: center;
            background-image: linear-gradient(70deg,rgb(63, 208, 212), rgb(247, 47, 170));
            padding: 20px 0;
            color: aliceblue;
        }
        div{
            display:flex;
            margin-bottom:20px;
        }
        label{
            width: 100px;
            color: aqua;
        }
        .title-add1{
            color: aqua;
        }
        .title-add input{
            height: 30px;
        }
        .title-add input,.title-add textarea{
            flex:1;
            border: 1px solid aqua ;
        }

        .addplace button,.addplace a{
            text-decoration: none;
            margin: 10px 50px;
            border: none;
            padding: 10px 20px;
            color: #fff;
            font-size: 15px;
            font-weight: 700;
            transition: 1.2s;
            background-image: linear-gradient(70deg,rgb(63, 208, 212), rgb(247, 47, 170));
        }
        .addplace button:hover,.addplace a:hover{
            transform: scale(1.1);

        }
        input:focus,textarea:focus{
            background-image: linear-gradient(70deg,rgb(63, 208, 212), rgb(247, 47, 170));
        }
    </style>
</head>
<body>
<h1>Thêm địa điểm</h1>

    <form class="addplace" action="" method="post" enctype="multipart/form-data">
        <div class="title-add">
            <label for="">Tên địa điểm</label>
            <input type="text" name="place_name">
        </div>
        <div class="title-add">
            <label for="">Giá</label>
            <input type="text" name="price">
        </div>
        <div class="title-add">
            <label for="">Giá giảm</label>
            <input type="text" name="discount">
        </div>
        <div class="title-add">
            <label for="">Giới thiệu</label>
            <textarea name="intro" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="title-add1">
            <label for="">Hình Ảnh </label> 
            <input type="file" name="img" id="">
        </div>
        <button type="submit" name="submit">
        Thêm Địa điểm   
        </button>
        <a href="login.php">
            Quay lại
        </a>
    </form>
</body>
</html>