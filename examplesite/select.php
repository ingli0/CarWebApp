<?php
	include 'connect.php';
 
?>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Εμφάνιση Δεδομένων</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                min-height: 100vh;
                background: linear-gradient(to bottom, #1a1a1a, #333333); /* Gradient background */
                color: #e6e6e6; /* Light gray text */
            }

            #center {
                text-align: center;
                margin: 20px;
                background-color: #333333; /* Darker background color */
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                opacity: 0;
                transition: opacity 1s ease, box-shadow 0.3s ease; /* Added box-shadow transition */
                position: relative; /* Added relative positioning */
                width: 100%;
                max-width: 900px;
            }

            table {
                border-collapse: collapse;
                width: 100%;
                margin: 20px auto;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                background-color: #262626; /* Darker background color for the table */
                border-radius: 10px;
            }

            th, td {
                border: 1px solid #333333; /* Slightly darker color for borders */
                padding: 15px;
                text-align: center;
                color: #e6e6e6; /* Light gray text */
            }

            th {
                background-color: #1f1f1f; /* Dark background color for headers */
            }

            tr:nth-child(even) {
                background-color: #1a1a1a; /* Darker color for even rows */
            }

            tr:hover {
                background-color: #1f1f1f; /* Slightly darker color on hover */
            }

            button {
                background-color: #e74c3c; /* Red color for the button */
                color: #fff;
                padding: 10px 15px;
                border: none;
                cursor: pointer;
                font-size: 16px;
                border-radius: 5px;
                margin-top: 20px;
                transition: background-color 0.3s ease; /* Smooth color transition on hover */
            }

            button:hover {
                background-color: #c0392b; /* Darker red color on hover */
            }

            /* Add the styles from the first HTML file for nav, parallax, etc. */



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
        </style>
    </head>

    <body>
    <?php include 'nav.php'; ?>

    <div class="parallax"></div>
<br><br>
    <div id="center">

    <!-- PROMITHEFTIS Table -->
    <h2>PROMITHEFTIS Table</h2>
    <table border=2 align=center>
        <tr>
            <th width=80>Kwdikos_promithefti</th>
            <th width=80>THLEFWNO</th>
            <th width=80>ONOMA</th>
        </tr>

        <?php
        $qry = "SELECT * FROM PROMITHEFTIS";
        $result = mysqli_query($conne, $qry);

        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
            echo ("<tr>
                            <td><div align=\"center\">$row[0]</div></td>
                            <td><div align=\"center\">$row[1]</div></td>
                            <td><div align=\"center\">$row[2]</div></td>
                        </tr>");
        }
        ?>

    </table>
<br><br>

    <!-- KATHGORIA Table -->
    <h2>KATHGORIA Table</h2>
    <table border=2 align=center>
        <tr>
            <th width=80>KWDIKOS</th>
            <th width=80>ONOMA</th>
            <th width=80>PERIGRAFH</th>
        </tr>

        <?php
        $qry = "SELECT * FROM KATHGORIA";
        $result = mysqli_query($conne, $qry);

        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
            echo ("<tr>
                            <td><div align=\"center\">$row[0]</div></td>
                            <td><div align=\"center\">$row[1]</div></td>
                            <td><div align=\"center\">$row[2]</div></td>
                        </tr>");
        }
        ?>

    </table>
<br><br>

    <!-- OXHMA Table -->
    <h2>OXHMA Table</h2>
    <table border=2 align=center>
        <tr>
            <th width=80>AR_P</th>
            <th width=80>MARKA</th>
            <th width=80>XILIOMETRA</th>
            <th width=80>XRWMA</th>
            <th width=80>VAROS</th>
            <th width=80>TIMH</th>
            <th width=80>KODKAT</th>
            <th width=80>KODPROMITH</th>
        </tr>

        <?php
        $qry = "SELECT * FROM OXHMA";
        $result = mysqli_query($conne, $qry);

        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
            echo ("<tr>
                            <td><div align=\"center\">$row[0]</div></td>
                            <td><div align=\"center\">$row[1]</div></td>
                            <td><div align=\"center\">$row[2]</div></td>
                            <td><div align=\"center\">$row[3]</div></td>
                            <td><div align=\"center\">$row[4]</div></td>
                            <td><div align=\"center\">$row[5]</div></td>
                            <td><div align=\"center\">$row[6]</div></td>
                            <td><div align=\"center\">$row[7]</div></td>
                        </tr>");
        }
        ?>

    </table>
