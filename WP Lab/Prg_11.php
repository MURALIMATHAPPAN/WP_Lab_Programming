<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Pattern</title>
    <style>
        .star-pattern {
            font-family: monospace;
            line-height: 1.5;
            white-space: pre;
        }
    </style>
</head>
<body>
    <div class="star-pattern">
        <?php
            // Loop to print the star pattern
            for ($i = 5; $i >= 1; $i--) {
                // Print stars for each row
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        ?>
    </div>
</body>
</html>
