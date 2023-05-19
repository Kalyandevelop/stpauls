<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_stpauls";

// Number of records per page
$recordsPerPage = 10;

// Get the requested page number
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the starting record for the query
$startFrom = ($page - 1) * $recordsPerPage;

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// Fetch data from the achievements table
$sql = "SELECT title, image FROM achievements ORDER BY title ASC LIMIT $startFrom, $recordsPerPage";
$result = $conn->query($sql);

// Fetch the data into an associative array
$data = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}

// Close the database connection
$conn->close();

// Send the data as JSON response
echo json_encode($data);
?>
