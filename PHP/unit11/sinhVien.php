<?php
    class sinhVien{
        public $hoTen;
        public $gioiTinh;
        public $ngaySinh;
        public $queQuan;


        function setHoTen($hoTen){
            $this.$hoTen=$hoTen;
        }
        function getHoTen(){
            return $this->hoTen;
        }

        function setGioiTinh($gioiTinh){
            $this.$gioiTinh=$gioiTinh;
        }
        function getGioiTinh(){
            return $this->hoTen;
        }


        function setNgaySinh($ngaySinh){
            $this.$ngaySinh=$ngaySinh;
        }
        function getNgaySinh(){
            return $this->ngaySinh;
        }


        function setQueQuan($queQuan){
            $this.$queQuan=$queQuan;
        }
        function getQueQuan(){
            return $this->queQuan;
        }



    }

?>