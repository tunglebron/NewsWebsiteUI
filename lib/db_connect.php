<?php
    //khai báo biến host
$hostName = 'localhost';
// khai báo biến username
$userName = 'root';
//khai báo biến password
$passWord = '';
// khai báo biến databaseName
$databaseName = 'vutraining';
// khởi tạo kết nối
$connect = mysqli_connect($hostName, $userName, $passWord, $databaseName);
//Kiểm tra kết nối
if (!$connect) {
    die('Không thể kết nối: ' . mysqli_error($conn));
    exit();
   }
//    echo 'Kết nối CSDL thành công';
    
?>