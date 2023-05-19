<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_stpauls";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get the total number of images
$sql = "SELECT COUNT(*) AS total FROM achievements";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$totalImages = $row['total'];

// Close the database connection
$conn->close();

// Return the total number of images as a response
echo $totalImages;
?>
