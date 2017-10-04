<?php
include_once '../../../vendor/autoload.php';
$product = new App\admin\bazar\Bazar();
$image = new App\Images;
$data = $image->image_delete($_GET['id']);
$product->delete($_GET['id']);

?>