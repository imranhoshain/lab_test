<?php
include_once '../../../vendor/autoload.php';
$bazar = new App\admin\bazar\Bazar;
$_POST['image'] = $bazar->upload();
$a=$bazar->set($_POST)->store();







