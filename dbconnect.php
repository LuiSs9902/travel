<?php
    // tạo ác biến lưu trữ thông tin csdl
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "travel";
    // tao cau lenh ket noi
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    // kiem tra cau lenh ket noi
    // if(!$conn){
    //     die("Ket noi that bai: ".mysqli_connect_error());
    // }
    // else{
    //     echo("Ket noi thanh cong đến travle");
    // }
?>