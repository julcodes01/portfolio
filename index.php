<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Second Webpage</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
           /* background-color: yellow;  Set background color */
            background-image: url('smart tech.jpg'); /* Corrected property name */
            background-size: cover; /* Ensure the background image covers the entire body */
            font-family: Arial, sans-serif; /* Set a default font */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */

        }

        h1 {
            color: purple;
            background: pink;
            padding: 10px; /* Add some padding */
            text-align: center; /* Center the heading */
            
        }

        h2 {
            color: pink;
            background: purple;
            padding: 10px; /* Add some padding */
            text-align: center; /* Center the subheading */
        }

        nav {
            background-color: #333; /* Dark background for the navbar */
            padding: 10px; /* Add some padding */
        }

        .navbar-brand {
            color: white; /* White text for navbar links */
            margin: 0 15px; /* Space between links */
            text-decoration: none; /* Remove underline from links */
        }

        .navbar-brand:hover {
            text-decoration: underline; /* Underline on hover */
        }

        img {
            height: 100px;
            margin: 10px; /* Add some margin around images */
        }

        ul {
            list-style-type: none; /* Remove bullet points */
            padding: 0; /* Remove padding */
        }

        /* Optional: Style for the paragraph */
        p {
            text-align: center; /* Center the paragraph text */
            font-size: 18px; /* Increase font size */
        }
    </style>
</head>
<body>
    <h2>ELECTRICITY USAGE TREND ANALYSIS IN SMART HOMES</h2>
    <a href="index.html">Return Home</a>
    
    <nav class="navbar">
        <a class="navbar-brand" href="index.php">Dashboard</a>
        <a class="navbar-brand" href="login.php">Login</a>  
        <a class="navbar-brand" href="about.php">About</a>
        <a class="navbar-brand" href="contact.php">Contact</a>
        <a class="navbar-brand" href="signup.php">Sign Up</a>
    </nav>

    <div style="text-align: center;"> <!-- Center images -->
        <img src="h.s" alt="h.s">
        <img src="smart house.jpg" alt="smart house">
        <img src="modern smart home.jpg" alt="modern smart home">
        <img src="tech home.jpg" alt="tech home">
    </div>

    <h1>link to my second web page</h1>
    <p><b>Analysis of electicity consumption.<b></p>

      

    <footer class="footer">
        <div class="container">
        <p>&copy;  2025@juliet.All  rights reserved </p>
        <ul>
            <li><a  href="terms.php">terms  of services</a></li>
            <li><a  href="privacy.php">privacy policy</a></li>
    </ul>
    </div>
    </footer>
            
</body>
</html>
