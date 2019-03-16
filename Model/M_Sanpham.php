<?php
	class Sanpham extends Database
	{
		public function GET_ALL(){
			$sql = "select * from sanpham";
			$data = mysqli_query($this->ketnoi,$sql);
			$ketqua = [];
			foreach ($data as $row) {
				$ketqua[] = $row;
			}
			return $ketqua;
		}
		public function GET_Sanpham_theo_ID($id){

			$data = mysqli_query($this->ketnoi,"select * from sanpham where id_sanpham = $id");
			$row = mysqli_fetch_assoc($data);
			return $row;
		}
	}
 ?>