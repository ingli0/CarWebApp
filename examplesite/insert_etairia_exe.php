<?php
// Include the database connection file
include 'connect.php';

// Retrieve values from POST
$ONOMA = $_POST['ONOMA'];
$CODE = $_POST['CODE'];
$ADDRESS = $_POST['ADDRESS'];

// SQL query to insert data into the ETAIRIA table
$qry = "INSERT INTO ETAIRIA (ONOMA, CODE, ADDRESS) 
            VALUES ('$ONOMA', '$CODE', '$ADDRESS')";

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
