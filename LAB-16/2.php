<!DOCTYPE html>
<html>
<head>
    <title>Greatest Among Three Numbers</title>
</head>
<body>
    <h1>Greatest Among Three Numbers</h1>

    <?php
    // Define the three numbers
    $a = 30;
    $b = 5;
    $c = 37;

    // Find the greatest among the three numbers
    $greatest = $a;

    if ($b > $greatest) {
        $greatest = $b;
    }

    if ($c > $greatest) {
        $greatest = $c;
    }

    echo "The greatest number among $a, $b, and $c is: $greatest";
    ?>
</body>
</html>
