<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/site.css" rel="stylesheet"/>
    <title>xếp loại kết quả tuyển sinh</title>
</head>
<body>
    <div id="wrapper">
    <h2>xếp loại kết quả tuyển sinh</h2>
    <form action="#" method="post">
        <div class="row">
            <div class="lbltitle">
                <label>điểm môn toán</label>
            </div>
            <div class="lblinput">
                <input type="number" name="Toan" value="<?php echo isset($_POST["Toan"])?$_POST["Toan"] : "" ; ?>"/>   
            </div>
        </div>

        <div class="row">
            <div class="lbltitle">
                <label>điểm môn lý</label>
            </div>
            <div class="lblinput">
                <input type="number" name="Ly" value="<?php echo isset($_POST["Ly"])?$_POST["Ly"] : "" ; ?>"/>   
            </div>
        </div>
        <div class="row">
            <div class="lbltitle">
                <label>điểm môn hóa</label>
            </div>
            <div class="lblinput">
                <input type="number" name="Hoa" value="<?php echo isset($_POST["Hoa"])?$_POST["Hoa"] : "" ; ?>"/>   
            </div>
        </div>
        <div class="row">
            <div class="lbltitle">
                <label>Chọn Khu Vực</label>
            </div>
            <div class="lblinput">
                <select name="KhuVuc">
                    <option value="" selected>--Chọn Khu Vực--</option>
                    <option value="1"> Khu Vực 1</option>
                    <option value="2"> Khu Vực 2</option>
                    <option value="3"> Khu Vực 3</option>
                    <option value="4"> Khu Vực 4</option>
                    <option value="5"> Khu Vực 5</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="submit">
                <input type="submit" name="btnsubmit" value="xếp loại"/>
            </div>
        </div>    
    </form>
    <div id="result">
        <h2>Kết quả xếp loại</h2>
        <div class="row">
            <div class="lbltitle">
                <label>Tổng Điểm</label>
            </div>
            <div class="lbloutput">
                <?php
                echo isset($_POST["btnsubmit"])? $_POST["Toan"]+$_POST["Ly"]+$_POST["Hoa"]:"";
                ?>
            </div>        
        </div>
        <div class="row">
            <div class="lbltitle">
                <label>Xếp Loại</label>
            </div>
            <div class="lbloutput">
                <?php
                if(isset($_POST["btnsubmit"])){
                    $TongDiem =  $_POST["Toan"]+$_POST["Ly"]+$_POST["Hoa"];
                    if($TongDiem>=24)
                        echo "Giỏi";
                    elseif ($TongDiem >=21)
                        echo "Khá";
                    elseif ($TongDiem >= 15)
                        echo "Trung Bình";
                    else {
                        echo "Yếu";
                    }
                }
                ?>
            </div>        
        </div>
        <div class="row">
            <div class="lbltitle">
                <label>Điểm Ưu Tiên</label>
            </div>
            <div class="lbloutput">
                <?php
                    if(isset($_POST["btnsubmit"]))
                    {
                        $DiemUUTien = empty($_POST["KhuVuc"]) ? 0 :$_POST["KhuVuc"];
                        switch($DiemUUTien){
                            case 0:
                            case 4:
                            case 5:
                                echo "0";
                                break;
                            case 1:
                            case 2:
                                echo "5";
                                break;
                            case 3:
                                echo " 3";
                                break;
                            default:
                                break;
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    
    </div>
</body>
</html>
