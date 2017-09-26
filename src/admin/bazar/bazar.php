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
    //private $img_name;
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
         if(array_key_exists('tmp_name',$data)){
            $this->tmp_name = $data['tmp_name'];
        }
        return $this;
    }
    
    public function img(){
       if($_FILES['image'])
       {   
          $_POST['image'] = $_FILES['image']['name'];
            $this->tmp_name = $_FILES['image']['tmp_name'];
            $this->image = $_FILES['image']['name'];
           if($_POST['image'] == $this->image){
            move_uploaded_file($this->tmp_name, '../../../img/'.$this->image);
        }
       }
        return $this;
    }
      
    public function store(){
        try {
            $query = ("INSERT INTO `product`(`name`,`price`,`gender`,`detail`,`image`) VALUES(:n,:p,:g,:d,:i)");
            $stmt = $this->con->prepare($query);
            /*$stmt->bindParam(':n', $this->name, PDO::PARAM_INT);
            $stmt->bindParam(':p', $this->price, PDO::PARAM_INT);
            $stmt->bindParam(':g', $this->gender, PDO::PARAM_INT);
            $stmt->bindParam(':d', $this->detail, PDO::PARAM_INT);
            $stmt->bindParam(':i', $this->image, PDO::PARAM_STR);
            $stmt->execute($array);
*/            $result = $stmt->execute(array(
                ':n' => $this->name,
                ':p' => $this->price,
                ':g' => $this->gender,
                ':d' => $this->detail,
                ':i' => $this->image
            ));
/*            if($result){
                $_SESSION['store'] = "Data successfully Inserted";
                header ('location: index.php');
            }        */
        }
        catch (PDOException $e){
            print "ERROR!:" . $e->getMessage() . "<br>";
            die();
        }
    }
            
}