<?php
    require("./dbconnect.php");
    $id = (int) $_GET['id'];
    $images = "SELECT * FROM `place` WHERE `id_place`=$id";
    $query  = mysqli_query($conn, $images);
    $row =  mysqli_fetch_array($query);
    $img = $row['img'];
    if(isset($_POST['submit'])){
        $placename = $_POST['place_name'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $intro = $_POST['intro'];
        $hinhanh = $_FILES['img']['name'];
        $target_dir = "./assest/img/place/";
        if($hinhanh){
            if (file_exists("./assest/img/place/".$img)) {
                unlink("./assest/img/place/".$img);
            }
            $target_file = $target_dir.$hinhanh;
        }else{
            $target_file = $target_dir.$img;
            $hinhanh = $img;
        }
        if(isset($placename) && isset($price) && isset($discount) && isset ($intro)&&isset($hinhanh)){
            move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);
            $sql = "UPDATE `place` SET `place_name`='$placename',`intro`='$intro',`discount`='$discount',`price`='$price',`img`='$hinhanh' WHERE `id_place`=$id";
            mysqli_query($conn, $sql);
            header("Location:index.php");
            
        }else{
            echo "suwar khoong thanhf coong";
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
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-image: url(./assest/img/backgroundadd.png);
        }
        .updateplace{
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
        .title-update1{
            color: aqua;
        }
        .title-update input{
            height: 30px;
        }
        .title-update input,.title-update textarea{
            flex:1;
            border: 1px solid aqua ;
        }

        .updateplace button,.updateplace a{
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
        .updateplace button:hover,.updateplace a:hover{
            transform: scale(1.1);
        }
        input:focus,textarea:focus{
            background-image: linear-gradient(70deg,rgb(63, 208, 212), rgb(247, 47, 170));
        }
    </style>
</head>
<body>
    
    <h1>Cập nhật địa điểm</h1>
    <form class="updateplace" action="" method="POST" enctype="multipart/form-data">
        <div class="title-update">
            <label for="ten">Tên đại điểm</label>
            <input type="text" id='place_name' name='place_name' value="<?= $row['place_name']?>">
        </div>
        <div class="title-update">
            <label for="gia">giá </label>
            <input type="number" id='price' name='price' value="<?= $row["price"]?>">
        </div>
        <div class="title-update">
            <label for="gia">Giảm giá</label>
            <input type="number" id='discount' name='discount' value="<?= $row["discount"]?>">
        </div>
        <div class="title-update">
            <img style = " height: 400px; margin-left:100px" src='./assest/img/place/<?=$row["img"]?>' alt="">
        </div>
        <div class="title-update">
                <label for="">Ảnh minh họa</label> <br>
            <input type="file" name="img" id=""><br>
        </div>
        <div class="">
            <label for="mota">Giới thiệu</label>
            <textarea name="intro" id="intro" cols="30" rows="10"><?= $row["intro"]?></textarea>
        </div>
            <button type = "submit" name="submit">Cập nhật địa điểm</button>
            <a href="index.php">Quay lại</a>
    </form>
</body>
</html>