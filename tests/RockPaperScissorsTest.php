<?php
    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_both_input_same()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "r";
            $second_input = "r";

            //Act
            $result = $test_RockPaperScissors->rockPaperScissorsMethod($first_input, $second_input);

            //Assert
            $this->assertEquals("Tie", $result);
        }

        function test_rock_scissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "r";
            $second_input = "s";

            //Act
            $result = $test_RockPaperScissors->rockPaperScissorsMethod($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1 wins", $result);
        }

        function test_rock_paper()
        {
            //Arrange
            $testRockPaperScissors = new RockPaperScissors;
            $first_input = 'r';
            $second_input = 'p';

            //Act
            $result = $testRockPaperScissors->rockPaperScissorsMethod($first_input, $second_input);

            //Assert
            $this->assertEquals('Player 2 wins', $result);
        }

        
    }
 ?>
