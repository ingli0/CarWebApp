<?php
include 'connect.php';

// Get the values from the form
$tableName = $_POST['table'];
$primaryKey = $_POST['primary_key']; // Assuming the name of the primary key column
$primaryKeyValue = $_POST['st1'];

// Construct the SQL query to delete records from the selected table
$qry = "DELETE FROM $tableName WHERE $primaryKey = '$primaryKeyValue'";

// Execute the SQL query
$qryexe = mysqli_query($conne, $qry);

// Check if the deletion was successful
if ($qryexe) {
	echo "Record deleted successfully.";
} else {
	echo "Error deleting record: " . mysqli_error($conne);
}

// Provide a button to go back to the main page
echo "<button onclick=\"location.href='index.php';\">Επιστροφή</button>";
?>
