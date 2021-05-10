<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

function isEven($name)
{
   // $name = hiThere();
    $counter = 0;
    do {
        line('Answer "yes" if the number is even, otherwise answer "no".');
        $question = rand(0, 50);
        line("Question: $question");
        $answer = prompt('Your answer');
        if ($question % 2 === 0) {
            $question = 'yes';
        } else {
            $question = 'no';
        }
        if ($question === $answer) {
            line('Correct!');
            $counter++;
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$question'.");
            return line("Let`s try again, $name!");
        }
    } while ($counter < 3);
    line("Congratulations, $name!");
}

function calcThis($name)
{
    //$name = hiThere();
    $counter = 0;
    do {
        line("What is the result of the expression?");
        $operators = ['+', '-', '*'];
        $first = rand(0, 50);
        $last = rand(0, 50);
        $index = array_rand($operators);
        $operator = $operators[$index];
        line("Question: $first $operator $last");
        switch ($operator) {
            case '+':
                $result = $first + $last;
                break;
            case '-':
                $result = $first - $last;
                break;
            case '*':
                $result = $first * $last;
                break;
        }
        $answer = (int)prompt("Your answer");
        if ($answer === $result) {
            line("Correct!");
            $counter++;
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
            return line("Let`s try again, $name!");
            break;
        }
    } while ($counter < 3);
    line("Congratulations, $name!");
}
