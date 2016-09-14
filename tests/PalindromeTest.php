<?php
    require_once "src/Palindrome.php";
    class PalindromeTest extends PHPUnit_Framework_TestCase
    {

        function test_palindrome()
        {
            //Arrange
            $test_Palindrome = new Palindrome;
            $input = "racecar";

            //Act
            $result = $test_Palindrome->determinePalindrome($input);

            //Assert
            $this->assertEquals("This is a palindrome", $result);
        }

        function test_not_palindrome()
        {
            //Arrange
            $test_Palindrome = new Palindrome;
            $input = "random";

            //Act
            $result = $test_Palindrome->determinePalindrome($input);

            //Assert
            $this->assertEquals("This is not a palindrome", $result);
        }

        function test_spaces()
        {
            //Arrange
            $test_Palindrome = new Palindrome;
            $input = "race car";

            //Act
            $result = $test_Palindrome->determinePalindrome($input);

            //Assert
            $this->assertEquals("This is a palindrome", $result);
        }
    }

 ?>
