<?php

class RockPaperScissors
{
    function rockPaperScissorsMethod($first_input, $second_input)
    {
        if($first_input == $second_input) {
            $winner = 'tie';
        }
        return $winner;
    }
}

?>
