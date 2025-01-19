<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern Display</title>
    <style>
        .pattern {
            font-family: monospace;
            white-space: pre;
            line-height: 1.2; /* Adjust line height if needed */
        }
    </style>
</head>
<body>
    <h1>Pattern Display</h1>
    <div class="pattern">
        <?php
        $rows = 5;

        // Outer loop for the number of rows
        for ($i = $rows; $i >= 1; $i--) {
            // Print spaces
            for ($j = $rows; $j > $i; $j--) {
                echo "&nbsp;";
            }
            
            // Print asterisks
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            
            // Move to the next line
            echo "<br>";
        }
        ?>
    </div>
</body>
</html>
