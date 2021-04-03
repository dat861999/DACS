<?php 
require_once("config/db.class.php");

class Product{
	public $productID;
	public $productName;
	public $cateID;
	public $price;
	public $quantity;
	public $description;
	public $picture;

	public function __construct($pro_name, $cate_id, $price, $quantity, $desc, $picture){
		$this -> productName = $pro_name;
		$this -> cateID = $cate_id;
		$this -> price = $price;
		$this -> quantity = $quantity;
		$this -> description = $desc;
		$this -> picture = $picture;
	}
	//Lưu sản phẩm
	public function save(){
		$file_temp = $this->picture['tmp_name'];
		$user_file = $this->picture['name'];
		$timestamp = date("Y").date("m").date("d").date("h").date("i").date("s");
		$filepath = "uploads/".$timestamp.$user_file;
		if(move_uploaded_file($file_temp,$filepath)==false)
		{
			return false;
		}

		// Khởi tạo đối tượng $db với class Db từ file db.class.php
		$db = new Db();
		// Tạo biến $sql để insert sản phẩm, chạy biến này ở dưới
		$sql = "INSERT INTO product (ProductName , CateID , Price , Quantity , Description , Picture) VALUES ('$this->productName','$this->cateID','$this->price','$this->quantity','$this->description','$filepath')";
		$result = $db -> query_execute($sql);
 
		// Trả về kết quả
		return $result;
	}

	// Danh sách sản phẩm
	public static function list_product(){
		$db = new Db();
		$sql = "SELECT * FROM product";
		// select_to_array là hàm của class Db, dùng để xuất ra mảng
		$rs = $db -> select_to_array($sql);
		return $rs;
	}
	//Lấy Danh Sách Theo Loại Sản Phẩm
	public static function list_product_by_cateid($cateid)
	{
		$db = new Db();
		$sql = "SELECT * FROM product WHERE CateID=$cateid";
		$result = $db -> select_to_array($sql);
		return $result;
	}
	public static function list_product_relate($cateid, $id){
		$db = new Db();
		$sql = "SELECT * FROM product WHERE CateID='$cateid' AND productID!='$id'";
		$result = $db -> select_to_array($sql);
		return $result;
	}
	public static function get_product($id){
		$db = new Db();
		$sql = "SELECT * FROM product WHERE productID!='$id'";
		$result = $db -> select_to_array($sql);
		return $result;
	}

}
?>