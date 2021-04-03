<?php 
require_once("entities/product.class.php");
require_once("entities/category.class.php");

if(isset($_POST["btnsubmit"])){
	//Lấy giá trị từ form
	$productName = $_POST["txtname"];
	$cateID = $_POST["txtcateID"];
	$price = $_POST["txtprice"];
	$quantity = $_POST["txtquantity"];
	$description = $_POST["txtdesc"];
	$picture = $_FILES["txtpic"];
	//Khởi tạo đối tượng product
	$newProduct = new  Product($productName, $cateID, $price, $quantity, $description,$picture);
	echo "<script>console.log($result);</script>";
	
	// Lưu xuống CSDL	
	$result = $newProduct->save();
	if(!$result){
		//Truy vấn lỗi
		header("Location: add_product.php?status=failure");
		
	}else{
		header("Location: add_product.php?status=inserted");
	}
}
?>
<?php require 'header.php'; ?>
<?php
	if(isset($_GET["status"])){
		if ($_GET["status"] == 'inserted') {
			echo "<h2>Thêm sản phẩm thành công.</h2>";
		}else{
			echo "<h2>Thêm sản phẩm thất bại.</h2>";	
		}
	}
?>
	<!-- Form Thêm sản phẩm -->
	<form method="POST" enctype="multipart/form-data">
		<!-- Tên sản phẩm -->
		<div class="row">
			<div class="lbltitle">
				<label>Tên sản phẩm</label>
			</div>
			<div class="lblinput">
				<input type="text" name="txtname" value="<?php echo isset($_POST["txtname"]) ? $_POST["txtname"] : "" ?>">
			</div>
		</div>
		<!-- Mô tả sản phẩm -->
		<div class="row">
			<div class="lbltitle">
				<label>Mô tả sản phẩm</label>
			</div>
			<div class="lblinput">
				<textarea type="text" name="txtdesc" cols="21" rows="10" value="<?php echo isset($_POST["txtdesc"]) ? $_POST["txtdesc"] : "" ?>"></textarea>
			</div>
		</div>
		<!-- Số lượng sản phẩm -->
		<div class="row">
			<div class="lbltitle">
				<label>Số lượng sản phẩm</label>
			</div>
			<div class="lblinput">
				<input type="number" name="txtquantity" value="<?php echo isset($_POST["txtquantity"]) ? $_POST["txtquantity"] : "" ?>">
			</div>
		</div>
		<!-- Giá sản phẩm -->
		<div class="row">
			<div class="lbltitle">
				<label>Giá sản phẩm</label>
			</div>
			<div class="lblinput">
				<input type="number" name="txtprice" value="<?php echo isset($_POST["txtprice"]) ? $_POST["txtprice"] : "" ?>">
			</div>
		</div>
		<!-- Loại sản phẩm -->
		<div class="row">
			<div class="lbltitle">
				<label>Loại sản phẩm</label>
			</div>
			<div class="lblinput">
			<select name="txtcateID">
					<option value="" selected>-- Chọn loại --</option>
					
					<?php 	
					$cates = Category::list_category();
					foreach ($cates as $item) {
					echo "<option value=".$item['CateID'].">".$item['CategoryName']."</option>";
					}
					?>
				</select>
				
			</div>
		</div>
		<!-- Hình Ảnh -->
		<div class="row">
			<div class="lbltitle">
				<label>Url Hình ảnh</label>
			</div>
			<div class="lblinput">
				<input type="file" name="txtpic" accept=".PNG,.GIF,.JPG,.JPGEG">
			</div>
		</div>
		<div class="row">
			<div class="lbltitle">
				   Click thêm
			</div>
			<div class="submit">
				<button type="submit" name="btnsubmit">Thêm sản phẩm</button>
				
			</div>
		</div>
	</form>
	

<!-- Footer -->
<?php require 'footer.php'; ?>

