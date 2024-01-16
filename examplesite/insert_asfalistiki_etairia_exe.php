<?php
// Include the database connection file
include 'connect.php';

// Retrieve values from POST
$ONOMA_ASFALISTIKIS = $_POST['ONOMA_ASFALISTIKIS'];
$PHONE_ASF_ETAIRIAS = $_POST['PHONE_ASF_ETAIRIAS'];
$LOCATION = $_POST['LOCATION'];

// SQL query to insert data into the ASFALISTIKI_ETAIRIA table
$qry = "INSERT INTO ASFALISTIKI_ETAIRIA (ONOMA_ASFALISTIKIS, PHONE_ASF_ETAIRIAS, LOCATION) 
            VALUES ('$ONOMA_ASFALISTIKIS', '$PHONE_ASF_ETAIRIAS', '$LOCATION')";

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
