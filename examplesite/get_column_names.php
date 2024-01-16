<?php
include 'connect.php';

// Get the selected table from the query parameters
$selectedTable = $_GET['table'];

// Query to fetch column names from the selected table
$qry = "SHOW COLUMNS FROM $selectedTable";

// Execute the query
$result = mysqli_query($conne, $qry);

// Fetch the column names and create an array
$columnNames = [];
while ($row = mysqli_fetch_assoc($result)) {
    $columnNames[] = $row['Field'];
}

// Return the column names as JSON
header('Content-Type: application/json');
echo json_encode($columnNames);
?>
