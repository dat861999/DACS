<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng Nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/core-img/logomedial.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.php"><img src="img/core-img/logomedial.png"width="30px" alt=""><b style="font-size: 20px;">       YourDocTor</b></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <!--Unordered List-->
                        <ul>
                            <!--List Item-->
                            <li><a href="#"style="font-size:100%;"> Dịch vụ</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <div style="background-color: #33CCFF;">
                                        <li class="title"style="font-size:15px"padding-bottom="100px"><img src="img/core-img/DichVu.png"width="40px"alt=""><b>         Gói Dịch Vụ Y Tế</b>
                                        
                                        
                                        <p style="font-size: 15px;color: black;">
                                            "Dịch Vụ Chăm Sóc Sức Khỏe Của YourDoctor"

                                        </p>
                                        </b>
                                        </li></div>
                                        <li><a href="GoiXNTQ.php"style="font-size: 15px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><img src="img/core-img/TongQuat.png"width="30px" alt=""><b>     Gói Khám Tổng Quát</b></a></li>
                                        <li><a href="CSTNTD.php"style="font-size: 15px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><img src="img/core-img/Chamsoc.png"width="30px" alt=""><b>      Chăm Sóc Tận Nơi</b></a></li> 
                                        <li><a href="DichVu.php"style="font-size: 15px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><img src="img/core-img/DichVuPhoBien.png"width="30px" alt=""><b>         Danh Mục Dịch Vụ Phố Biến</b></a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <div style="background-color: #33ccff;">
                                        <li class="title"style="font-size:15px"><img src="img/core-img/LienHeBs.png"width="40px" alt=""><b>Liên Hệ Trực Tiếp Với Bác Sĩ</b>
                                            <p style="font-size: 15px;color: black;">
                                                "Đặt Lịch Hẹn với Bác Sĩ Mà Bạn Mong Muốn Tại Phòng Khám Hoắc ở Chính Nhà Bạn"
                                        </li></div>
                                        <li><a href="PhatTrien.php" style="font-size: 15px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><img src="img/core-img/KhoaN.png"width="25px" alt=""><b>   Khoa Nội</b></a></li>
                                        <li><a href="PhatTrien.php" style="font-size: 15px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><img src="img/core-img/KhoaNgoai.png"width="25px" alt=""><b>   Khoa Ngoại</b></a></li> 
                                        <li><a href="PhatTrien.php" style="font-size: 15px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><img src="img/core-img/KhoaTam.png"width="25px" alt=""><b>  Khoa Tâm Thần</b></a></li>
                                        <li><a href="PhatTrien.php" style="font-size: 15px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><img src="img/core-img/KhoaYhoc.png"width="25px" alt=""><b>   Khoa Y Học Cổ Truyền</b></a></li>
                                        <li><a href="PhatTrien.php" style="font-size: 15px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><img src="img/core-img/kid.png"width="25px" alt=""><b>     Khoa Nhi</b></a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <div style="background-color: #33ccff;">
                                            <li class="title"style="font-size:15px"><img src="img/core-img/HoiDaps.png"width="40px" alt=""><b>Hỏi đáp
                                                <p style="font-size: 15px;color: black;">
                                                    "Bạn Thắc Mắc gì Về chúng tôi ? , Hay Bạn Muốn Đặt Câu Hỏi Online Cho Bác Sĩ ? "
                                            </li></div>
                                                <li><a href="PhatTrien.php" style="font-size: 15px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><img src="img/core-img/logomedial.png"width="25px" alt=""><b>             YourDocTor</b></a></li>
                                                <li><a href="PhatTrien.php" style="font-size: 15px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><b>Hỏi Đáp Với Bác Sĩ</b></a></li>
                                                <li><a href="PhatTrien.php" style="font-size: 15px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><b>Tin Tức Y Tế</b></a></li>
                                        
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bk1.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="PhatTrien.php"style="font-size:100%;">Xem Kết Quả</a>
                                
                            </li>
                            <li><a href="lienhe.php"style="font-size:100%;">Liên Hệ</a></li><li><a href="DangNhap.php"style="font-size:100%;">Đăng Nhập</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="hoidap.php" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Tra Cứu Bệnh Án">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <!-- User Login Info -->
                <!-- Cart Area -->
            </div>

        </div>
    </header>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/bg-img/bkav.jpg');">
			<div class="wrap-login100">
				<form action = '' class="login100-form validate-form">
					<span class="login100-form-logo">
						<img src="img/core-img/logomedial.png"width="70px" alt="">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="email" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="SDT" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
                    <?php 
                        if (isset($_SESSION[ 'error'] ) ){
                            echo '<div class="alert alert-danger" role="alert"style = "text-align : center">
                        
                            Đăng Nhập Thất Bại
                          </div>
                          ';
                        }
                    ?>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<input type = 'submit' value = 'Login' class="login100-form-btn">
						
                        
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
                <?php
                
if ($_REQUEST){                
$Tk = $_REQUEST['email'];
$MK = $_REQUEST['SDT'];

$username = "root";
$password = "";
$database = "yte";
$mysqli = new mysqli("localhost", $username, $password, $database);

$query = "SELECT * FROM hoadon";
// echo($_REQUEST['email']); 
// echo($_REQUEST['sdt']);

if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc())
    {
        
        $field1name = $row["DiaChiMail"];
        $field2name = $row["SDT"];
        
        if($field1name==$Tk && $field2name==$MK) {
            if ($field1name == "admin@gmail.com"){
                echo "<script type='text/javascript'>window.top.location='admin.php';</script>"; exit;
            }
                else
                {
            echo "<script type='text/javascript'>window.top.location='ThongTinKhachHang.php".'?id='.$row['ID']."';</script>"; exit;
                }
        }
        else
        {
            $_SESSION[ 'error'] = 'Dang nhap that bai';
        }

        
        // else
        // {
        //     echo $row["HoVaTen"]."-"."không có";
        //     echo '<br>';
        // }
        // echo '<h1>'.$field1name."   ".$field2name.'</h1><br/>';
    }
}

}

/*freeresultset*/    
?>

               			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
    
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>


</body>
</html>

