<style>

    nav {
        background-color: #262626;
        padding: 25px 0;
        width: 100%;
        text-align: center;
        position: fixed;
        top: 0;
        z-index: 3;
    }


    nav a {
        color: #b3b3b3;
        text-decoration: none;
        margin: 0 15px;
        font-size: 18px;
        transition: color 0.3s ease;
        position: relative; /* Add this line */
        z-index: 2; /* Add this line */
    }
    nav a:hover {
        color: #ffffff; /* Change text color on hover */
    }

    nav a:active {
        color: #b3b3b3;
    }
</style>

<nav>
    <a href="./index.php">Home</a>
    <a href="./about.php">About</a>
    <a href="#">Contact</a>
</nav>