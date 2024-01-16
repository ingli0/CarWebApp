<?php
include 'connect.php';

// Get values from the form
$AR_P = $_POST['AR_P'];
$MARKA = $_POST['MARKA'];
$XILIOMETRA = $_POST['XILIOMETRA'];
$XRWMA = $_POST['XRWMA'];
$VAROS = $_POST['VAROS'];
$TIMH = $_POST['TIMH'];
$KODKAT = $_POST['KODKAT'];
$KODPROMITH = $_POST['KODPROMITH'];

// Insert data into the OXHMA table
$sql = "INSERT INTO OXHMA (AR_P, MARKA, XILIOMETRA, XRWMA, VAROS, TIMH, KODKAT, KODPROMITH) 
        VALUES ('$AR_P', '$MARKA', '$XILIOMETRA', '$XRWMA', '$VAROS', '$TIMH', '$KODKAT', '$KODPROMITH')";

if (mysqli_query($conne, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conne);
}

// Close the database connection
mysqli_close($conne);
?>
