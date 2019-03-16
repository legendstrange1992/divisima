<?php
	class Chitietdonhang extends Database
	{
		public function ADD($id_sanpham,$hinh,$tensanpham,$soluong,$dongia,$thanhtien,$id_donhang){
            $sql = "insert into chitietdonhang(id_sanpham,hinh,tensanpham,soluong,dongia,thanhtien,id_donhang) values 
            ($id_sanpham,'$hinh','$tensanpham',$soluong,$dongia,$thanhtien,$id_donhang)";
            mysqli_query($this->ketnoi,$sql);
            return 'success';
        }
	}
 ?>