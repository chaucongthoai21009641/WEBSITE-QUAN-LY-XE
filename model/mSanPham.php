<?php
    include_once("ketnoi.php");
    class MSanPham{
        public function SelectAllSP(){
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from sanpham order by IDSanPham DESC";
                $tblSP = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblSP;
            }else{
                return false;
            }
        }
        public function SelectAllSPbyCT($comp){
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from sanpham where IDLoaiSanPham = $comp";
                $tblSP = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblSP;
            }else{
                return false;
            }
        }
        public function SearchSP($name){
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from sanpham where TenSanPham Like N'%$name%'";
                $tblSP = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblSP;
            }else{
                return false; 
            }
        }
        // Thêm dữ liệu vào bảng sản phẩm trong MySQL
        public function insertsp ($ten, $gia, $hinh, $cty){
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "insert into sanpham (TenSanPham, Gia, IDLoaiSanPham, HinhAnh) values('$ten', '$gia', '$cty', 'img/$hinh')";
                $tblSP = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblSP;
            }else{
                return false; 
            }
        }
    }
?>