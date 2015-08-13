<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_onePointTest()
        {
            //Arrange
            $test_scrabble = new Scrabble;
            $input = "A";

            //Act
            $result = $test_scrabble->checkScore($input);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_twoPointTest()
        {
            //Arrange
            $test_scrabble = new Scrabble;
            $input = "D";

            //Act
            $result = $test_scrabble->checkScore($input);

            //Assert
            $this->assertEquals(2, $result);
       }

       function test_threePointTest()
       {
           //Arrange
           $test_scrabble = new Scrabble;
           $input = "B";

           //Act
           $result = $test_scrabble->checkScore($input);

           //Assert
           $this->assertEquals(3, $result);
       }

    }
?>
