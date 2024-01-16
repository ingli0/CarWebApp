<?php
	$h = '';
	$u = '';
	$p = '';
	$n = '';
	
 
$conn = new mysqli($h, $u, $p, $n);

function displayTableList($conn) {
    $sql = "SHOW TABLES";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<label for='table'>Select a table:</label>";
        echo "<select name='table' id='table'>";
        while ($row = $result->fetch_row()) {
            echo "<option value='{$row[0]}'>{$row[0]}</option>";
        }
        echo "</select>";
        echo "<input type='submit' name='submit_table' value='Load Table'>";
    } else {
        echo "No tables found in the database.";
    }
}

function displayTableData($conn, $tableName) {
    $sql = "SELECT * FROM `$tableName`"; // Use backticks around table name
    $result = $conn->query($sql);

    echo "<h2>$tableName Table</h2>";

    if ($result->num_rows > 0) {
        echo "<form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>";
        echo "<input type='hidden' name='table' value='$tableName'>";
        echo "<table border='1'><tr>";

        while ($fieldinfo = $result->fetch_field()) {
            echo "<th>{$fieldinfo->name}</th>";
        }
        echo "<th>Action</th>";
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $field => $value) {
                echo "<td><input type='text' name='{$field}[]' value='{$value}'></td>";
            }
            echo "<td><input type='submit' name='submit_update' value='Save'></td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "</form>";
    } else {
        echo "No records found in the table.";
    }
}

function getPrimaryKeyColumn($conn, $tableName) {
    $sql = "SHOW KEYS FROM `$tableName` WHERE Key_name = 'PRIMARY'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['Column_name'];
    } else {
        die("Error getting primary key column for the table: $tableName");
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit_table'])) {
        $selectedTable = $_POST['table'];
        displayTableData($conn, $selectedTable);
    } elseif (isset($_POST['submit_update'])) {
        $table = $_POST['table'];
// Get primary key column for the selected table
        $primaryKeyColumn = getPrimaryKeyColumn($conn, $table);

// Extract primary key value
        $primaryKeyValue = $_POST[$primaryKeyColumn][0];

// Remove unnecessary elements from $_POST
        unset($_POST['table']);
        unset($_POST[$primaryKeyColumn]);

        $columns = array_keys($_POST);
        $values = array_values($_POST);

        $updateQuery = "UPDATE `$table` SET ";
        for ($i = 0; $i < count($columns) - 1; $i++) {
            $updateQuery .= "`{$columns[$i]}` = '{$values[$i][0]}', "; // Use backticks around column names
        }
        $updateQuery = rtrim($updateQuery, ', ');
        $updateQuery .= " WHERE `$primaryKeyColumn` = '$primaryKeyValue'";

        if ($conn->query($updateQuery) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Data</title>
    </head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            overflow: auto;
            background: linear-gradient(to bottom, #1a1a1a, #333333); /* Gradient background */
            color: #e6e6e6; /* Light gray text */
            padding-top: 60px;
            min-height: 100vh;

        }


        #center {
            text-align: center;
            padding: 40px;
            border-radius: 10px;
            background-color: #333333; /* Darker background color */
            max-width: 500px;
            width: 100%;
            opacity: 0;
            transition: opacity 1s ease, box-shadow 0.3s ease; /* Added box-shadow transition */
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3); /* Box shadow for elevation */
            position: relative; /* Added relative positioning */
        }

        h1 {
            color: #e6e6e6; /* Light gray text */
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Text shadow for emphasis */
        }

        button {
            background-color: #2c3e50; /* Dark color for buttons */
            color: white;
            padding: 15px 30px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            opacity: 0;
            transition: opacity 0.5s ease, transform 0.3s ease; /* Added transform transition */
        }

        button:hover {
            background-color: #1f2c38; /* Darker color on hover */
            transform: scale(1.1); /* Increase size on hover */
        }

        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            opacity: 0.5; /* Adjust the opacity as needed */
        }

        .parallax {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.3; /* Adjust the opacity as needed */
            background-image: url('wp8023178-minimalist-car-wallpapers.jpg'); /* Replace with your image path or URL */
        }

        .parallax::before {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
        }

        table {
            width: calc(100%);
            background-color: #333333;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        td {
            text-align: right;
            padding: 10px;
            color: #bdbdbd;
        }

        input {
            width: calc(100% - 20px);
            box-sizing: border-box;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #333333;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #bdbdbd;
            color: #333333;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #bdbdbd;
        }

        .fixed-element {
            position: relative;
        }

        .container {
            max-height: 50vh; /* Adjust this value based on your needs */
            overflow: auto; /* Enable vertical scrolling if content overflows */
        }


    </style>

    <body>
    <?php include 'nav.php'; ?>
<br><br>
    <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <?php
            displayTableList($conn);
            ?>
        </form>
    </div>
    </body>


</html>

<?php
$conn->close();
?>