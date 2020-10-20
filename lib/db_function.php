<?php
$connect = mysqli_connect('localhost', 'root', '', 'vutraining');
function MotTinNgauNhien()
{
    global $connect;
    $qr = "SELECT * FROM vutraining.tin ORDER BY RAND() LIMIT 1";
    return mysqli_query($connect, $qr);
}
function chiTietMotTin($idTin)
{
    global $connect;
    $qr = "SELECT * FROM vutraining.tin 
        WHERE idTin = $idTin 
        ORDER BY RAND() LIMIT 1";
    return mysqli_query($connect, $qr);
}
function DSMenu()
{
    global $connect;
    $qr = "SELECT * FROM `theloai`
        limit 6"; // chú ý limit số menu
    return mysqli_query($connect, $qr);
}

function tinTheo_TheLoai($idTL)
{
    global $connect;
    $qr = "SELECT * FROM `tin` 
        WHERE idTL = '$idTL'
        ORDER BY `idTin`  DESC
        limit 11";  // số tin hiện ra
    return mysqli_query($connect, $qr);
}

function TinTheoTheLoai_PhanTrang($idTL, $from, $sotin1trang)
{
    global $connect;
    $qr = "SELECT * FROM tin WHERE idTL = '$idTL' ORDER BY idTin DESC
        LIMIT $from, $sotin1trang";
    return mysqli_query($connect, $qr);
}

function timKiem_PhanTrang($tukhoa,$from,$sotin1trang){
    global $connect ;
    $qr = "SELECT * FROM tin
    WHERE TieuDe REGEXP '$tukhoa'
    ORDER BY idTin DESC 
    LIMIT $from, $sotin1trang" ;  
    // REGEXP tìm từ có từ khóa 
    return mysqli_query($connect,$qr);
}

function tenTheLoai($idTL)
{
    global $connect;
    $qr = "SELECT * FROM `theloai`
        WHERE idTL = '$idTL' ";
    return mysqli_query($connect, $qr);
}

function CapNhatSoLanXemTin($idTin)
{
    // Cập nhật số lượt xem
    global $connect;
    $qr = "UPDATE `tin` SET `SoLanXem` = (SoLanXem + 1) WHERE `tin`.`idTin` = $idTin";
    return mysqli_query($connect, $qr);
}

function tinNoiBat()
{
    global $connect;
    $qr = "SELECT * FROM `tin` 
     WHERE TinNoiBat = 1  
    ORDER BY Rand(),`tin`.`idTin`  DESC
    -- WHERE idTin >= 100 
    -- ORDER BY  RAND() ,`tin`.`idTin`  DESC
    LIMIT 5";
    return mysqli_query($connect, $qr);
}

function tinXemNhieu_index()
{
    global $connect;
    $qr = "SELECT * FROM `tin` 
    ORDER BY SoLanXem  DESC
    LIMIT 5";
    return mysqli_query($connect, $qr);
}

function tinXemNhieu_category($idTL)
{
    global $connect;
    $qr = "SELECT * FROM `tin` 
    WHERE idTL = '$idTL'  
    ORDER BY SoLanXem  DESC
    LIMIT 5";
    return mysqli_query($connect, $qr);
}

function tinXemNhieu_single($idTL)
{
    global $connect;
    $qr = "SELECT * FROM `tin` 
    WHERE idTL = '$idTL'  
    ORDER BY SoLanXem  DESC
    LIMIT 2";
    return mysqli_query($connect, $qr);
}

function tinXemNhieu_search()
{
    global $connect;
    $qr = "SELECT * FROM `tin`   
    ORDER BY SoLanXem  DESC
    LIMIT 5";
    return mysqli_query($connect, $qr);
}

function tinTieuDe1()
{
    global $connect;
    $qr = "SELECT * FROM `tin` 
    WHERE TinChinh = 1
    ORDER BY idTin DESC
    LIMIT 1";
    return mysqli_query($connect, $qr);
} 

function tinTieuDe2()
{
    global $connect;
    $qr = "SELECT * FROM `tin` 
    WHERE TinChinh = 1
    ORDER BY idTL
    LIMIT 1,5";
    return mysqli_query($connect, $qr);
}

function tinMoiNhat_duoiTinChinh13($idTL)
{
    global $connect;
    $qr = "SELECT * FROM `tin` 
    WHERE TinChinh <> 1 AND idTL = '$idTL'
    ORDER BY idTin DESC
    LIMIT 1";
    return mysqli_query($connect, $qr);
}

function tinMoiNhat_duoiTinChinh46($idTL)
{
    global $connect;
    $qr = "SELECT * FROM `tin` 
    WHERE TinChinh <> 1 AND idTL = '$idTL'
    ORDER BY idTin DESC
    LIMIT 1";
    return mysqli_query($connect, $qr);
}

function TinMoiTheoTheLoai_index($idTL)
{
    global $connect;
    $qr = "SELECT * FROM tin WHERE idTL = '$idTL' ORDER BY idTin DESC
        LIMIT 4";
    return mysqli_query($connect, $qr);
}