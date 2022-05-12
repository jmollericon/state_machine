<?php

//autoload de composer
require 'vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<pre>';
echo 'BEHAVIOR PATTERNS<br>';
echo '======== ========<br>';
echo 'State<br><br><br>';

use App\AudioPlayer;

$context = new AudioPlayer();

print_r($context);
