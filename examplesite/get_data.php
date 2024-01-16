<?php
include 'connect.php';

// Get the selected table from the query parameters
$selectedTable = $_GET['table'];

// Query to fetch all rows from the selected table
$qry = "SELECT * FROM $selectedTable";

// Execute the query
$result = mysqli_query($conne, $qry);

// Fetch the data and create an array
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
