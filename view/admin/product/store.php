<?php
include_once '../../../vendor/autoload.php';
if(isset($_FILES['image'])){
    $image = new App\Images;
    $_POST['image'] = $image->image_upload();
}

$bazar = new App\admin\bazar\Bazar;
$bazar->set($_POST)->store();







