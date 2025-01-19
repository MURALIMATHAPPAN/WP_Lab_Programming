<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dynamic Input Fields</title>
</head>
<body>

<form method="post" action="">
    <label for="numberInput">Enter a number:</label>
    <input type="number" id="numberInput" name="numberInput" value="<?php echo isset($_POST['numberInput']) ? $_POST['numberInput'] : ''; ?>" min="0">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = isset($_POST['numberInput']) ? (int)$_POST['numberInput'] : 0;

    // Check if the input is greater than or equal to 2, modify this condition as per your needs
    if ($input >= 2) {
        echo '<form method="post" action="">';
        echo '<label for="secondInput">You entered a number greater than or equal to 2, please enter another number:</label>';
        echo '<input type="number" id="secondInput" name="secondInput" min="0">';
        echo '<input type="submit" value="Submit">';
        echo '</form>';
    }

    // Check if the second input is set and display prime numbers and Fibonacci series
    if (isset($_POST['secondInput'])) {
        $limit = (int)$_POST['secondInput'];
        $primes = generatePrimes($limit);
        $terms = 10; // Set the number of terms for Fibonacci series
        $fibonacciSeries = generateFibonacci($terms);

        echo "Prime numbers up to $limit: ";
        echo implode(", ", $primes);
        echo "<br>";

        echo "Fibonacci series with $terms terms: ";
        echo implode(", ", $fibonacciSeries);
    }
}

function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function generatePrimes($limit) {
    $primes = [];
    for ($i = 2; $i <= $limit; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

function generateFibonacci($n) {
    $fib = [0, 1];
    if ($n < 1) {
        return [];
    } elseif ($n == 1) {
        return [0];
    } elseif ($n == 2) {
        return $fib;
    }

    for ($i = 2; $i < $n; $i++) {
        $fib[] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}
?>

</body>
</html>
