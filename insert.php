<?php
    // error_reporting(0);
    include_once 'controller/cSanPham.php';
    include_once 'controller/cCongTy.php';
    $comp = new CCongTy();
    $p = new cSanPham();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THÊM SẢN PHÂM WEBSITE XE</title>
    <link rel="stylesheet" href="styles/insert.css">
</head>

<body>
    <div class="container">
        <div class="header" style="height: 80px;">
            <b>CỬA HÀNG XE MÁY</b> 
        </div>
        <nav>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Trang Chủ</a></li>
                </ul>
            </div>
        </nav>
        <div class="content" style="text-align: center;">
			<table class="table">
				<tr>
					<td>
						<a style="font-size: 20px;" href="admin.php?comp">Quản lý phân loại</a><br><br>
						<a style="font-size: 20px; " href="admin.php?sp">Quản lý sản phẩm</a>
					</td>
                    <td>
                    <div> 
                    <h2><center>THÊM SẢN PHẨM</center></h2> <br>                   
                        <form action="#" method="post" enctype="multipart/form-data" name="form1">
                            <div style="font-size: 20px;">
                                <label>Tên sản phẩm: </label>
                                <input type="text" name="txttensp" id="txttensp">
                            </div><br>
                            <div style="font-size: 20px;">
                                <label>Giá sản phẩm: </label>
                                <input type="number" name="txtgia" id="txtgia">
                            </div><br>
                            <div style="font-size: 20px;">
                                <label>Hình ảnh: </label>
                                <input type="file" name="txtupload" id="txtupload">
                            </div><br>
                            <div style="font-size: 20px;">
                                <label>Công ty cung cấp: </label>
                                <select name="slcty" id="slcty"> <!--load ds công ty-->
                                    <?php
                                        $tblCT = $comp->getAllCT();
                                        while ($row = $tblCT->fetch_assoc()) { 
                                            echo '<option value="'.$row["IDLoaiSanPham"].'">'.$row["LoaiSanPham"].'</option>'; 
                                        }
                                    ?>
                                </select>
                            </div><br>
                            <div>
                                <input class="nut" type="submit" name="submit" id="submit" value="Thêm">
                                <input class="nut" type="reset" name="reset" id="reset" value="Nhập lại">
                            </div>
                        </form>
                    </div>
                    </td>
				</tr>
				<tr class="footer">
					<td colspan="2">CHÂU CÔNG THOẠI</td>
				</tr>
			</table>
        </div>
    </div>
</body>

</html>
<?php
        // Thêm dữ liệu vào DB
        if(isset($_REQUEST['submit']))
        {
            $ten = $_REQUEST["txttensp"];
            $gia = $_REQUEST["txtgia"];
            $cty = $_REQUEST["slcty"];
            $file = $_FILES['txtupload']['tmp_name'];
            $type = $_FILES['txtupload']['type'];
            $name = $_FILES['txtupload']['name'];
            $size = $_FILES['txtupload']['size'];
            // Gọi hàm thêm dữ liệu vào DB từ controller
            $kq = $p->uploadSP($ten, $gia, $cty, $file, $name, $type, $size);
            
            if($kq==1){
                echo "<script>alert('Thêm dữ liệu thành công')</script>";
            }elseif($kq==0){
                echo "<script>alert('Không thể insert')</script>";
            }elseif($kq==-1){
                echo "<script>alert('Không thể upload ảnh')</script>";
            }elseif($kq==-2){
                echo "<script>alert('size < 2MB')</script>";
            }elseif($kq==-3){
                echo "<script>alert('Không đúng định dạng')</script>";
            }else{
                echo "lỗi gì đó";
            }
        }
    ?>