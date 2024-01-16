<?php
include 'connect.php';
?>

<?php

// Λήψη των τιμών POST
$Kwdikos_promithefti = $_POST['Kwdikos_promithefti'];
$THLEFWNO = $_POST['THLEFWNO'];
$ONOMA = $_POST['ONOMA'];


$qry = "INSERT INTO PROMITHEFTIS (Kwdikos_promithefti, THLEFWNO, ONOMA) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conne, $qry);

mysqli_stmt_bind_param($stmt, 'iss', $Kwdikos_promithefti, $THLEFWNO, $ONOMA);

$qryexe = mysqli_stmt_execute($stmt);


if ($qryexe) {
	echo "Επιτυχής εισαγωγή δεδομένων.";
} else {
	echo "Σφάλμα κατά την εισαγωγή δεδομένων: " . mysqli_error($conne);
}

echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";

?>