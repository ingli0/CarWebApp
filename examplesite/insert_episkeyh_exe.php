<?php
// Include the database connection file
include 'connect.php';

// Retrieve values from POST
$KODEP = $_POST['KODEP'];
$KOSTOS = $_POST['KOSTOS'];
$PERIGRAFH = $_POST['PERIGRAFH'];
$HMEROMINIAEP = $_POST['HMEROMINIAEP'];
$KODOXI = $_POST['KODOXI'];

// SQL query to insert data into the EPISKEYH table
$qry = "INSERT INTO EPISKEYH (KODEP, KOSTOS, PERIGRAFH, HMEROMINIAEP, KODOXI) 
            VALUES ('$KODEP', $KOSTOS, '$PERIGRAFH', '$HMEROMINIAEP', '$KODOXI')";

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
