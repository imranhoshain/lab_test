<?php
include_once '../../../vendor/autoload.php';
$bazar = new App\admin\bazar\Bazar;
$result = $bazar->set($_POST);
$result->update();
?>