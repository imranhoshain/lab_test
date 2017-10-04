<?php
include_once '../../../vendor/autoload.php';
$bazar = new App\admin\bazar\Bazar;
$image = new App\Images;
if(!empty($_FILES['image']['name'])){    
    $image->image_delete($_POST['id']);
    $image->image_upload();
}
$bazar->set($_POST)->update();
?>