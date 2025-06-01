<?php
	error_reporting(0);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>QUẢN LÝ WEBSITE XE</title>
<link rel="stylesheet" href="./styles/admin.css">
</head>

<body>
	<div class="container">
			<div class="header"  style="height: 80px; font-size: 40px; background-color: rgb(244, 237, 193); color: rgb(255, 0, 0); text-shadow: 4px 4px 3px rgb(91, 89, 90);" >
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
						<?php
							if(isset($_REQUEST["sp"]))
							{
								
								
								include_once 'view/QuanLy/QuanLySP.php';
							}
							elseif(isset($_REQUEST["comp"]))
							{
								include_once 'view/QuanLy/QuanLyCT.php'	;
							}
							else
							{
								echo "CHỌN MỤC CẦN QUẢN LÝ ";
							}
						?>
					</td>
				</tr>
				<tr class="footer">
					<td colspan="2">CHÂU CÔNG THOẠI</td>
				</tr>
			</table>
        </div>
    </div>
</body>
<style>
	* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.container {
    max-width: 960px;
    margin : 0 auto;
    border : 1px solid black;
}

.header {
    height: 80px;
    text-align: center;
    font-size: 40px;
    padding-top: 20px;
    border-bottom: 1px solid black;
    background-color: rgb(244, 237, 193);
    color: rgb(255, 0, 0);
    text-shadow: 4px 4px 3px rgb(91, 89, 90);
}

.menu{
    height : 50px;
    text-align: center;
    font-size: 20px;
    border-bottom: 1px solid black;
    margin-top: 20px;
}

.menu li{
    list-style-type: none;
}

.table{
    margin: auto; 
    text-align: center;
    width: 960px
}

#article,th,td{
    border: 1px solid black;
    text-align: center;
    padding: 8px;
}

a{
    text-decoration: none;
}
.footer{
    font-size: 25px; 
    height: 60px; 
    border: 1px solid black;
	padding-top: 30px;
    background-color: rgb(244, 237, 193);
}


</style>

</html>