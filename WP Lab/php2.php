<?php
session_start();

function generateCaptcha() {
    $length = 6; // Length of the captcha code
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'; // Characters to use in captcha
    $captcha = ''; // Initialize captcha string
    $charLength = strlen($characters); // Get the length of the characters string

    // Loop to generate the captcha code
    for ($i = 0; $i < $length; $i++) {
        $captcha .= $characters[rand(0, $charLength - 1)]; // Append a random character from the characters string
    }

    // Store the captcha in session for later validation
    $_SESSION["captcha"] = $captcha;
    return $captcha;
}

// Generate and display the captcha code
$captchaCode = generateCaptcha();
echo $captchaCode;
?>
