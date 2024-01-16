<html>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> Εισαγωγή Δεδομένων </title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            /* Remove or modify the following line to enable scrolling */
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
            background-color:   #bdbdbd;
            color: #333333;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #bdbdbd;
        }


    </style>
    <!-- Add the new theme styles -->
    <style>
        /* Theme styles from the first HTML file */


        .parallax {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.3;
            background-image: url('wp8023178-minimalist-car-wallpapers.jpg');
        }

        .parallax::before {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        select {
            width: calc(100% - 20px);
            box-sizing: border-box;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #333333;
            border-radius: 4px;
            appearance: none; /* Remove default arrow in Firefox */
            -webkit-appearance: none; /* Remove default arrow in Chrome, Safari, Edge */
            background-color: #ffffff;
            color: # rgba(0, 0, 0, 0.5);
            cursor: pointer;
        }

        /* Style for the select dropdown arrow */
        select::after {
            content: '\25BC'; /* Unicode character for a down arrow */
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            color: #bdbdbd;
        }

        /* Hover state for the select box */
        select:hover {
            border-color: #ffffff;
        }

        /* Active state for the select box */
        select:active {
            border-color: #999999;
        }
    </style>
</head>

<body>
<?php include 'nav.php'; ?>
<div id="center">
	<br><br><br><br>
    <h1 align=center>Εισαγωγή Δεδομένων</h1>
    <div class="tables-container">


    <form name="insert" method="post" action="insert_exe.php">
        <table width=300 border=0 align=center cellpadding=2 cellspacing=0>
            <h2>ΠΡΟΜΗΘΕΥΤΗΣ </h2>

            <tr>
                <td width=120 align=right><b>Κωδικός Προμηθευτή:</b></td>
                <td width=180><input name="Kwdikos_promithefti" type="text" size=2></td>
            </tr>
            <tr>
                <td align=right><b>Τηλέφωνο:</b></td>
                <td><input name="THLEFWNO" type="text" size=10></td>
            </tr>
            <tr>
                <td align=right><b>Όνομα:</b></td>
                <td><input name="ONOMA" type="text" size=40></td>
            </tr>
            <tr>
                <td colspan="2" align=center><input type="reset" value="Καθαρισμός">
                    <input type="submit" name="insert_promitheftis" value="Εισαγωγή"></td>
            </tr>
            <tr><td>&nbsp;</td></tr>
        </table>
    </form>

    <!-- KATHGORIA Table -->
    <form name="insert_kathgoria" method="post" action="insert_kathgoria_exe.php">
        <table width=300 border=0 align=center cellpadding=2 cellspacing=0>
            <h2>Κατηγορία </h2>
            <tr>
                <td width=120 align=right><b>Κωδικός Κατηγορίας:</b></td>
                <td width=180><input name="KWDIKOS" type="text" size=4></td>
            </tr>
            <tr>
                <td align=right><b>Όνομα:</b></td>
                <td><input name="ONOMA" type="text" size=20></td>
            </tr>
            <tr>
                <td align=right><b>Περιγραφή:</b></td>
                <td><input name="PERIGRAFH" type="text" size=40></td>
            </tr>
            <tr>
                <td colspan="2" align=center><input type="reset" value="Καθαρισμός">
                    <input type="submit" name="insert_kathgoria" value="Εισαγωγή"></td>
            </tr>
            <tr><td>&nbsp;</td></tr>
        </table>
    </form>

        <!-- OXHMA Table -->
        <form name="insert_oxhma" method="post" action="insert_oxhma_exe.php">
            <table width=300 border=0 align=center cellpadding=2 cellspacing=0>
                <h2>ΟΧΗΜΑ </h2>
                <tr>
                    <td width=120 align=right><b>Αριθμός Πινακίδας:</b></td>
                    <td width=180><input name="AR_P" type="text" size=17></td>
                </tr>
                <tr>
                    <td align=right><b>Μάρκα:</b></td>
                    <td><input name="MARKA" type="text" size=30></td>
                </tr>
                <tr>
                    <td align=right><b>Χιλιόμετρα:</b></td>
                    <td><input name="XILIOMETRA" type="text" size=10></td>
                </tr>
                <tr>
                    <td align=right><b>Χρώμα:</b></td>
                    <td><input name="XRWMA" type="text" size=12></td>
                </tr>
                <tr>
                    <td align=right><b>Βάρος:</b></td>
                    <td><input name="VAROS" type="text" size=10></td>
                </tr>
                <tr>
                    <td align=right><b>Τιμή:</b></td>
                    <td><input name="TIMH" type="text" size=10></td>
                </tr>
                <tr>
                    <td align=right><b>Κωδικός Κατηγορίας:</b></td>
                    <td>
                        <select name="KODKAT">
                            <?php
                            // Include the database connection file
                            include 'connect.php';

                            $sql = "SELECT KWDIKOS, ONOMA FROM KATHGORIA";
                            $result = mysqli_query($conne, $sql);

                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['KWDIKOS'] . "'>" . $row['ONOMA'] . "</option>";
                                }
                                mysqli_free_result($result);
                            } else {
                                echo "Error: " . mysqli_error($conne);
                            }

                            // Close the database connection
                            mysqli_close($conne);
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align=right><b>Κωδικός Προμηθευτή:</b></td>
                    <td>
                        <select name="KODPROMITH">
                            <?php
                            // Include the database connection file
                            include 'connect.php';

                            $sql = "SELECT Kwdikos_promithefti, ONOMA FROM PROMITHEFTIS";
                            $result = mysqli_query($conne, $sql);

                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['Kwdikos_promithefti'] . "'>" . $row['ONOMA'] . "</option>";
                                }
                                mysqli_free_result($result);
                            } else {
                                echo "Error: " . mysqli_error($conne);
                            }

                            // Close the database connection
                            mysqli_close($conne);
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align=center><input type="reset" value="Καθαρισμός">
                        <input type="submit" name="insert_oxhma" value="Εισαγωγή"></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
            </table>
        </form>

        <!-- EPISKEYH Table -->
        <form name="insert_episkeyh" method="post" action="insert_episkeyh_exe.php">
            <table width=300 border=0 align=center cellpadding=2 cellspacing=0>
                <h2>EPISKEYH </h2>
                <tr>
                    <td width=120 align=right><b>Κωδικός Επισκευής:</b></td>
                    <td width=180><input name="KODEP" type="text" size=10></td>
                </tr>
                <tr>
                    <td align=right><b>Κόστος:</b></td>
                    <td><input name="KOSTOS" type="text" size=10></td>
                </tr>
                <tr>
                    <td align=right><b>Περιγραφή:</b></td>
                    <td><input name="PERIGRAFH" type="text" size=100></td>
                </tr>
                <tr>
                    <td align=right><b>Ημερομηνία Έναρξης:</b></td>
                    <td><input name="HMEROMINIAEP" type="date"></td>
                </tr>
                <tr>
                    <td align=right><b>Κωδικός Οχήματος:</b></td>
                    <td>
                        <select name="KODOXI">
                            <?php
                            // Include the database connection file
                            include 'connect.php';

                            $sql = "SELECT AR_P FROM OXHMA";
                            $result = mysqli_query($conne, $sql);

                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['AR_P'] . "'>" . $row['AR_P'] . "</option>";
                                }
                                mysqli_free_result($result);
                            } else {
                                echo "Error: " . mysqli_error($conne);
                            }

                            // Close the database connection
                            mysqli_close($conne);
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align=center><input type="reset" value="Καθαρισμός">
                        <input type="submit" name="insert_episkeyh" value="Εισαγωγή"></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
            </table>
        </form>

        <!-- MIXANIKOS Table -->
    <form name="insert_mixanikos" method="post" action="insert_mixanikos_exe.php">
        <table width=300 border=0 align=center cellpadding=2 cellspacing=0>
            <h2>MIXANIKOS </h2>
            <tr>
                <td width=120 align=right><b>Κωδικός Μηχανικού:</b></td>
                <td width=180><input name="ID_MIXANIKOY" type="text" size=10></td>
            </tr>
            <tr>
                <td align=right><b>Όνομα Μηχανικού:</b></td>
                <td><input name="NAME_MIXANIKOS" type="text" size=40></td>
            </tr>
            <tr>
                <td align=right><b>Τηλέφωνο Μηχανικού:</b></td>
                <td><input name="PHONE_MIXANIKOS" type="text" size=10></td>
            </tr>
            <tr>
                <td align=right><b>Κωδικός Επισκευής:</b></td>
                <td><input name="KODEP" type="text" size=10></td>
            </tr>
            <tr>
                <td colspan="2" align=center><input type="reset" value="Καθαρισμός">
                    <input type="submit" name="insert_mixanikos" value="Εισαγωγή"></td>
            </tr>
            <tr><td>&nbsp;</td></tr>
        </table>
    </form>


    <!-- ANTALLAKTIKA Table -->
    <form name="insert_antallaktika" method="post" action="insert_antallaktika_exe.php">
        <table width=300 border=0 align=center cellpadding=2 cellspacing=0>
            <h2>ANTALLAKTIKA </h2>
            <tr>
                <td width=120 align=right><b>Κωδικός Ανταλλακτικού:</b></td>
                <td width=180><input name="CODE_ANT" type="text" size=10></td>
            </tr>
            <tr>
                <td align=right><b>Κόστος Ανταλλακτικού:</b></td>
                <td><input name="COST_ANT" type="text" size=6></td>
            </tr>
            <tr>
                <td align=right><b>Όνομα Ανταλλακτικού:</b></td>
                <td><input name="NAME_ANT" type="text" size=20></td>
            </tr>
            <tr>
                <td align=right><b>Περιγραφή Ανταλλακτικού:</b></td>
                <td><input name="DESCR" type="text" size=100></td>
            </tr>
            <tr>
                <td align=right><b>Κωδικός Οχήματος:</b></td>
                <td>
                    <select name="KODOXI">
                        <?php
                        // Include the database connection file
                        include 'connect.php';

                        $sql = "SELECT AR_P FROM OXHMA";
                        $result = mysqli_query($conne, $sql);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['AR_P'] . "'>" . $row['AR_P'] . "</option>";
                            }
                            mysqli_free_result($result);
                        } else {
                            echo "Error: " . mysqli_error($conne);
                        }

                        // Close the database connection
                        mysqli_close($conne);
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align=center><input type="reset" value="Καθαρισμός">
                    <input type="submit" name="insert_antallaktika" value="Εισαγωγή"></td>
            </tr>
            <tr><td>&nbsp;</td></tr>
        </table>
    </form>

    <!-- ASFALISTIKI_ETAIRIA Table -->
    <form name="insert_asfalistiki_etairia" method="post" action="insert_asfalistiki_etairia_exe.php">
        <table width=300 border=0 align=center cellpadding=2 cellspacing=0>
            <h2>ASFALISTIKI ETAIRIA  </h2>
            <tr>
                <td width=120 align=right><b>Όνομα Ασφαλιστικής Εταιρίας:</b></td>
                <td width=180><input name="ONOMA_ASFALISTIKIS" type="text" size=30></td>
            </tr>
            <tr>
                <td align=right><b>Τηλέφωνο Ασφαλιστικής Εταιρίας:</b></td>
                <td><input name="PHONE_ASF_ETAIRIAS" type="text" size=10></td>
            </tr>
            <tr>
                <td align=right><b>Τοποθεσία Ασφαλιστικής Εταιρίας:</b></td>
                <td><input name="LOCATION" type="text" size=30></td>
            </tr>
            <tr>
                <td colspan="2" align=center><input type="reset" value="Καθαρισμός">
                    <input type="submit" name="insert_asfalistiki_etairia" value="Εισαγωγή"></td>
            </tr>
            <tr><td>&nbsp;</td></tr>
        </table>
    </form>

        <!-- SUMBOLAIO ASFALIAS Table -->
        <form name="insert_sumbolaio_asfalias" method="post" action="insert_sumbolaio_asfalias_exe.php">
            <table width=300 border=0 align=center cellpadding=2 cellspacing=0>
                <h2> SUMBOLAIO  ASFALIAS  </h2>
                <tr>
                    <td align=right><b>Κωδικός συμβολαίου:</b></td>
                    <td><input name="kwdikos_sumbolaiou" type="text"></td>
                </tr>
                <tr>
                    <td width=120 align=right><b>Είδος Ασφαλείας:</b></td>
                    <td width=180>
                        <select name="EIDOS_ASF">
                            <option value="VASIKI">VASIKI</option>
                            <option value="MEIKTI">MEIKTI</option>
                            <option value="PYROS/KLOPI">PYROS/KLOPI</option>
                            <option value="ME ODIKI">ME ODIKI</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align=right><b>Κόστος Ασφαλείας:</b></td>
                    <td><input name="COST_ASF" type="text"></td>
                </tr>
                <tr>
                    <td align=right><b>Ημερομηνία Ασφάλειας:</b></td>
                    <td><input name="HMER_ASF" type="date"></td>
                </tr>
                <tr>
                    <td align=right><b>Ημερομηνία Λήξης Ασφάλειας:</b></td>
                    <td><input name="HMER_LIKSIS" type="date"></td>
                </tr>
                <tr>
                    <td align=right><b>Κωδικός Οχήματος:</b></td>
                    <td>
                        <select name="KODOXI">
                            <?php
                            // Include the database connection file
                            include 'connect.php';

                            $sql = "SELECT AR_P FROM OXHMA";
                            $result = mysqli_query($conne, $sql);

                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['AR_P'] . "'>" . $row['AR_P'] . "</option>";
                                }
                                mysqli_free_result($result);
                            } else {
                                echo "Error: " . mysqli_error($conne);
                            }

                            // Close the database connection
                            mysqli_close($conne);
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align=right><b>Όνομα Ασφαλιστικής Εταιρίας:</b></td>
                    <td>
                        <select name="ONOMA_ASF_ETAIRIAS">
                            <?php
                            // Include the database connection file
                            include 'connect.php';

                            $sql = "SELECT ONOMA_ASFALISTIKIS FROM ASFALISTIKI_ETAIRIA";
                            $result = mysqli_query($conne, $sql);

                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['ONOMA_ASFALISTIKIS'] . "'>" . $row['ONOMA_ASFALISTIKIS'] . "</option>";
                                }
                                mysqli_free_result($result);
                            } else {
                                echo "Error: " . mysqli_error($conne);
                            }

                            // Close the database connection
                            mysqli_close($conne);
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align=center><input type="reset" value="Καθαρισμός">
                        <input type="submit" name="insert_sumbolaio_asfalias" value="Εισαγωγή"></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
            </table>
        </form>

        <!-- PELATHS Table -->
    <form name="insert_pelaths" method="post" action="insert_pelaths_exe.php">
        <table width=300 border=0 align=center cellpadding=2 cellspacing=0>
            <h2> ΠΕΛΑΤΗΣ  </h2>
            <tr>
                <td width=120 align=right><b>Όνομα Πελάτη:</b></td>
                <td width=180><input name="NAME_PELATHS" type="text" size=40></td>
            </tr>
            <tr>
                <td align=right><b>Αριθμός Ταυτότητας Πελάτη:</b></td>
                <td><input name="AR_TAYTOTHTAS" type="text" size=8></td>
            </tr>
            <tr>
                <td align=right><b>Τηλέφωνο Πελάτη:</b></td>
                <td><input name="PHONE_PELATHS" type="text" size=10></td>
            </tr>
            <tr>
                <td align=right><b>Ημερομηνία Εγγραφής:</b></td>
                <td><input name="HMEROMINIA_EGGRAFHS" type="date"></td>
            </tr>
            <tr>
                <td align=right><b>Κωδικός Οχήματος:</b></td>
                <td>
                    <select name="KODOXI">
                        <?php
                        // Include the database connection file
                        include 'connect.php';

                        $sql = "SELECT AR_P FROM OXHMA";
                        $result = mysqli_query($conne, $sql);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['AR_P'] . "'>" . $row['AR_P'] . "</option>";
                            }
                            mysqli_free_result($result);
                        } else {
                            echo "Error: " . mysqli_error($conne);
                        }

                        // Close the database connection
                        mysqli_close($conne);
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align=center><input type="reset" value="Καθαρισμός">
                    <input type="submit" name="insert_pelaths" value="Εισαγωγή"></td>
            </tr>
            <tr><td>&nbsp;</td></tr>
        </table>
    </form>


    <!-- ISTORIKO Table -->
    <form name="insert_istoriko" method="post" action="insert_istoriko_exe.php">
        <table width=300 border=0 align=center cellpadding=2 cellspacing=0>
            <h2> ΙΣΤΟΡΙΚΟ</h2>
            <tr>
                <td align=right><b>Κωδικός Ιστορικού:</b></td>
                <td><input name="KWDIKOS_ISTORIKOU" type="text" size=100></td>
            </tr>
            <tr>
                <td width=120 align=right><b>Αριθμός Ταυτότητας Πελάτη:</b></td>
                <td width=180>
                    <select name="AR_TAYTOTHTAS_PELATHS">
                        <?php
                        // Include the database connection file
                        include 'connect.php';

                        $sql = "SELECT AR_TAYTOTHTAS FROM PELATHS";
                        $result = mysqli_query($conne, $sql);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['AR_TAYTOTHTAS'] . "'>" . $row['AR_TAYTOTHTAS'] . "</option>";
                            }
                            mysqli_free_result($result);
                        } else {
                            echo "Error: " . mysqli_error($conne);
                        }

                        // Close the database connection
                        mysqli_close($conne);
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align=right><b>Περιγραφή Ιστορικού:</b></td>
                <td><input name="DESCISTORIKO" type="text" size=100></td>
            </tr>
            <tr>
                <td colspan="2" align=center><input type="reset" value="Καθαρισμός">
                    <input type="submit" name="insert_istoriko" value="Εισαγωγή"></td>
            </tr>
            <tr><td>&nbsp;</td></tr>
        </table>
    </form>


    <!-- ETAIRIA Table -->
    <form name="insert_etairia" method="post" action="insert_etairia_exe.php">
        <table width=300 border=0 align=center cellpadding=2 cellspacing=0>
            <h2> ΕΤΑΙΡΙΑ</h2>
            <tr>
                <td width=120 align=right><b>Όνομα Εταιρίας:</b></td>
                <td width=180><input name="ONOMA" type="text" size=40></td>
            </tr>
            <tr>
                <td align=right><b>Κωδικός Εταιρίας:</b></td>
                <td><input name="CODE" type="text" size=7></td>
            </tr>
            <tr>
                <td align=right><b>Διεύθυνση Εταιρίας:</b></td>
                <td><input name="ADDRESS" type="text" size=30></td>
            </tr>
            <tr>
                <td colspan="2" align=center><input type="reset" value="Καθαρισμός">
                    <input type="submit" name="insert_etairia" value="Εισαγωγή"></td>
            </tr>
            <tr><td>&nbsp;</td></tr>
        </table>
    </form>
    </div>

</div>

</body>
</html>
