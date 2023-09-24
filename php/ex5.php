<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h1>Prime Number Checker</h1>
    <form method="post" action="">
        <label for="number">Enter a positive integer:</label>
        <input type="number" id="number" name="number" required min="1">
        <input type="submit" value="Check">
    </form>

    <?php
    function isPrime($n) {
        if ($n <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }

        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        
        if (is_numeric($number) && $number > 0) {
            if (isPrime(intval($number))) {
                echo "$number is a prime number.";
            } else {
                echo "$number is not a prime number.";
            }
        } else {
            echo "Please enter a positive integer.";
        }
    }
    ?>
</body>
</html>



