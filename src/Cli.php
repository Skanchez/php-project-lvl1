<?php

namespace Brain\Games\Cli;
namespace Brain\Even\Cli;

use function cli\line;
use function cli\prompt;

function hiThere()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
