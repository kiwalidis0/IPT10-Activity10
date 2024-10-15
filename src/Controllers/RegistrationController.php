<?php
require 'vendor/autoload.php'; // Include Composer's autoload if you're using Mustache via Composer

$mustache = new Mustache_Engine;

// Define the action URL
$data = [
    'action' => 'registration.php',
];

// Render the template
echo $mustache->render(file_get_contents('views/registration.mustache'), $data);
?>
