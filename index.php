<?php

require __DIR__ . "/vendor/autoload.php";

use Buchin\GoogleImageGrabber\GoogleImageGrabber;

$keyword = 'شکلات آلبالویی گالاردو';

$images = GoogleImageGrabber::grab($keyword);
var_dump($images);