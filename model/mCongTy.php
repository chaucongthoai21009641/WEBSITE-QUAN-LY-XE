<?php
    include_once("ketnoi.php");
    class MCongTy{
        public function SelectAllCT(){
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from loaisanpham";
                $tblCT = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblCT;
            }else{
                return false;
            }
        }
    }
?>