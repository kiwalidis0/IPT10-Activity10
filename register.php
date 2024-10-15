<?php
require 'vendor/autoload.php'; // Include the Mustache autoloader if using Composer

$mustache = new Mustache_Engine;

// Prepare data for the template
$data = [
    'student' => 'Andreas Luy', // Example data
    'title' => 'Registration Form',
    'college' => 'BSIT',
    'university' => 'AUF',
    'location' => 'Angeles, Philippines',
];

// Render the Mustache template
echo $mustache->render(file_get_contents('views/registration.mustache'), $data);
?>
