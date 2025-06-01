<?php
    error_reporting(0);
    include("controller/cSanPham.php");
    $p = new CSanPham();
    
    // xử lý yêu cầu từ client gửi đến server 
    if(isset($_GET['Comp'])){
        $tblSP = $p -> getAllSPByCT($_GET['Comp']);
    }
    else if (isset($_GET["Search"])){
        $tblSP = $p -> searchSP($_GET["txtSearch"]);
    }
    else{
        $tblSP = $p->getAllSP();
    }
    // kiểm tra biến sản phẩm
    if (!$tblSP){
        echo " Không thể kết nối";
    }else if ($tblSP == -1){
        echo " Chưa có dữ liệu";
    }else{  
        $dem = 0;
        echo "<table>";
        echo "<tr>";
        while ($r = $tblSP->fetch_assoc()) {
            echo "<td>";

            // thêm hình ảnh vào khung
            echo "<img src='" . $r["HinhAnh"] . "' width='100px' height='80px' alt=''> " . "<br>";
            echo "<p>". $r["TenSanPham"]."</p>";
            echo "<p>". $r["Gia"]."</p>";        
            echo "</td>";
            $dem++;
            if ($dem % 5 == 0) {
                echo "</tr>";
                echo "<tr>";
            }
        }
        echo "</tr>";
        echo "</table>";
    }

?>
