<?php
$stream = str_split(file('input.txt', FILE_IGNORE_NEW_LINES)[0]); 

$answer = 0;
$OFFSET = 14;

$answer = find_marker($stream, $OFFSET);
print_r($answer);

function find_marker(array $stream, int $offset) : string
{
    foreach($stream as $i => $char)
    {
        $array = array_slice($stream, $i, $offset);

        if(count(array_unique($array)) == count($array)) return $i + $offset;
    }
}