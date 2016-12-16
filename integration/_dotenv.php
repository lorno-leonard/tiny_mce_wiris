<?php
// Require composer
require dirname(__FILE__) . '/../vendor/autoload.php';

// Load Dotenv
$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();