<?php

include("controller/cCongTy.php");

$p = new CCongTy();

$tblProductType = $p->getAllCT();

if ($tblProductType == false) {
    echo "Không thể kết nối"; 
} else {
    $numRows = $tblProductType->num_rows;

    if ($numRows == 0) {
        echo "chưa có dữ liệu";
    } else {
        $dem = 0;
        while ($r = $tblProductType->fetch_assoc()) {
            echo "<li> <a href='index.php?Comp=".$r["IDLoaiSanPham"]."'>".$r["LoaiSanPham"]."</a>";
            $dem++;
            if ($dem % 5 == 0) {
               echo " </li>";
            }
        }
    }
}

?>