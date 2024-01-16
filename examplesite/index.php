<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Διαδικτυακή Εφαρμογή</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
            background: linear-gradient(to bottom, #1a1a1a, #333333); /* Gradient background */
            color: #e6e6e6; /* Light gray text */
        }

        nav {
            background-color: #262626; /* Slightly darker background color for the navigation bar */
            padding: 25px 0;
            width: 100%;
            text-align: center;
            position: fixed;
            top: 0;
            z-index: 1;
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
    </style>
</head>

<body>

<?php include 'nav.php'; ?>
<div class="parallax"></div>

<div id="center">
<br><br><br>
    <h1>Διαδικτυακή Εφαρμογή</h1>


    <button onclick="location.href='insert.php';">Εισαγωγή</button>
    <button onclick="location.href='delete.php';">Διαγραφή</button>
    <button onclick="location.href='select.php';">Εμφάνιση</button>
    <button onclick="location.href='update.php';">Επεξεργασία</button>


</div>

<footer id="cop" style="background-color: #262626; padding: 20px; color: #b3b3b3; text-align: center; width: 100%; position: fixed; bottom: 0;">
    <p>&copy; 2023 Team - 17	. All rights reserved.</p>
    <p>Contact: info@yourwebsite.com</p>
</footer>

<script>
    // Fading in the content and buttons
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
</script>

</body>

</html>
