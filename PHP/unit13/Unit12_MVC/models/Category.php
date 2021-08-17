<?php
require_once('UploadFile.php');
  // Model
  require_once('Connection.php');
  class Category{
    var $conn;

    function __construct(){
      $obj = new Connection();
      $this->conn = $obj->conn;
    }

    function getAll(){
      $sql = "SELECT id,name,thumbnail,description FROM categories WHERE parent_id is NULL";
      $results = $this->conn->query($sql);
      $categories = array();

      while($row = $results->fetch_assoc()){
        $categories[] = $row;
      }
      return $categories;
    }
     function getParentCategory(){
      $sql = "SELECT * FROM categories";
      $results = $this->conn->query($sql);
      $categories = array();

      while($row = $results->fetch_assoc()){
        $categories[] = $row;
      }
      return $categories;
    }

    
    function find($id){
      $sql = "SELECT * FROM categories WHERE id = ".$id;
      return $this->conn->query($sql)->fetch_assoc();
    }

    function update($data){
      $query = "UPDATE categories SET name = '".$data['name']."', description='".$data['description']."',thumbnail='".$data['thumbnail']."' WHERE id = ".$data['id'];
      return $this->conn->query($query);
    }
    function insert($data){
    $sql = "INSERT INTO categories (name, description, thumbnail) VALUES ('".$data['name']."', '".$data['description']."', '".$data['thumbnail']."')";
      return $this->conn->query($sql);
    }
     function delete($id){
   $query = "DELETE FROM categories WHERE id = ".$id;
      return $this->conn->query($query);
    }
  }

 ?>
