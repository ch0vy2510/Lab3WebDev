<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h1>Prime Number Checker</h1>
    <form method="post" action="" onsubmit="return validateForm()">
        <label for="number">Enter a positive integer:</label>
        <input type="text" id="number" name="number" required>
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
        
        // Check if input is a positive integer
        if (ctype_digit($number) && $number > 0) {
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

    <script>
        function validateForm() {
            var numberInput = document.getElementById("number");
            var numberValue = numberInput.value;
            
            // Check if the input is a positive integer using a regular expression
            var pattern = /^[1-9]\d*$/;
            if (!pattern.test(numberValue)) {
                alert("Please enter a positive integer.");
                numberInput.focus();
                return false;
            }
            
            return true;
        }
    </script>
</body>
</html>
