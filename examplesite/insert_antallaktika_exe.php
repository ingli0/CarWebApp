<?php
// Include the database connection file
include 'connect.php';

// Retrieve values from POST
$CODE_ANT = $_POST['CODE_ANT'];
$COST_ANT = $_POST['COST_ANT'];
$NAME_ANT = $_POST['NAME_ANT'];
$DESCR = $_POST['DESCR'];
$KODOXI = $_POST['KODOXI'];

// SQL query to insert data into the ANTALLAKTIKA table
$qry = "INSERT INTO ANTALLAKTIKA (CODE_ANT, COST_ANT, NAME_ANT, DESCR, KODOXI) 
            VALUES ('$CODE_ANT', $COST_ANT, '$NAME_ANT', '$DESCR', '$KODOXI')";

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
