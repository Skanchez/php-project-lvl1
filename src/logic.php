<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

function isEven()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

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
