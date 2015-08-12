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
        } elseif ($first_input == 's' && $second_input == 'r') {
            $winner = $p2;
        }
        return $winner;
    }

    function rockPaperScissorsOnePlayer($input)
    {
        $results_array = array();

        $p1 = 'Player 1 wins';
        $p2 = 'Computer wins';

        $rps_array = array('r'=>'r','p'=>'p','s'=>'s');
        $random_choice =  array_rand($rps_array, 1);

        if ($random_choice == 'r') {
            array_push ($results_array, 'Rock');
        } elseif ($random_choice == 'p') {
            array_push ($results_array, 'Paper');
        } else {
            array_push ($results_array, 'Scissors');
        }



        if ($input == $random_choice) {
            $winner = 'Tie';
        } elseif ($input == 'r' && $random_choice == 's') {
            $winner = $p1;
        } elseif ($input == 'r' && $random_choice == 'p') {
            $winner = $p2;
        } elseif ($input == 'p' && $random_choice == 'r') {
            $winner = $p1;
        } elseif ($input == 'p' && $random_choice == 's') {
            $winner = $p2;
        } elseif ($input == 's' && $random_choice == 'p') {
            $winner = $p1;
        } elseif ($input == 's' && $random_choice == 'r') {
            $winner = $p2;
        }

        array_push ($results_array, $winner);

        if ($input == 'r') {
            array_push ($results_array, 'Rock');
        } elseif ($input == 'p') {
            array_push ($results_array, 'Paper');
        } else {
            array_push ($results_array, 'Scissors');
        }

        return $results_array;
    }
}

?>
