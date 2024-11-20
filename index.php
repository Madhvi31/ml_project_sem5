<?php
// index.php

// PHP code block
$title = "Welcome to Future Focus!";
$description = "Your journey towards a brighter future begins here.";
$currentYear = date("Y");

// Output PHP content
echo "<h1>$title</h1>";
echo "<p>$description</p>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Focus</title>
    <style>
        /* CSS Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fa;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: #007bff;
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2em;
            color: #555;
        }

        .button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #218838;
        }

        footer {
            position: absolute;
            bottom: 10px;
            font-size: 0.9em;
            color: #888;
        }
    </style>
</head>
<body>
    <div>
        <?php
        echo "<h1>$title</h1>";
        echo "<p>$description</p>";
        ?>
        <a href="#" class="button">Get Started</a>
    </div>
    <footer>
        <p>&copy; <?php echo $currentYear; ?> Future Focus. All rights reserved.</p>
    </footer>
</body>
</html>
