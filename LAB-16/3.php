<!DOCTYPE html>
<html>
<head>
    <title>Sum of Ten Even Numbers</title>
</head>
<body>
    <h1>Sum of Ten Even Numbers</h1>

    <?php
    // Initialize variables
    $sum = 0;
    $count = 0;
    $number = 2; // Start with the first even number

    // Loop to find and sum ten even numbers
    while ($count < 10) {
        $sum += $number; // Add the current even number to the sum
        $number += 2;    // Move to the next even number
        $count++;        // Increment the count
    }

    echo "The sum of the first ten even numbers is: $sum";
    ?>
</body>
</html>
