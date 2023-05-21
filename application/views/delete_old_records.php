<?php
// Connect to the database
$connection = mysqli_connect('localhost', 'username', 'password', 'login');

// Define the maximum age of soft-deleted records (in seconds)
$max_age = 30; // 30 days

// Construct the query to delete old records
$query = "DELETE FROM `englishbook` WHERE `deleted_at` IS NOT NULL AND `deleted_at` < DATE_SUB(NOW(), INTERVAL $max_age SECOND)";

// Execute the query
mysqli_query($connection, $query);

// Close the database connection
mysqli_close($connection);
?>