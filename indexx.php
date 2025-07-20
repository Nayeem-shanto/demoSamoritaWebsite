<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MH SAMORITA HOSPITAL & MEDICAL COLLEGE</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #26ace2, #2c3691); 
            position: relative;
            overflow: hidden;
        }
        .logo-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }
        .logo-container img {
            width: 400px; /* Adjust size as needed */
            opacity: 0.9;
        }
        .message-container {
            position: absolute;
            top: 20%;
            width: 100%;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px 0;
        }
        .message {
            font-size: 28px;
            font-weight: bold;
            color: #fff;
            margin: 0;
        }
        .container {
            width: 100%;
            height: 100%;
            display: flex;
        }
        .section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            font-size: 24px;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s ease;
            position: relative;
        }
        .section a {
            text-decoration: none;
            color: inherit;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }
        .section span {
            position: relative;
            z-index: 1;
            font-size: 32px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .hospital {
            background-color: rgba(0, 0, 0, 0); /* Transparent for gradient */
        }
        .medical {
            background-color: rgba(0, 0, 0, 0); /* Transparent for gradient */
        }
        footer {
            position: absolute;
            bottom: 10px;
            width: 100%;
            text-align: center;
            font-size: 14px;
            color: #fff;
        }
    </style>
<!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="assets/img/fevicon.png" type="image">

</head>
<body>
    <div class="logo-container">
        <img src="Logo-01.png" alt="MH Samorita Hospital & Medical College Logo">
    </div>
    <div class="message-container">
        <p class="message" id="welcomeMessage"></p>
    </div>
    <div class="container">
        <!-- Left Side -->
        <div class="section hospital">
            <a href="index-4.php" target="_blank"></a>
            <span>HOSPITAL</span>
        </div>
        <!-- Right Side -->
        <div class="section medical">
            <a href="index-8.php" target="_blank"></a>
            <span>MEDICAL COLLEGE</span>
        </div>
    </div>
    <script>
        const message = "WELCOME TO MH SAMORITA HOSPITAL & MEDICAL COLLEGE";
        const messageElement = document.getElementById("welcomeMessage");
        let index = 0;

        function typeMessage() {
            if (index < message.length) {
                messageElement.textContent += message[index];
                index++;
                setTimeout(typeMessage, 60); 
            }
        }

        window.onload = typeMessage;
    </script>
    <footer>
        <p>&copy; 2025 Planet Information Technology Solutions Limited. All rights reserved.</p>
    </footer>
</body>
</html>
