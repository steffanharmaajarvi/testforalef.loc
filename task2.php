<?php

require_once __DIR__ . '/vendor/autoload.php';

$picture = new App\Picture();
$picture->url = 'img-test.jpg';

// Второе задание


echo "#" . $picture->getColorPallet()[0];