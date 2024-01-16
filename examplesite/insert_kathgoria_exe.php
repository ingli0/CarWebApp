<?php
// Include the database connection file
include 'connect.php';

// Retrieve values from POST
$KWDIKOS = $_POST['KWDIKOS'];
$ONOMA = $_POST['ONOMA'];
$PERIGRAFH = $_POST['PERIGRAFH'];

// SQL query to insert data into the KATHGORIA table
$qry = "INSERT INTO KATHGORIA (KWDIKOS, ONOMA, PERIGRAFH) VALUES ($KWDIKOS, '$ONOMA', '$PERIGRAFH')";

// Execute the SQL query
$qryexe = mysqli_query($conne, $qry);

// Check if the query was successful
if ($qryexe) {
    echo "Επιτυχής εισαγωγή δεδομένων.";
} else {
    echo "Σφάλμα κατά την εισαγωγή δεδομένων: " . mysqli_error($conne);
}

// Provide a button to return to the form
echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";
?>
