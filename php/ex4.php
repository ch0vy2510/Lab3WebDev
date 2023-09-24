<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h1>Factorial Calculator</h1>
    <form method="post" action="">
        <label for="number">Enter a positive integer:</label>
        <input type="number" id="number" name="number" required min="0">
        <input type="submit" value="Calculate Factorial">
    </form>

    <?php
    function calculateFactorial($n) {
        if ($n == 0 || $n == 1) {
            return 1; 
        } else {
            return $n * calculateFactorial($n - 1);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);
        $factorial = 1;

        if ($number < 0) {
            echo "Factorial is not defined for negative numbers.";
        } elseif ($number > 1) {
            $factorial = calculateFactorial($number);
        }

        echo "The factorial of $number is $factorial";
    }
    ?>
</body>
</html>


   
