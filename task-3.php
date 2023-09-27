<?php
echo "Task 3:\n";
$grades = [85, 92, 78, 88, 95];

function sortGradesDesc($grades)
{

    rsort($grades);

    print_r($grades);
}

sortGradesDesc($grades);
echo "\n";