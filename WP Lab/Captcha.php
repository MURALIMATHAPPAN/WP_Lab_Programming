<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CAPTCHA Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .captcha-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .captcha {
            font-size: 24px;
            letter-spacing: 4px;
            font-weight: bold;
            margin-bottom: 10px;
            padding: 10px;
            color: #333;
            border: 1px solid #ddd;
            display: inline-block;
            background-color: #e0e7ff;
        }
        .input-group {
            margin-bottom: 15px;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 200px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="captcha-container">
        <h2>Enter the CAPTCHA</h2>
        
        <?php
        // Start the session to store the CAPTCHA code
        session_start();

        // Function to generate a CAPTCHA code
        function generateCaptcha() {
            $length = 6;  // Length of the CAPTCHA
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';  // Characters to use
            $captcha = '';  // Initialize the CAPTCHA string
            $charLength = strlen($characters);  // Get the length of the characters string

            // Generate the CAPTCHA by randomly selecting characters
            for ($i = 0; $i < $length; $i++) {
                $captcha .= $characters[rand(0, $charLength - 1)];
            }

            // Store the generated CAPTCHA code in the session
            $_SESSION["captcha"] = $captcha;
            return $captcha;
        }

        // Call the function and store the CAPTCHA code
        $captchaCode = generateCaptcha();
        ?>

        <!-- Display the generated CAPTCHA -->
        <div class="captcha"><?php echo $captchaCode; ?></div>

        <!-- Form to submit the CAPTCHA code -->
        <form method="post" action="validate_captcha.php">
            <div class="input-group">
                <input type="text" name="user_captcha" placeholder="Enter CAPTCHA" required>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
