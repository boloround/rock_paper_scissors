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
            $this->assertEquals("tie", $result);
        }
    }
 ?>
