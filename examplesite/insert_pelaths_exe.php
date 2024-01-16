<?php
// Include the database connection file
include 'connect.php';

// Retrieve values from POST
$NAME_PELATHS = $_POST['NAME_PELATHS'];
$AR_TAYTOTHTAS = $_POST['AR_TAYTOTHTAS'];
$PHONE_PELATHS = $_POST['PHONE_PELATHS'];
$HMEROMINIA_EGGRAFHS = $_POST['HMEROMINIA_EGGRAFHS'];
$KODOXI = $_POST['KODOXI'];

// SQL query to insert data into the PELATHS table
$qry = "INSERT INTO PELATHS (NAME_PELATHS, AR_TAYTOTHTAS, PHONE_PELATHS, HMEROMINIA_EGGRAFHS, KODOXI) 
            VALUES ('$NAME_PELATHS', '$AR_TAYTOTHTAS', '$PHONE_PELATHS', '$HMEROMINIA_EGGRAFHS', '$KODOXI')";

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
