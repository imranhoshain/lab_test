
<?php
include_once '../../../vendor/autoload.php';
$student = new App\admin\bazar\Bazar();
$student->delete($_GET['id']);


?>