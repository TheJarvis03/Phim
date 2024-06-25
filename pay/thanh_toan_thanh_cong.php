<?php include('../config/connect.php'); ?>
<?php
    if( isset( $_GET['ma_donhang'])){
        $ma_donhang = $_GET['ma_donhang'];


        $get_thong_tin = "SELECT * FROM don_hang WHERE ma_donhang='$ma_donhang'" ;
        $kq_get_thong_tin = mysqli_query($conn, $get_thong_tin);
        $check_ma_donhang = 0;
        if (mysqli_num_rows($kq_get_thong_tin) > 0){
            $check_ma_donhang = 1;
        }else{
            $check_ma_donhang = 0;
        }
        if( $check_ma_donhang == 1 ) {
            $ngay_batdau = date('Y-m-d');
            $ngay_ketthuc = date('Y-m-d', strtotime(date('Y-m-d')) + ( 30 * 24 * 60 * 60 ));
            // echo $ngay_batdau;
            // die();
            $cap_nhat_trangthai = "UPDATE `don_hang` SET `trang_thai`='thanh_toan_thanh_cong',`ngay_batdau`= '$ngay_batdau',`ngay_ketthuc`= '$ngay_ketthuc' WHERE ma_donhang = '$ma_donhang'";
            $sql_cap_nhat_trangthai = mysqli_query($conn, $cap_nhat_trangthai);
            echo "Thanh toán thành công đơn hàng ".$ma_donhang;
        }else{
            echo "không có đơn hàng";
        }   
        // header("location:index.php");
    }else{
        echo "không có đơn hàng";
        // header("location:index.php");
    }
?>