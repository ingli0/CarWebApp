<?php
// Include the database connection file
include 'connect.php';

// Retrieve values from POST
$kwdikos_sumbolaiou = $_POST['kwdikos_sumbolaiou'];
$EIDOS_ASF = $_POST['EIDOS_ASF'];
$COST_ASF = $_POST['COST_ASF'];
$HMER_ASF = $_POST['HMER_ASF'];
$HMER_LIKSIS = $_POST['HMER_LIKSIS'];
$KODOXI = $_POST['KODOXI'];
$ONOMA_ASF_ETAIRIAS = $_POST['ONOMA_ASF_ETAIRIAS'];

// SQL query to insert data into the SUMBOLAIO_ASFALIAS table
$qry = "INSERT INTO SUMBOLAIO_ASFALIAS (kwdikos_sumbolaiou,EIDOS_ASF, COST_ASF, HMER_ASF, HMER_LIKSIS, KODOXI, ONOMA_ASF_ETAIRIAS) 
            VALUES ('$kwdikos_sumbolaiou','$EIDOS_ASF', '$COST_ASF', '$HMER_ASF', '$HMER_LIKSIS', '$KODOXI', '$ONOMA_ASF_ETAIRIAS')";

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
