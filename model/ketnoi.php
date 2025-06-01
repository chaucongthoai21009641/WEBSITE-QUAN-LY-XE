<?php
    class clsKetNoi{
        public function moketnoi(){
            return mysqli_connect('localhost','thoai','12345','webxe');
        }
        public function dongketnoi($conn){
            return $conn->close();
        }
    }
?>