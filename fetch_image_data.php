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

// Get the current page number from the AJAX request
$page = $_POST['page'];

// Calculate the offset based on the current page and items per page
$itemsPerPage = 10;
$offset = ($page - 1) * $itemsPerPage;

// Query to retrieve image data with pagination
$sql = "SELECT * FROM achievements LIMIT $offset, $itemsPerPage";
$result = mysqli_query($conn, $sql)

$imageData = array();

if ($result->num_rows > 0) {
    // Fetch each row and add it to the $imageData array
    while ($row = $result->fetch_assoc()) {
        $imageData[] = $row;
    }
}

// Close the database connection
$conn->close();

// Return the image data as a JSON response
header('Content-Type: application/json');
echo json_encode($imageData);
?>
