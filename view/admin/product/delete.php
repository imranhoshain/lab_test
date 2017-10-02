<?php
include_once '../../../vendor/autoload.php';
$product = new App\admin\bazar\Bazar();
$product->img_delete($_GET['id']);
$product->delete($_GET['id']);

?>