<br><br>

    <!-- EPISKEYH Table -->
    <h2>EPISKEYH Table</h2>
    <table border=2 align=center>
        <tr>
            <th width=80>KODEP</th>
            <th width=80>KOSTOS</th>
            <th width=80>PERIGRAFH</th>
            <th width=80>HMEROMINIAEP</th>
            <th width=80>KODOXI</th>
        </tr>

        <?php
        $qry = "SELECT * FROM EPISKEYH";
        $result = mysqli_query($conne, $qry);

        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
            echo ("<tr>
                            <td><div align=\"center\">$row[0]</div></td>
                            <td><div align=\"center\">$row[1]</div></td>
                            <td><div align=\"center\">$row[2]</div></td>
                            <td><div align=\"center\">$row[3]</div></td>
                            <td><div align=\"center\">$row[4]</div></td>
                        </tr>");
        }
        ?>

    </table>
<br><br>

    <!-- MIXANIKOS Table -->
    <h2>MIXANIKOS Table</h2>
    <table border=2 align=center>
        <tr>
            <th width=80>ID_MIXANIKOY</th>
            <th width=80>NAME_MIXANIKOS</th>
            <th width=80>PHONE_MIXANIKOS</th>
            <th width=80>KODEP</th>
        </tr>

        <?php
        $qry = "SELECT * FROM MIXANIKOS";
        $result = mysqli_query($conne, $qry);

        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
            echo ("<tr>
                            <td><div align=\"center\">$row[0]</div></td>
                            <td><div align=\"center\">$row[1]</div></td>
                            <td><div align=\"center\">$row[2]</div></td>
                            <td><div align=\"center\">$row[3]</div></td>
                        </tr>");
        }
        ?>

    </table>
<br><br>

    <!-- ANTALLAKTIKA Table -->
    <h2>ANTALLAKTIKA Table</h2>
    <table border=2 align=center>
        <tr>
            <th width=80>CODE_ANT</th>
            <th width=80>COST_ANT</th>
            <th width=80>NAME_ANT</th>
            <th width=80>DESCR</th>
            <th width=80>KODOXI</th>
        </tr>

        <?php
        $qry = "SELECT * FROM ANTALLAKTIKA";
        $result = mysqli_query($conne, $qry);

        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
            echo ("<tr>
                            <td><div align=\"center\">$row[0]</div></td>
                            <td><div align=\"center\">$row[1]</div></td>
                            <td><div align=\"center\">$row[2]</div></td>
                            <td><div align=\"center\">$row[3]</div></td>
                            <td><div align=\"center\">$row[4]</div></td>
                        </tr>");
        }
        ?>

    </table>
<br><br>

    <!-- ASFALISTIKI_ETAIRIA Table -->
    <h2>ASFALISTIKI_ETAIRIA Table</h2>
    <table border=2 align=center>
        <tr>
            <th width=80>ONOMA_ASFALISTIKIS</th>
            <th width=80>PHONE_ASF_ETAIRIAS</th>
            <th width=80>LOCATION</th>
        </tr>

        <?php
        $qry = "SELECT * FROM ASFALISTIKI_ETAIRIA";
        $result = mysqli_query($conne, $qry);

        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
            echo ("<tr>
                            <td><div align=\"center\">$row[0]</div></td>
                            <td><div align=\"center\">$row[1]</div></td>
                            <td><div align=\"center\">$row[2]</div></td>
                        </tr>");
        }
        ?>

    </table>
