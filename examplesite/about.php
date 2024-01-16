<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>About Us - Διαδικτυακή Εφαρμογή</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(to bottom, #1a1a1a, #333333);
            color: #e6e6e6;
            overflow-x: hidden;
        }
        #center {
            text-align: center;
            padding: 40px;
            border-radius: 10px;
            background-color: #333333;
            max-width: 500px;
            width: 100%;
            opacity: 0;
            transition: opacity 1s ease, box-shadow 0.3s ease;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 2;
            margin-bottom: 200px; /* Adjusted margin-bottom to create space for both nav and footer */
        }

        h1 {
            color: #e6e6e6; /* Light gray text */
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Text shadow for emphasis */
        }

        button {
            background-color: #2c3e50;
            color: white;
            padding: 15px 30px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            opacity: 0;
            transition: opacity 0.5s ease, transform 0.3s ease;
            position: relative; /* Add this line */
            z-index: 2; /* Add this line */
        }

        button:hover {
            background-color: #1f2c38;
            transform: scale(1.1);
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
            z-index: -2; /* Change this line */
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
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
        }
        footer {
            background-color: #262626;
            padding: 20px;
            color: #b3b3b3;
            text-align: center;
            width: 100%;
            /* position: fixed; */ /* Remove this line */
            bottom: 0;
        }

    </style>
</head>

<body>

<?php include 'nav.php'; ?>

<div class="parallax"></div>
<br><br>
<div id="center">

    <h1>About Us</h1>
    <img src="team.jpg" alt="About Us Image" style="width: 100%; border-radius: 10px; margin-bottom: 20px;">
    <p>Welcome to our website. We are dedicated to providing innovative solutions and...</p>
    <p>Our team of experts is passionate about delivering high-quality products/services...</p>
    <!-- Add more content about your organization or project here -->
</div>

<footer style="background-color: #262626; padding: 20px; color: #b3b3b3; text-align: center; width: 100%; position: fixed; bottom: 0;">
    <p>&copy; 2023 Team - 17	. All rights reserved.</p>
    <p>Contact: @.com</p>
</footer>

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
</script>

</body>

</html>
