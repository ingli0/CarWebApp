<?php
// Include the database connection file
include 'connect.php';

// Retrieve values from POST
$KWDIKOS_ISTORIKOU = $_POST['KWDIKOS_ISTORIKOU'];
$AR_TAYTOTHTAS_PELATHS = $_POST['AR_TAYTOTHTAS_PELATHS'];
$DESCISTORIKO = $_POST['DESCISTORIKO'];

// SQL query to insert data into the ISTORIKO table
$qry = "INSERT INTO ISTORIKO (KWDIKOS_ISTORIKOU,AR_TAYTOTHTAS_PELATHS, DESCISTORIKO) 
            VALUES ('$KWDIKOS_ISTORIKOU','$AR_TAYTOTHTAS_PELATHS', '$DESCISTORIKO')";

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
