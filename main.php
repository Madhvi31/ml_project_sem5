<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intelligent Career Guidance System</title>
    <style>
        /* General Styles */
    /* General Styles */
body {
    background-image: url("https://tse3.mm.bing.net/th?id=OIP.tzXxfoMP09qPniHHgdZfZAHaCm&pid=Api&P=0&h=180"); /* Sets the background image */
    background-repeat: no-repeat; /* Prevents repeating the image */
    background-size: cover; /* Scales the image to cover the entire area */
    background-position: center; /* Centers the image */
    background-attachment: fixed; /* Keeps the background fixed during scrolling */
    background-color: #f0f0f0; /* Fallback color if the image isn't loaded */
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif; /* Changed to a more modern font */
    color: #333;
    line-height: 1.6; /* Improved readability */
}

.white-text {
    color: #fff;
}

.hero-area {
    position: relative;
}

.bg-image {
    background-size: cover;
    background-position: center;
}

.overlay {
    background: rgba(0, 0, 0, 0.6); /* Slightly darker overlay for better text contrast */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transition: background 0.3s ease; /* Smooth transition for overlay */
}

.home-wrapper {
    position: relative;
    z-index: 2;
    text-align: left;
    padding: 50px 20px;
}

/* Navigation Bar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: rgba(51, 51, 51, 0.9); /* Semi-transparent background */
    padding: 15px 30px; /* Increased padding for better spacing */
    position: sticky;
    top: 0;
    z-index: 100;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
}

.navbar a {
    color: #fff;
    text-decoration: none;
    margin: 0 20px; /* Increased spacing between links */
    font-size: 18px; /* Slightly larger font size */
    transition: color 0.3s ease; /* Smooth color transition */
}

.navbar a:hover {
    color: #f1c40f; /* Bright color on hover */
}

/* Buttons */
.main-button {
    background: #f1c40f;
    color: #333;
    padding: 12px 25px; /* Increased padding for a more substantial button */
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    font-size: 18px; /* Increased font size */
    transition: background 0.3s ease, color 0.3s ease; /* Smooth transition */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
}

.main-button:hover {
    background: #d4ac0d; /* Darker shade on hover */
    color: #fff;
}

/* Features Section */
.feature {
    text-align: center;
    margin: 40px 0; /* Increased margin for better spacing */
}

.feature-icon {
    font-size: 60px; /* Increased icon size */
    color: #f1c40f;
    transition: transform 0.3s ease; /* Smooth scale effect */
}

.feature-icon:hover {
    transform: scale(1.1); /* Slightly enlarges icon on hover */
}

.feature h4 {
    margin: 15px 0; /* Increased margin for better spacing */
    font-size: 24px; /* Increased font size for headings */
    color: #333;
}

.feature p {
    font-size: 16px; /* Increased font size for better readability */
    color: #555;
}

/* Call to Action Section */
.section {
    padding: 80px 20px; /* Increased padding for a more spacious feel */
    position: relative;
    background-color: rgba(255, 255, 255, 0.9); /* Light background for contrast */
    border-radius: 10px; /* Rounded corners for a modern look */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
}

.section-hr {
    border: 1px solid #ddd;
    margin: 40px 0; /* Added margin for spacing */
}
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#why-us">Why Us</a>
        <a href="blog.php">Blog</a>
        <a href="courses.php">Courses</a>
        <a href="login.php">Login</a>
    </div>

    <!-- Home Section -->
    <div id="home" class="hero-area">
        <div class="bg-image bg-parallax overlay" style="background-image:url('./img/bg.jpg'); width:100%; height: 656px;"></div>
        <div class="home-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="white-text" style="font-size: 40px; margin-top: 20px; margin-bottom: 50px;">
                            Intelligent Career Guidance System
                        </h1>
                        <?php
                        // Check if the user is logged in, if not then redirect to login page
                        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true): ?>
                            <p class="lead white-text" style="margin-left: 5px;">
                                <b>Discover yourself<br>Take the test to find the perfect role for you after Engineering</b>
                            </p>
                            <a class="main-button icon-button" href="login.php">Get Started!</a>
                        <?php else: ?>
                            <p class="lead white-text" style="margin-left: 5px;">
                                <b>Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</b><br>
                                Discover yourself,<br>Take the test to find the perfect role for you after Engineering
                            </p>
                            <a class="main-button icon-button" href="http://127.0.0.1:5500/img/Intelligent%20Career%20Guidance.html">Get Started!</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Us Section -->
    <div id="why-us" class="section">
        <div class="container">
            <div class="row">
                <div class="section-header text-center">
                    <h2 style="margin-top: 100px; font-size: 45px;">Welcome to Career.ly</h2>
                    <p class="lead">
                        <b style="color: rgb(56, 48, 48);">Career.ly</b> is a one-stop destination
                        in helping you understand yourself, find the best career for you,
                        and providing all the resources in the process.
                    </p>
                </div>
            </div>
            <div class="row">
                <!-- Feature 1 -->
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fa fa-search feature-icon"></i>
                        <div class="feature-content">
                            <?php if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true): ?>
                                <a href="login.php"><h4>Career Prediction</h4></a>
                            <?php else: ?>
                                <a href="http://127.0.0.1:5000/"><h4>Career Prediction</h4></a>
                            <?php endif; ?>
                            <p>Take the test to find the perfect role for you after Engineering.</p>
                        </div>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fa fa-book feature-icon"></i>
                        <div class="feature-content">
                            <a href="blog.php">
                                <h4>Knowledge Network</h4>
                            </a>
                            <p>Gain knowledge through various sources, like informational links and study materials.</p>
                        </div>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fa fa-laptop feature-icon"></i>
                        <div class="feature-content">
                            <a href="courses.php">
                                <h4>Online Courses</h4>
                            </a>
                            <p>Links to relevant online courses.</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="section-hr">
        </div>
    </div>

    <!-- Call To Action Section -->
    <div id="cta" class="section" style="height: 400px;">
        <div class="bg-image bg-parallax overlay" style="background-image:url('./img/bgmid.jpg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true): ?>
                        <h2 class="white-text" style="font-size: 30px; width: 700px;">
                            Ready to make the best career choice?
                        </h2>
                        <a class="main-button icon-button" href="login.php">Join Now</a>
                    <?php else: ?>
                        <h2 class="white-text" style="font-size: 30px; width: 700px;">
                            Welcome back, <?php echo htmlspecialchars($_SESSION["username"]); ?>!
                        </h2>
                        <a class="main-button icon-button" href="http://127.0.0.1:5000/">Continue</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
