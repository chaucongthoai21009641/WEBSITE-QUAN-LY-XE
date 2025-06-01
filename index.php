<?php
	error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANG CHỦ WEBSITE XE</title>
    <link rel="stylesheet" href="./styles/index.css">
</head>

<body>
    <div class="container">
        <div class="header"  style="font-size: 40px; background-color: rgb(244, 237, 193); color: rgb(255, 0, 0); text-shadow: 4px 4px 3px rgb(91, 89, 90);" >
            <b>CỬA HÀNG XE MÁY</b>   
        </div>
        <nav>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Trang Chủ</a></li> |
                    <li><a href="admin.php">Quản lý</a></li>
                </ul>
            </div>
            <div class="search">
                <form action="#" method="get">
                    <input type="text" name="txtSearch"  placeholder="Search...">
                    <button type="submit" value="Search" name="Search">Search</button>
                </form>
            </div>
        </nav>
        <div class="content">
            <section>
                <b>
                    <ul>
                        <li>
                            <?php
                                include("view/LoaiSanPham/index.php");
                            ?>
                        </li>
                    </ul>
                </b>      
            </section>
            <article>
                <?php
                    include("view/SanPham/index.php");
                ?>
            </article>
        </div>
        <div class="footer">
            <td>CHÂU CÔNG THOẠI</td>
        </div>
    </div>
</body>

<style>
    * {
    padding: 0;
    margin: 0;
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

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid black;
}

.menu ul {
    height : 60px;
    display: flex;
    margin-top: 30px;   
}

.menu ul li {
    font-size: 20px;
    margin-right: 20px;
    margin-left: 20px;
}

li {
    list-style: none;
}

.search, form {
    margin-right: 20px;
    justify-content: center;
    display: flex;
}

input, button{
    padding: 4px;
    border: 1px solid #ccc;
    border-radius: 5px 0 0 5px;
    font-size: 16px;
    outline: none;
}

button:hover {
    background-color: #6c696a;
}
section {
    width : 20%;
    float : left;
}
section ul {
    display: flex;
    flex-direction: column;
    justify-content: center; 
    align-items: center; 
}
section ul li:first-child {
    margin-top: 220px;
}
section ul li {
    margin-bottom: 20px;
}
section ul li a {
    font-size: 30px;
    text-decoration: none;
    color: black;
}

section ul li a:hover{
    color: red;
}

article {
    border-left:1px solid black;
    float : left;
    width: 75%;
    height: 900px;
    padding: 10px;
}

table {
    padding: 20px;
}
table tr td {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-left: 30px;
    margin-bottom :6px ;
}
table tr {
    display: flex; 
}

.nameProduct, .priceProduct {
    text-align: center;
}

.footer {
    clear: both;
    font-size: 25px;
    text-align: center;
    height: 60px;
    border: 1px solid black;
    padding-top: 30px;
    background-color: rgb(244, 237, 193);
}
</style>
</html>
