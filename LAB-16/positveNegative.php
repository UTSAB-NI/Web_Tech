<!DOCTYPE html>
<html>
<head>
    <title>Positive or Negative </title>
</head>
<body>
    <h1>welcome to my page </h1>
   

    <?php
        $x=8;
        if ($x > 0) {
            echo $x," is positive number";
        } elseif ($x < 0) {
            echo "The number $x is negative.";
        } else {
            echo "The number is zero.";
        }
    
    ?>
</body>
</html>
