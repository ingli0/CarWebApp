<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Διαγραφή Δεδομένων</title>
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
            color: #e6e6e6;
        }

        #center {
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
            color: #bdbdbd;
        }

        .tables-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
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

    </style>
</head>

<body>
<?php include 'nav.php'; ?>
<br><br><br>
<div id="center">
    <h1 align=center>Διαγραφή Δεδομένων</h1>

    <form name="delete" method="post" action="delete_exe.php">
        <table width=300 border=0 align=center cellpadding=2 cellspacing=0>
            <tr>
                <td width=120 align=right><b>Πίνακας:</b></td>
                <td width=180>
                    <select name="table" id="tableSelect" onchange="loadColumns()">
                        <option value="CHOOSE ONE BELOW">CLICK TO CHOOSE</option>
                        <option value="PROMITHEFTIS">PROMITHEFTIS</option>
                        <option value="KATHGORIA">KATHGORIA</option>
                        <option value="OXHMA">OXHMA</option>
                        <option value="EPISKEYH">EPISKEYH</option>
                        <option value="MIXANIKOS">MIXANIKOS</option>
                        <option value="ANTALLAKTIKA">ANTALLAKTIKA</option>
                        <option value="ASFALISTIKI_ETAIRIA">ASFALISTIKI_ETAIRIA</option>
                        <option value="SUMBOLAIO_ASFALIAS">SUMBOLAIO_ASFALIAS</option>
                        <option value="PELATHS">PELATHS</option>
                        <option value="ISTORIKO">ISTORIKO</option>
                        <option value="ETAIRIA">ETAIRIA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td width=120 align=right><b>Κλειδί:</b></td>
                <td width=180>
                    <select name="primary_key" id="keySelect"></select>
                </td>
            </tr>
            <tr>
                <td width=120 align=right><b>Τιμή:</b></td>
                <td width=180>
                    <input type="text" name="st1">
                </td>
            </tr>
            <tr>
                <td colspan="2" align=center><input type="reset" value="Καθαρισμός">
                    <input type="submit" name="delete" value="Διαγραφή"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
        </table>
    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const center = document.getElementById('center');
        const buttons = document.querySelectorAll('button');

        setTimeout(function () {
            center.style.opacity = 1;
            buttons.forEach(function (button) {
                button.style.opacity = 1;
            });
        }, 500);
    });

    function loadColumns() {
        const tableSelect = document.getElementById('tableSelect');
        const keySelect = document.getElementById('keySelect');
        const selectedTable = tableSelect.value;

        // Fetch column names dynamically based on the selected table
        fetch(`get_column_names.php?table=${selectedTable}`)
            .then(response => response.json())
            .then(columnNames => {
                keySelect.innerHTML = '';
                columnNames.forEach(column => {
                    const option = document.createElement('option');
                    option.value = column;
                    option.textContent = column;
                    keySelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching column names:', error));
    }
</script>
</body>

</html>

