<?php
$servername = "localhost";
$username = "root"; // Replace with your actual database username
$password = ""; // Replace with your actual database password
$dbname = "astro"; // Replace with your actual database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Rest of your code...


