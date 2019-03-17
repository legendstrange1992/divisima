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
		public function ADD($tensanpham,$dongia,$hinh,$mota){
			$sql = "insert into sanpham(tensanpham,dongia,hinh,mota) values ('$tensanpham',$dongia,'$hinh','$mota')";
			mysqli_query($this->ketnoi,$sql);
		}
		public function GET_ALL_DESC(){
			$sql = "select * from sanpham order by id_sanpham DESC";
			$data = mysqli_query($this->ketnoi,$sql);
			$ketqua = [];
			foreach ($data as $row) {
				$ketqua[] = $row;
			}
			return $ketqua;
		}
		public function Delete_Sanpham_By_ID($id){
			$sql = "delete from sanpham where id_sanpham =  $id";
			$data = mysqli_query($this->ketnoi,$sql);
			return "success";
		}
		public function Update_Sanpham_By_ID($id,$tensanpham,$dongia,$hinh,$mota){
			$sql = "update sanpham set tensanpham ='$tensanpham',dongia=$dongia,hinh='$hinh',mota='$mota' where id_sanpham = $id";
			mysqli_query($this->ketnoi,$sql);
			return "success";
		}
	}
 ?>