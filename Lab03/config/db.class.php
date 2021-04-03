<?php 
class Db
{
	//Biến kết nối CSDL
	protected static $connection;

	//Hàm khởi tạo kết nối
	public function connect(){
        if(!isset(self::$connection)){
		$config=parse_ini_file("config.ini");
            self:: $connection= new mysqli("localhost",$config["username"],$config["password"],$config["databasename"]);
        }if(self:: $connection==false){
            return false;
        }
        return self::$connection;
		
	}
	
	//Hàm thực hiện xử lý câu lệnh truy vấn
	public function query_execute($queryString){
		//Khởi tạo kết nối
		$connection = $this -> connect();
		$connection ->query("SET NAME utf8");
		//Thực hiện execute truy vấn, query là hàm của thư viện mysqli
		$result = $connection -> query($queryString);
		// $connection -> close();
		return $result;
	}

	//Hàm thực hiện trả về một mảng danh sách kết quả
	public function select_to_array($queryString){
		$rows = array();
		$result = $this -> query_execute($queryString);
		if($result==false) return false;
		// vòng lập while dùng để xuất mảng dữ liệu ra từng phần tử
		while($item = $result -> fetch_assoc()){
			$rows[] = $item;
		}
		return $rows;
	}
}
?>