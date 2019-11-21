<?php
// Create environment variables
$hostname   = getenv('DB_HOSTNAME');
$username   = getenv('DB_USERNAME_CLASS');
$password   = getenv('DB_PW_CLASS');
$dbname     = getenv('DB_NAME_FULL');
// Establish the connection to the database
$connection = mysqli_connect($hostname, $username, $password, $dbname);
?>