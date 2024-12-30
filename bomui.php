<?php 
session_start();
$loggedinuser = $_SESSION['username'];
if(!$loggedinuser)
{
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next-Level UI</title>
    <!-- Link to Google Fonts for modern typography -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Link to Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background: #f4f7fc;
            margin: 0;
            padding: 0;
            overflow: hidden; /* Hide any overflow in the body */
        }

        /* Navbar Styling */
        nav {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            padding: 10px 20px; /* Reduced padding for a more compact navbar */
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden; /* Prevent navbar overflow */
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        nav ul li a:hover {
            color: #ffdf00;
        }
        .username {
            color: white;
            font-size: 20px;
            font-weight: 600;
        }
        .icon {
            margin-right: 10px;
        }

        /* Layout Styling */
        .container {
            display: flex;
            justify-content: space-between;
            margin: 30px;
            overflow: hidden; /* Prevent overflow of the container */
        }

        /* Left Section */
        .left-section {
            width: 25%;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            height: 80vh;
            overflow-y: auto;
        }

        /* Middle Section */
        .middle-section {
            width: 50%;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            height: 80vh;
            overflow-y: auto;
        }

        /* Right Section */
        .right-section {
            width: 20%;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Button Styling */
        /* CSS Variables for button customization */
        :root {
            --button-bg-color: #2575fc; /* Matches navbar blue */
            --button-bg-color-hover: #6a11cb; /* Matches navbar purple */
            --button-text-color: white;
            --button-padding: 12px 20px;
            --button-font-size: 16px;
            --button-border-radius: 5px;
        }

        button {
            background-color: var(--button-bg-color);
            color: var(--button-text-color);
            border: none;
            padding: var(--button-padding);
            font-size: var(--button-font-size);
            cursor: pointer;
            border-radius: var(--button-border-radius);
            transition: background-color 0.3s ease, transform 0.2s ease;
            width: 100%;
            margin: 10px 0;
        }

        /* Button Hover Effect */
        button:hover {
            background-color: var(--button-bg-color-hover);
            transform: scale(1.05);
        }

        /* Form Input Styling */
        input[type="text"], input[type="password"], input[type="file"] {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
            font-size: 16px;
            background: #f9f9f9;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus, input[type="password"]:focus, input[type="file"]:focus {
            border-color: #2575fc;
            outline: none;
        }

        /* Mobile Responsiveness */
        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column;
                margin: 20px;
            }
            .left-section, .middle-section, .right-section {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

<!-- Navbar Section -->
<nav>
    <ul>
        <li><button onclick="expandall()">Expand All</button></li>
        <li><button onclick="collapseall()">Collapse All</button></li>
        <li><button onclick="moveDown()">Move Down</button></li>
        <li><button onclick="Logout()">Logout</button></li>
    </ul>
    <h1 class="username"><i class="fas fa-user-circle icon"></i><?php echo $loggedinuser ?></h1>
</nav>

<!-- Container for the layout -->
<div class="container">
    <!-- Left Section (BOM Structure) -->
    <div class="left-section">
        <?php include 'bomlogic.php' ?>
    </div>

    <!-- Middle Section (Content) -->
    <div class="middle-section">
        <div id="content"></div>
    </div>

    <!-- Right Section (Upload and Search) -->
    <div class="right-section">
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <input type="file" placeholder="Upload Zip File" name="zip_file"/>   
            <input type="password" placeholder="Password"/>
            <button type="submit" name="upload">Upload</button>
        </form>

        <div>
            <input type="text" id="t8" placeholder="Search What You Want"/>
            <button onclick="search()">Search</button>
        </div>
    </div>
</div>

<script src="js/bomui.js"></script>
</body>
</html>
