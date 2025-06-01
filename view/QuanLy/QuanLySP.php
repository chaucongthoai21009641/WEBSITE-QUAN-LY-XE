<?php
    include("controller/cSanPham.php");
    $p = new CSanPham();
    $tblSP = $p->getAllSP();

    // Kiểm tra biến sản phẩm
    if(!$tblSP)
    {
        echo"Không thể kết nối";
    }
    else {
        ?>
        <h2><center>QUẢN LÝ SẢN PHẨM</center></h2> <br>
        <h3><a href="insert.php">Thêm sản phẩm</a></h3>; 
        <table>
            <tr>
                <th>ID sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Giá bán</th>
                <th>ID loại sản phẩm</th>
                <th>Action</th>
            </tr>
        <?php
        $dem = 0;
        while ($r = $tblSP->fetch_assoc()) 
        {
            ?>
                <tr>
                    <td><?php echo $r['IDSanPham']; ?></td>
                    <td><?php echo $r['TenSanPham']; ?></td>
                    <td><img src='<?php echo $r["HinhAnh"]; ?>' width='100px' height='80px alt=''></td>
                    <td><?php echo $r['Gia']; ?></td>
                    <td><?php echo $r['IDLoaiSanPham']; ?></td>
                    <td><a href="#"> Sửa</a> / <a href="#">Xóa</a></td>
                </tr>
            <?php
        }
        ?>
        </table>
        <?php 
    }
?>