<?php
include 'connect.php';

// Get the selected table from the query parameters
$selectedTable = $_GET['table'];

// Query to fetch the keys for the selected table
$qry = "SHOW KEYS FROM $selectedTable WHERE Key_name = 'PRIMARY'";

// Execute the query
$result = mysqli_query($conne, $qry);

// Fetch the keys and create an array
$keys = [];
while ($row = mysqli_fetch_assoc($result)) {
    $keys[] = $row['Column_name'];
}

// Return the keys as JSON
header('Content-Type: application/json');
echo json_encode($keys);
?>
