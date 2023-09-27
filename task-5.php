<?php
echo "Task 5:\n";
function getRandomIndex($string)
{
    return mt_rand(0, strlen($string) - 1);
}
function generatePassword($length)
{
    $chars = [
        "lowercase" => "abcdefghijklmnopqrstuvwxyz",
        "uppercase" => "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
        "numbers" => "0123456789",
        "special" => "!@#$%^&*()_+"
    ];

    $password = '';
    $allChars = implode('', $chars);
    foreach ($chars as $key => $value) {
        $password .= $value[getRandomIndex($value)];
    }

    for ($i = 4; $i < $length; $i++) {
        $password .= $allChars[getRandomIndex($allChars)];
    }

    return str_shuffle($password);
}

$password = generatePassword(12);
echo "Generated Password: $password\n";

?>