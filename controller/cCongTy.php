<?php
    include("model/mCongTy.php");
    class CCongTy{
        public function getAllCT(){
            $p = new MCongTy();
            $tblCT = $p->selectAllCT();
            if($tblCT){
                if($tblCT->num_rows>0){
                    return $tblCT;
                }else{
                    return -1; // không có dữ liệu nào trong bảng
                }
            }else{
                return false;
            }
        }
    }
?>