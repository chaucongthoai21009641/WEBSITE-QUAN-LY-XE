<?php
    include("controller/cCongTy.php");
    $p = new CCongTy();
    $tblLoaiSP = $p->getAllCT();
    
    if(!$tblLoaiSP)
    {
        echo"Không thể kết nối";
    }
    else {
        ?>
            <h2><center>QUẢN LÝ PHÂN LOẠI</center></h2> <br>
            <div align="center">
                <table>
                    <tr>
                        <th>ID loại sản phẩm</th>
                        <th>Tên loại sản phẩm</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $dem = 0;
                    while ($r = $tblLoaiSP->fetch_assoc()) 
                    {
                        ?>
                        <tr>
                            <td><?php echo $r['IDLoaiSanPham']; ?></td>
                            <td><?php echo $r["LoaiSanPham"]; ?></td>
                            <td><a href="#"> Sửa</a> / <a href="#">Xóa</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        <?php
    }	
?>