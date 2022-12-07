<?php
$stream = str_split(file('input.txt', FILE_IGNORE_NEW_LINES)[0]); 
$answer = 0;

for($i = 0; $i < count($stream) - 4; $i++)
{
    $array = [$stream[$i], $stream[$i+1], $stream[$i+2], $stream[$i+3]];
    print_r($array);
    if(count(array_unique($array)) == count($array))
    {
        $answer = $i + 4;
        break;
    }
}

print_r($answer);