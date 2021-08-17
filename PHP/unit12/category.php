<?php
require_once('connection.php');
    class Categories {
        public $idCategory;
        public $nameCategory;
        public $descriptionCategory;
        public $imagesCategory;

        var $conn;
        function __construct(){
            $connection = new Connection();
            $this->conn= $connection->conn;
        }

        function addCategory($data){
          $sql="insert into categories(id,name,discription,images) value('"."')";
          return $this->conn->query($sql);
        }


        function deleteCategory($id){
            $sql="delete from categories where id= ".$id;
            return $this->conn->query($sql);
        }

        function getAll(){
            $sql="select * from categories";
            $result=$this->conn->query($sql);
            $list_Categories=array();
            while($row=$result->fetch_assoc()) {
                $list_Categories[]=$row;
            }
            return $list_Categories;
        }


    }

    $cate= new Categories();
    $categories= $cate->getAll();
    echo "<pre>";
    print_r($categories);
    echo "</pre>";


?>