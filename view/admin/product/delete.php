
<?php
include_once '../../../vendor/autoload.php';
$product = new App\admin\bazar\Bazar();
$product->delete($_GET['id']);

?>