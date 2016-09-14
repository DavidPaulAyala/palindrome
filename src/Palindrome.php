<?php
class Palindrome
{
    function determinePalindrome($input)
    {
        $inputArray = str_split($input);
        $onlyLetterArray = array();
        foreach ($inputArray as $letter) {
            if(preg_match("/^[a-zA-Z]*$/", $letter)){
                array_push($onlyLetterArray, $letter);
            }
        }
        $onlyLetter = implode($onlyLetterArray);
        $reversedOnlyLetter = strrev($onlyLetter);
        if (strtolower($reversedOnlyLetter) == strtolower($onlyLetter)) {
            return "This is a palindrome";
        } else {
            return "This is not a palindrome";
        }
    }
}

?>
