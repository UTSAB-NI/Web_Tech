<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>
    <h1>Palindrome Checker</h1>

    <?php
    // Function to check if a string is a palindrome
    function isPalindrome($str) {
        // Remove spaces and convert to lowercase
        $str = strtolower(str_replace(' ', '', $str));
        
        // Reverse the string
        $reversed = strrev($str);

        // Compare the original and reversed strings
        return $str === $reversed;
    }

    // Static variable to store the input
    static $input = "121"; // Replace with your input

    // Check if the input is a palindrome
    $result = isPalindrome($input);

    if ($result) {
        echo "The input '$input' is a palindrome.";
    } else {
        echo "The input '$input' is not a palindrome.";
    }
    ?>
</body>
</html>
