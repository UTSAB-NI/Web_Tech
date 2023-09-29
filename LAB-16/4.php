<!DOCTYPE html>
<html>
<head>
    <title>Reverse of Input Number</title>
</head>
<body>
    <h1>Reverse of Input Number</h1>

    <?php
    // Input number
    $inputNumber = 123; // Replace with your desired input number

    // Function to reverse the number
    function reverseNumber($number) {
        $reverse = 0;
        while ($number > 0) {
            $digit = $number % 10;
            $reverse = $reverse * 10 + $digit;
            $number = (int)($number / 10);
        }
        return $reverse;
    }

    // Calculate the reverse of the input number
    $reversed = reverseNumber($inputNumber);

    echo "The reverse of $inputNumber is: $reversed";
    ?>
</body>
</html>
