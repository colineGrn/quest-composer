<?php
require __DIR__ . '/../vendor/autoload.php';
use App\Hello;

$speaker = new Hello;
echo $speaker->talk();
