<?php
include_once '../../../vendor/autoload.php';
$bazar = new App\admin\bazar\Bazar;
$bazar->set($_POST);
$bazar->set($_FILES);
$bazar->store();
$bazar->img();



