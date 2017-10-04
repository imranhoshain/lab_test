<?php
include_once '../../../vendor/autoload.php';
$bazar = new App\admin\bazar\Bazar;
if(!empty($_FILES['image']['name'])){
    $bazar->img_delete($_POST['id']);
    $bazar->upload();
}
$result = $bazar->set($_POST);
$result->update();
?>