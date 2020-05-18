<?php
require_once '../vendor/autoload.php';

$foto_original = 'mofoto.jpg';
$guardar_en = 'fotomodificada.jpg';

$thumb = new PHPThumb\GD($foto_original);
$thumb->resize(50,50);
$thumb->show();
$thumb->save($guardar_en);




