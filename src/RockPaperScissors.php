<?php

class RockPaperScissors
{
    function rockPaperScissorsMethod($first_input, $second_input)
    {
        if($first_input == $second_input) {
            $winner = 'tie';
        } elseif ($first_input == 'r' && $second_input == 's') {
            $winner = 'player 1 wins';
        }
        return $winner;
    }
}

?>
