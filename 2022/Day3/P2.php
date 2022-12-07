<?php

$lines = file('input.txt', FILE_IGNORE_NEW_LINES);

$counter = 0;
$letters = array(
    'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8, 'i' => 9, 'j' => 10,
    'k' => 11, 'l' => 12, 'm' => 13, 'n' => 14, 'o' => 15, 'p' => 16, 'q' => 17, 'r' => 18, 's' => 19, 't' => 20,
    'u' => 21, 'v' => 22, 'w' => 23, 'x' => 24, 'y' => 25, 'z' => 26
);

for($i = 0; $i < count($lines); $i += 3)
{
    $rucksack1 = str_split($lines[$i]);
    $rucksack2 = str_split($lines[$i + 1]);
    $rucksack3 = str_split($lines[$i + 2]);

    $intersection = array_intersect($rucksack1, $rucksack2, $rucksack3);

    $letter = array_pop($intersection);

    $counter += ctype_upper($letter) ? $letters[strtolower($letter)] + 26 : $letters[strtolower($letter)];    
}

print_r($counter);
