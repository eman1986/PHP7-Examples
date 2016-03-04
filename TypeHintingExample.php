<?php
declare(strict_types = 1);

function AddTwoNumbers(int $first, int $second)
{
    return ($first + $second);
}

function AddNumbers(int ...$numbers) : int
{
    return array_sum($numbers);
}

// These will work.
echo AddTwoNumbers(3, 7) . '<br>';
echo AddNumbers(2,4,5,8,7,5) . '<br>';

// These will not, in strict-mode.
echo AddTwoNumbers('2', '2') . '<br>';
echo AddNumbers('7', 4.9, 10, 15);