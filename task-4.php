<?php
echo "Task 4:\n";
$studentGrades = [
    "Shihab" => ['Math' => 90, 'English' => 85, 'Science' => 88],
    "Sourav" => ['Math' => 78, 'English' => 92, 'Science' => 89],
    "Mehdi" => ['Math' => 95, 'English' => 88, 'Science' => 93]
];
function calculateAverageGrades($studentGrades)
{
    foreach ($studentGrades as $name => $grades) {
        $averageGrade = array_sum($grades) / 3;
        echo "average grade of {$name} is: " . round($averageGrade, 2) . PHP_EOL;
    }
}
calculateAverageGrades($studentGrades);