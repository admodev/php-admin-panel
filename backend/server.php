<?php

// Load variables from dotenv
require_once './vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('./');
$dotenv->load();

$db_host = $_ENV['DATABASE_HOST'];
$db_user = $_ENV['DATABASE_USER'];
$db_password = $_ENV['DATABASE_PASSWORD'];
$db_name = $_ENV['DATABASE_NAME'];
$db_port = $_ENV['DATABASE_PORT'];

// MySQL connection using dotenv
$database = mysqli_connect($db_host, $db_user, $db_password, $db_name, $db_port);
