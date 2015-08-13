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

       function test_fourPointTest()
       {
           //Arrange
           $test_scrabble = new Scrabble;
           $input = "V";

           //Act
           $result = $test_scrabble->checkScore($input);

           //Assert
           $this->assertEquals(4, $result);

       }

       function test_fivePointTest()
       {
           //Arrange
           $test_scrabble = new Scrabble;
           $input = "K";

           //Act
           $result = $test_scrabble->checkScore($input);

           //Assert
           $this->assertEquals(5, $result);
       }

       function test_eightPointTest()
       {
           //Arrange
           $test_scrabble = new Scrabble;
           $input = "X";

           //Act
           $result = $test_scrabble->checkScore($input);

           //Assert
           $this->assertEquals(8, $result);
       }
       function test_tenPointTest()
       {
           //Arrange
           $test_scrabble = new Scrabble;
           $input = "Q";

           //Act
           $result = $test_scrabble->checkScore($input);

           //Assert
           $this->assertEquals(10, $result);
       }

       function test_wordTest()
       {
           //Arrange
           $test_scrabble = new Scrabble;
           $input = "bag";

           //Act
           $result = $test_scrabble->checkScore($input);

           //Assert
           $this->assertEquals(6, $result);
       }

       function test_wrongWordTest()
       {
           //Arrange
           $test_scrabble = new Scrabble;
           $input = "abcde";

           //Act
           $result = $test_scrabble->checkScore($input);

           //Assert
           $this->assertEquals(0, $result);
       }
    }
?>
