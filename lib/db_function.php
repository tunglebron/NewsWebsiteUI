<?php
    $connect = mysqli_connect('localhost', 'root', '', 'vutraining');
    function MotTinNgauNhien() {
        global $connect;
        $qr = "SELECT * FROM vutraining.tin ORDER BY RAND() LIMIT 1";
        return mysqli_query($connect,$qr);
    }
    function chiTietMotTin($idTin) {
        global $connect;
        $qr = "SELECT * FROM vutraining.tin 
        WHERE idTin = $idTin 
        ORDER BY RAND() LIMIT 1";
        return mysqli_query($connect,$qr);
    }
    function DSMenu(){
        global $connect;
        $qr = "SELECT * FROM `theloai`
        limit 6"; // chú ý limit số menu
        return mysqli_query($connect,$qr);
    }

    function tinTheo_TheLoai($idTL){
        global $connect;
        $qr = "SELECT * FROM `tin` 
        WHERE idTL = '$idTL'
        ORDER BY `idTin`  DESC
        limit 10";  // số tin hiện ra
        return mysqli_query($connect,$qr);
    }

    function TinTheoTheLoai_PhanTrang($idTL,$from,$sotin1trang) {
        global $connect;
        $qr = "SELECT * FROM tin WHERE idTL = '$idTL' ORDER BY idTin DESC
        LIMIT $from, $sotin1trang"; 
        return mysqli_query($connect,$qr);
    }

    function tenTheLoai($idTL){
        global $connect;
        $qr = "SELECT * FROM `theloai`
        WHERE idTL = '$idTL' " ;
        return mysqli_query($connect,$qr);
    }

    function CapNhatSoLanXemTin($idTin){
        // Cập nhật số lượt xem
        global $connect;
        $qr = "UPDATE `tin` SET `SoLanXem` = (SoLanXem + 1) WHERE `tin`.`idTin` = $idTin" ;
        return mysqli_query($connect,$qr);
    }

?>