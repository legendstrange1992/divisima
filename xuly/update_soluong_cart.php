<?php
    session_start();
    
    if( isset( $_GET['id_sanpham'])   && isset( $_GET['soluong'])  ){
        $id_sanpham = $_GET['id_sanpham'];
        $soluong  = $_GET['soluong'];
        $_SESSION['giohang'][$id_sanpham]['soluong'] = $soluong;
        $_SESSION['giohang'][$id_sanpham]['thanhtien'] = $_SESSION['giohang'][$id_sanpham]['soluong'] * $_SESSION['giohang'][$id_sanpham]['dongia'];
        $total = 0;
        foreach($_SESSION['giohang'] as $k => $v){
            $total += $v['thanhtien'];
        }
        $data = array(
            'thanhtien' => $_SESSION['giohang'][$id_sanpham]['thanhtien'],
            'total'     => $total
        );
        echo json_encode($data);
    }

 ?>