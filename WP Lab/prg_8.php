<?php
// Array holding colors associated with each day of the week
$dayColors = [
    'Sunday' => '#ffcccb',    // Light red
    'Monday' => '#ffebcd',    // Blanched almond
    'Tuesday' => '#add8e6',   // Light blue
    'Wednesday' => '#98fb98', // Pale green
    'Thursday' => '#f0e68c',  // Khaki
    'Friday' => '#dda0dd',    // Plum
    'Saturday' => '#c0c0c0'   // Silver
];

// Get the current day of the week
$currentDay = date('l');

// Default background color
$backgroundColor = '#ffffff';

// Check if the current day is in the array and set the background color
if (array_key_exists($currentDay, $dayColors)) {
    $backgroundColor = $dayColors[$currentDay];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Color Based on the Day of the Week</title>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
        }
    </style>
</head>
<body>
    <h1>Welcome! Today is <?php echo $currentDay; ?></h1>
</body>
</html>
