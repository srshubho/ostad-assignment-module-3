<?php
echo "Task 2:\n";
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function removeEvenNumbers($numbers)
{
    $oddNumbers = array_filter($numbers, function ($number) {
        return $number % 2 !== 0;
    });
    echo implode(', ', $oddNumbers) . "\n";
}
removeEvenNumbers($numbers);