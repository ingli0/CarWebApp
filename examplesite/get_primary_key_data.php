<?php

include 'connect.php';

// Get the selected table from the query parameters
$selectedTable = $_GET['table'];

// Get the primary key column name for the selected table
$qryColumns = "SHOW COLUMNS FROM $selectedTable";
$resultColumns = mysqli_query($conne, $qryColumns);

$primaryKeyColumn = '';
while ($row = mysqli_fetch_assoc($resultColumns)) {
    if ($row['Key'] == 'PRI') {
        $primaryKeyColumn = $row['Field'];
        break;
    }
}

if (!$primaryKeyColumn) {
    die('Primary key column not found for the selected table.');
}

// Query to fetch data for the primary key column
$qryData = "SELECT $primaryKeyColumn FROM $selectedTable";

// Execute the query
$resultData = mysqli_query($conne, $qryData);

// Fetch the data and create an array
$data = [];
while ($row = mysqli_fetch_assoc($resultData)) {
    $data[] = $row;
}

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($data);

