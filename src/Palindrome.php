<?php
class Palindrome
{
    function determinePalindrome($input)
    {
        $reversedInput = strrev($input);
        if ($reversedInput == $input) {
            return "This is a palindrome";
        } else {
            return "This is not a palindrome";
        }
    }
}

?>
