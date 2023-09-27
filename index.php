<?php
// Record the start time
$startTime = microtime(true);

include 'task-1.php';
include 'task-2.php';
include 'task-3.php';
include 'task-4.php';
include 'task-5.php';



// Record the end time
$endTime = microtime(true);

// Calculate the execution time in milliseconds
$executionTimeMs = ($endTime - $startTime) * 1000;

// Display the execution time
echo "\nExecution time: " . number_format($executionTimeMs, 2) . " milliseconds\n";