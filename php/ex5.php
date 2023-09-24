<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h1>Factorial Calculator</h1>
    <form method="post" action="">
        <label for="number">Enter a positive integer:</label>
        <!-- Add inputmode and pattern attributes -->
        <input type="text" id="number" name="number" required inputmode="numeric" pattern="[0-9]*">
        <input type="submit" value="Calculate Factorial">
    </form>

    <?php
    function calculateFactorial($n) {
        if ($n < 0) {
            return "Factorial is not defined for negative numbers.";
        } elseif ($n == 0 || $n == 1) {
            return 1; // Factorial of 0 and 1 is 1
        } else {
            return $n * calculateFactorial($n - 1);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);
        if ($number < 0) {
            echo "Factorial is not defined for negative numbers.";
        } else {
            $factorial = calculateFactorial($number);
            echo "The factorial of $number is $factorial";
        }
    }
    ?>
</body>
</html>


