<?php
namespace App\admin\bazar;
if(!isset($_SESSION)){
    session_start();
}
use App\Connection;
use PDO;
use PDOException;
class Bazar extends Connection{
    private $id;
    private $name;
    private $price;
    private $gender;
    private $detail;
    private $image;     
    
//----------Check All Array Key-----------//   
    public function set($data = array()){
        if(array_key_exists('id',$data)){
            $this->id = $data['id'];
        }
        if(array_key_exists('name',$data)){
            $this->name = $data['name'];
        }
        if(array_key_exists('price',$data)){
            $this->price = $data['price'];
        }
        if(array_key_exists('gender',$data)){
            $this->gender = $data['gender'];
        }
        if(array_key_exists('detail',$data)){
            $this->detail = $data['detail'];
        }
        if(array_key_exists('image',$data)){
            $this->image = $data['image'];
        }         
        return $this;
    }
    
//----------Image Upload Function-----------//      
    public function upload(){
        $tmp_name = $_FILES['image']['tmp_name'];
        $img_name = $_FILES['image']['name'];
        $genName = substr(md5(uniqid()),0,10);
        $extName = explode('.',$img_name);
        $finalext = end($extName);
        $_POST['image'] = $genName.'.'.$finalext;
        move_uploaded_file($tmp_name,'img/'.$_POST['image']);
        return $_POST['image'];
    }
    
      
//----------Insert All data in Database-----------//   
    public function store(){
        try {            
            $query = ("INSERT INTO `product`(`name`,`price`,`gender`,`detail`,`image`) VALUES(:n,:p,:g,:d,:i)");
            $stmt = $this->con->prepare($query);           
            $result = $stmt->execute(array(
                ':n' => $this->name,
                ':p' => $this->price,
                ':g' => $this->gender,
                ':d' => $this->detail,
                ':i' => $this->image
            ));
            if($result){
                $_SESSION['store'] = "Data successfully Inserted";
                header ('location: index.php');
            }        
        }
        catch (PDOException $e){
            print "ERROR!:" . $e->getMessage() . "<br>";
            die();
        }
    }
    
     
//----------View All data on index page-----------//       
    public function index(){
        try {
            $query = ("SELECT * FROM `product`");
            $stmt = $this->con->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        }
        catch (PDOException $e){
            print "Error!: " . $e->getMassage() . "<br>";
            die();
        }
    }
    
//----------View Single data on index page-----------//   
    public function view($id){
        try {
            $query = ("SELECT * FROM `product` WHERE id = :id");
            $stmt = $this->con->prepare($query);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e){
            print "Error!: " . $e->getMessage() . "<br>";
            die();
        }
        
    }
    
//----------Delet Image on Folder-----------//  
    public function img_delete($id){
        try {
            $query = ("SELECT `image` FROM `product` WHERE id = :id");
            $stmt = $this->con->prepare($query);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            if(isset($data['image'])){
            unlink('img/'.$data['image']);
            }
        }
        catch (PDOException $e){
            print "Error!: " .$e->getMessage . "</br>";
            die();
        }
    }
    
//----------Delet Single data on database-----------//     
    public function delete($id){
        try {
            $query = ("DELETE FROM `product` WHERE id = :id");
            $stmt = $this->con->prepare($query);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();            
            if($stmt){
                $_SESSION['delete'] = "DATA has been DELECTED";
                header('location: index.php');
            }
        }
        catch (PDOExcepteion $e){
            print "Error!: " .$e->getMessage() . "<br>";
        }
        //return $this;
    }
    
//----------Update Single data on database-----------//  
    public function update(){
        try {
            $this->image = $_FILES['image']['name'];
            $query = ("UPDATE `product` SET `name` = :name, `price` = :price, `gender` = :gender, `detail` = :detail, `image` = :image WHERE `product`.`id` = :id;");
            $stmt = $this->con->prepare($query);
            $stmt->bindValue(':name', $this->name, PDO::PARAM_INT);         
            $stmt->bindValue(':price', $this->price, PDO::PARAM_INT);         
            $stmt->bindValue(':gender', $this->gender, PDO::PARAM_INT);         
            $stmt->bindValue(':detail', $this->detail, PDO::PARAM_INT);         
            $stmt->bindValue(':image', $this->image, PDO::PARAM_INT);         
            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);         
            $stmt->execute();
            if($stmt){
                $_SESSION['update'] = "Data update Successfully";
                header('location: index.php'); 
            }
        }
        catch (PDOException $e){
            print "ERROR!: " . $e->getMessage() . "<br>";
        }
        
    }
            
}