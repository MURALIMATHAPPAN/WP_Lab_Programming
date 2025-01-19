<?php
try {
    $numerator = 10;
    $denominator = 5;

    // Check for division by zero
    if ($denominator === 0) {
        throw new Exception("Division by zero error");
    }

    // Perform division
    $result = $numerator / $denominator;
    echo "Result of division: " . $result . "<br>";

    // Date format validation
    $dateString = '2023-12-25';
    $dateFormat = 'Y-m-d';

    // Create date from format
    $date = DateTime::createFromFormat($dateFormat, $dateString);

    // Check if the date format is correct
    if (!$date || $date->format($dateFormat) !== $dateString) {
        throw new Exception("Invalid date format");
    }

    echo "Date is valid: " . $dateString;

} catch (Exception $e) {
    // Display error message
    echo "Error: " . $e->getMessage();
}
?>
