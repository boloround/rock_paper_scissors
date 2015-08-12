<?php

class RockPaperScissors
{
    function rockPaperScissorsMethod($first_input, $second_input)
    {
        $p1 = 'Player 1 wins';
        $p2 = 'Player 2 wins';

        if ($first_input == $second_input) {
            $winner = 'Tie';
        } elseif ($first_input == 'r' && $second_input == 's') {
            $winner = $p1;
        } elseif ($first_input == 'r' && $second_input == 'p') {
            $winner = $p2;
        } elseif ($first_input == 'p' && $second_input == 'r') {
            $winner = $p1;
        } elseif ($first_input == 'p' && $second_input == 's') {
            $winner = $p2;
        } elseif ($first_input == 's' && $second_input == 'p') {
            $winner = $p1;
        }
        return $winner;
    }
}

?>
