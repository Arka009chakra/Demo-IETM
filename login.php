<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next-Level UI</title>
    <!-- Link to Google Fonts for modern typography -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc); /* Beautiful gradient background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        /* Outer Flex Container */
        .outer-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px; /* Space between forms */
            padding: 20px;
            width: 100%;
            max-width: 900px;
            box-sizing: border-box;
        }

        /* Form Container with Neumorphism effect */
        .form-container {
            background-color: #f5f5f5;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 8px 8px 15px rgba(0, 0, 0, 0.1), -8px -8px 15px rgba(255, 255, 255, 0.3); /* Neumorphism effect */
            width: 100%;
            max-width: 420px;
            text-align: center;
            position: relative;
            transition: transform 0.3s ease;
        }

        .form-container:hover {
            transform: scale(1.05);
        }

        h2 {
            font-size: 26px;
            color: #333;
            margin-bottom: 30px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 600;
        }

        /* Input Styling with Neumorphism effect */
        input[type="text"] {
            width: 100%;
            padding: 16px;
            margin: 15px 0;
            border: none;
            border-radius: 15px;
            background: #e8e8e8;
            font-size: 18px;
            box-sizing: border-box;
            transition: all 0.3s ease;
            box-shadow: inset 5px 5px 10px rgba(0, 0, 0, 0.1), inset -5px -5px 10px rgba(255, 255, 255, 0.5); /* Neumorphism */
        }

        input[type="text"]:focus {
            outline: none;
            background: #fff;
            box-shadow: inset 5px 5px 10px rgba(0, 0, 0, 0.15), inset -5px -5px 10px rgba(255, 255, 255, 0.5);
        }

        /* Button Styling with smooth hover animation */
        button {
            width: 100%;
            padding: 18px;
            background-color: #2575fc;
            color: white;
            border: none;
            border-radius: 20px;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1), 0 -8px 15px rgba(255, 255, 255, 0.3); /* Neumorphism */
        }

        button:hover {
            background-color: #6a11cb;
            transform: translateY(-5px);
        }

        button:active {
            transform: translateY(2px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .outer-container {
                flex-direction: column; /* Stack forms vertically */
                align-items: center;
            }

            .form-container {
                width: 100%;
                max-width: 400px;
            }

            h2 {
                font-size: 22px;
            }

            input[type="text"], button {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="outer-container">
        <div class="form-container">
            <h2>Login</h2>
            <form method="POST">
                <input type="text" id="t3" placeholder="Username" required />
                <input type="text" id="t4" placeholder="Password" required />
                <button type="button" onclick="log()">Login</button>
            </form>
        </div>
        <div class="form-container">
            <h2>Change Password</h2>
            <form method="POST">
                <input type="text" id="t5" placeholder="Username" required />
                <input type="text" id="t6" placeholder="New Password" required />
                <button type="button" onclick="change()">Change Password</button>
            </form>
        </div>
    </div>
	<script src="js/login.js"></script>
</body>
</html>
