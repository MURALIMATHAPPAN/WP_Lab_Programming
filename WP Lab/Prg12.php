<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Exception Handling with User Input</title>
</head>
<body>
    <h1>PHP Exception Handling Example</h1>

    <!-- Form for Division -->
    <form method="post">
        <label for="numerator">Numerator:</label>
        <input type="number" id="numerator" name="numerator" required>
        <br>
        <label for="denominator">Denominator:</label>
        <input type="number" id="denominator" name="denominator" required>
        <br>
        
        <!-- Form for Date Format Check -->
        <label for="dateString">Date (YYYY-MM-DD):</label>
        <input type="text" id="dateString" name="dateString" required pattern="\d{4}-\d{2}-\d{2}">
        <br>
        <input type="submit" value="Submit">
    </form>

    <h2>Results</h2>
    <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                // Retrieve and validate input values for division
                $numerator = $_POST['numerator'];
                $denominator = $_POST['denominator'];

                // Check for division by zero
                if ($denominator == 0) {
                    throw new Exception("Division by zero error");
                }

                // Perform division
                $result = $numerator / $denominator;

                // Display result in a text box
                echo 'Result of division: <input type="text" value="' . $result . '" readonly><br>';

                // Retrieve and validate the date string
                $dateString = $_POST['dateString'];
                $dateFormat = 'Y-m-d';

                // Create a DateTime object from the provided date string
                $date = DateTime::createFromFormat($dateFormat, $dateString);

                // Check if the date format is correct
                if (!$date || $date->format($dateFormat) !== $dateString) {
                    throw new Exception("Invalid date format");
                }

                // Display valid date message in a text box
                echo 'Date is valid: <input type="text" value="' . $dateString . '" readonly>';
            } catch (Exception $e) {
                // Catch and display the error message
                echo 'Error: <input type="text" value="' . $e->getMessage() . '" readonly>';
            }
        }
        ?>
    </p>
</body>
</html>
