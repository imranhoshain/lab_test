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
    private $tmp_name;  
    
    
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
    
    
    public function img(){
       if($_FILES['image'])
       {   
            $this->tmp_name = addslashes(file_get_contents ($_FILES['image']['tmp_name']));            
            $this->tmp_name = $_FILES['image']['tmp_name'];
            $this->image = $_FILES['image']['name'];           
           if($this->image){
            move_uploaded_file($this->tmp_name, 'img/'.$this->image);
        }
       }
        //return $this;
    }
      
    
    public function store(){
        try {
            $this->image = $_FILES['image']['name'];
            $query = ("INSERT INTO `product`(`name`,`price`,`gender`,`detail`,`image`) VALUES(:n,:p,:g,:d,:i)");
            $stmt = $this->con->prepare($query);
            /*$stmt->bindParam(':n', $this->name, PDO::PARAM_INT);
            $stmt->bindParam(':p', $this->price, PDO::PARAM_INT);
            $stmt->bindParam(':g', $this->gender, PDO::PARAM_INT);
            $stmt->bindParam(':d', $this->detail, PDO::PARAM_INT);
            $stmt->bindParam(':i', $this->image, PDO::PARAM_STR);
            $stmt->execute($array);*/
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
    
    
    public function delete($id){
        try {
            $query = ("DELETE FROM `product` WHERE id = :id");
            $stmt = $this->con->prepare($query);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            
           /* $query = ("DELETE FROM `product` WHERE id = :id");
            $stmt = $this->con->prepare($query);
            $stmt->execute();
            $stmt->fetch();
            $image = $stmt['image'];
             unlink('view/admin/product/img/'.$this->image);            
*/
            

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