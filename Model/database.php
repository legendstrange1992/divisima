<?php
	class Database {
		protected $host = 'localhost';
		protected $user = 'root';
		protected $password = '';
		protected $database_name = 'divisima';
		protected $ketnoi = '';
		public function __construct(){
			$this->ketnoi = mysqli_connect($this->host,$this->user,$this->password,$this->database_name);
			mysqli_set_charset($this->ketnoi,'utf8');
		}
	}
 ?>