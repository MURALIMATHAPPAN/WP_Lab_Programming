    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Remove Duplicates from List</title>
    </head>
    <body>

    <form method="post" action="">
        <label for="numbersInput">Enter numbers separated by commas:</label>
        <input type="text" id="numbersInput" name="numbersInput" value="<?php echo isset($_POST['numbersInput']) ? $_POST['numbersInput'] : ''; ?>">
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user input
        $input = $_POST['numbersInput'];

        // Convert the input string into an array by splitting with commas
        $nums = explode(',', str_replace(' ', '', $input)); // Remove spaces and split by commas

        // Convert each value to an integer
        $nums = array_map('intval', $nums);

        // Print the original array
        echo "<pre>Original array: " . print_r($nums, true) . "</pre>"; 
        echo "After removing duplicates:<br>";

        // Call the function to remove duplicates and print the result
        echo "<pre>" . print_r(remove_duplicates_list($nums), true) . "</pre>"; 
    }

    function remove_duplicates_list($list1) { 
        // Use array_values to re-index the array after removing duplicates
        $nums_unique = array_values(array_unique($list1)); 
        return $nums_unique; 
    } 
    ?>

    </body>
    </html>
