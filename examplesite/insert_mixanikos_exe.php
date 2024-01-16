<?php
// Include the database connection file
include 'connect.php';

// Retrieve values from POST
$ID_MIXANIKOY = $_POST['ID_MIXANIKOY'];
$NAME_MIXANIKOS = $_POST['NAME_MIXANIKOS'];
$PHONE_MIXANIKOS = $_POST['PHONE_MIXANIKOS'];
$KODEP = $_POST['KODEP'];

// SQL query to insert data into the MIXANIKOS table
$qry = "INSERT INTO MIXANIKOS (ID_MIXANIKOY, NAME_MIXANIKOS, PHONE_MIXANIKOS, KODEP) 
            VALUES ('$ID_MIXANIKOY', '$NAME_MIXANIKOS', '$PHONE_MIXANIKOS', '$KODEP')";

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