<br><br>

    <!-- SUMBOLAIO_ASFALIAS Table -->
    <h2>SUMBOLAIO_ASFALIAS Table</h2>
        <table border=2 align=center>
            <tr>
                <th width="80">KWDIKOS SUMBOLAIOU</th>
                <th width=80>EIDOS_ASF</th>
                <th width=80>COST_ASF</th>
                <th width=80>HMER_ASF</th>
                <th width=80>HMER_LIKSIS</th>
                <th width=80>KODOXI</th>
                <th width=80>ONOMA_ASF_ETAIRIAS</th>
                <th width=80>Days Left</th>
            </tr>

            <?php
            $qry = "SELECT * FROM SUMBOLAIO_ASFALIAS";
            $result = mysqli_query($conne, $qry);

            while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                $hmer_asf = strtotime($row[3]); // Convert HMER_ASF to timestamp
                $hmer_liksis = strtotime($row[4]); // Convert HMER_LIKSIS to timestamp
                $current_date = strtotime(date("Y-m-d")); // Convert current date to timestamp

                $days_left = floor(($hmer_liksis - $current_date) / (60 * 60 * 24));

                echo ("<tr>
                    <td><div align=\"center\">$row[0]</div></td>
                    <td><div align=\"center\">$row[1]</div></td>
                    <td><div align=\"center\">$row[2]</div></td>
                    <td><div align=\"center\">$row[3]</div></td>
                    <td><div align=\"center\">$row[4]</div></td>
                    <td><div align=\"center\">$row[5]</div></td>
                    <td><div align=\"center\">$row[6]</div></td>
                    <td><div align=\"center\">");

                if ($days_left > 0) {
                    echo $days_left . " days left";
                } else {
                    echo "Expired";
                }

                echo "</div></td>
                </tr>";
            }
            ?>

        </table>


        <br><br>

    <!-- PELATHS Table -->
    <h2>PELATHS Table</h2>
    <table border=2 align=center>
        <tr>
            <th width=80>NAME_PELATHS</th>
            <th width=80>AR_TAYTOTHTAS</th>
            <th width=80>PHONE_PELATHS</th>
            <th width=80>HMEROMINIA_EGGRAFHS</th>
            <th width=80>KODOXI</th>
        </tr>

        <?php
        $qry = "SELECT * FROM PELATHS";
        $result = mysqli_query($conne, $qry);

        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
            echo ("<tr>
                            <td><div align=\"center\">$row[0]</div></td>
                            <td><div align=\"center\">$row[1]</div></td>
                            <td><div align=\"center\">$row[2]</div></td>
                            <td><div align=\"center\">$row[3]</div></td>
                            <td><div align=\"center\">$row[4]</div></td>
                        </tr>");
        }
        ?>

    </table>
<br><br>

    <!-- ISTORIKO Table -->
    <h2>ISTORIKO Table</h2>
    <table border=2 align=center>
        <tr>
            <th width=80>KWDIKOS_ISTORIKOU</th>
            <th width=80>AR_TAYTOTHTAS_PELATHS</th>
            <th width=80>DESCISTORIKO</th>
        </tr>

        <?php
        $qry = "SELECT * FROM ISTORIKO";
        $result = mysqli_query($conne, $qry);

        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
            echo ("<tr>
                            <td><div align=\"center\">$row[0]</div></td>
                            <td><div align=\"center\">$row[1]</div></td>
                            <td><div align=\"center\">$row[2]</div></td>
                        </tr>");
        }
        ?>

    </table>
<br><br>

    <!-- ETAIRIA Table -->
    <h2>ETAIRIA Table</h2>
    <table border=2 align=center>
        <tr>
            <th width=80>ONOMA</th>
            <th width=80>CODE</th>
            <th width=80>ADDRESS</th>
        </tr>

        <?php
        $qry = "SELECT * FROM ETAIRIA";
        $result = mysqli_query($conne, $qry);

        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
            echo ("<tr>
                            <td><div align=\"center\">$row[0]</div></td>
                            <td><div align=\"center\">$row[1]</div></td>
                            <td><div align=\"center\">$row[2]</div></td>
                        </tr>");
        }
        ?>

    </table>
    <button onclick="location.href = 'index.php';"> Επιστροφή </button>
</div>
    <script>
        // Fading in the content
        document.addEventListener("DOMContentLoaded", function () {
            const center = document.getElementById('center');
            setTimeout(function () {
                center.style.opacity = 1;
            }, 500);
        });
    </script>

    </body>
</html>
