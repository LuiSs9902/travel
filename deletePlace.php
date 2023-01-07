<?php
    require('./dbconnect.php');
    $id = (int) $_GET['id'];
    $img = "SELECT `img` FROM `place` WHERE `id_place`=$id";
    $query  = mysqli_query($conn, $img);
    $after = mysqli_fetch_assoc($query);

    if (file_exists("./assest/img/place/".$after['img'])) {
        unlink("./assest/img/place/".$after['img']);
    }
    $sql = "DELETE FROM `place` WHERE `place`.`id_place` = $id";
    mysqli_query($conn,$sql);
    header("location:index.php");
    echo "Xóa thành công";
?>