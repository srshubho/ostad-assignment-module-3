<?php
echo "Task 1:\n";
function textModify($text)
{

    $lowercaseText = strtolower($text);

    $modifiedText = str_replace('brown', 'red', $lowercaseText);

    echo "Modified text: " . $modifiedText . "\n";
}

$text = "The quick brown fox jumps over the lazy dog.";
textModify($text);
?>