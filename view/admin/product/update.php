<?php
include_once '../../../vendor/autoload.php';
$bazar = new App\admin\bazar\Bazar;
if(!empty($_FILES['image']['name'])){
    $bazar->img_delete($_POST['id']);
}




/*$result = $bazar->set($_POST);
$result->update();*/
?>