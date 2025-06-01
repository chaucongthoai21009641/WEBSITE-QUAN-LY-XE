<?php
    include("model/mSanPham.php");
    class CSanPham{
        public function getAllSP(){
            $p = new MSanPham();
            $tblSP = $p->selectAllSP();
            if($tblSP){
                if($tblSP->num_rows>0){
                    return $tblSP;
                }else{
                    return -1; // không có dữ liệu nào trong bảng
                }
            }else{
                return false;
            }
        }
        public function getAllSPByCT($comp){
            $p = new MSanPham();
            $tblSP = $p->selectAllSPByCT($comp);
            if($tblSP){
                if($tblSP->num_rows>0){
                    return $tblSP;
                }else{
                    return -1; // không có dữ liệu nào trong bảng
                }
            }else{
                return false;
            }
        }
        public function searchSP($name){
            $p = new MSanPham();
            $tblSP = $p->searchSP($name);
            if($tblSP){
                if($tblSP->num_rows>0){
                    return $tblSP;
                }else{
                    return -1; // không có dữ liệu nào trong bảng
                }
            }else{
                return false;
            }
        }
        // Upload ảnh và gọi hàm thêm dữ liệu từ model
        public function uploadSP($ten, $gia, $cty, $file, $name, $type, $size){
            if($type == "image/jpeg" || $type == "image/png"){
                if($size <= 2*1024*1024 ){
                    if(move_uploaded_file($file, "img/".$name)){
                        $p = new MSanPham();
                        $ins = $p->insertsp($ten, $gia, $name, $cty);
                        if($ins){
                            return 1;
                        }else{
                            return 0;
                        }
                    }else{
                        return -1;
                    }
                }else{
                    return -2;
                }
            }else{
                return -3;
            }
        }
    }        
?>