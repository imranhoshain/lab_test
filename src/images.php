<?php
namespace App;
use PDO;
use PDOException;
class Images extends Connection{
    public function image_upload(){
        $_POST['image'] = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $genName = substr(md5(uniqid()),0,10);
        $extName = explode('.',$_POST['image']);
        $_POST['image'] = $genName .'.'. end($extName);
        
        move_uploaded_file($tmp_name,'../../../assets/admin/uploads/'.$_POST['image']);
        return $_POST['image'];
    }
    
    
    public function image_delete($id){
        $query = ("SELECT `image` FROM `product` WHERE `product`.unique_id = :id");
        $stmt = $this->con->prepare($query);
        $stmt->bindValue(':id', $id , PDO::PARAM_INT);
        $stmt->execute();
        $single_image = $stmt->fetch(PDO::FETCH_ASSOC);
        $data = '../../../assets/admin/uploads/'.$single_image['image'];
        if(isset($data)){
            unlink($data);
        }
    }
}