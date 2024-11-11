<?php
    class DanhMuc
    {
        public $conn;
        public function __construct()
        {
            $this->conn = connectDB();
        }
        public function getAllDanhMuc()
        {
            try {
                
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
    }
?>