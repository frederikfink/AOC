<?php

$counter = 0;

foreach(file('input.txt', FILE_IGNORE_NEW_LINES) as $line)
{
    $pair = explode(',', $line);
    $elf1 = explode('-', $pair[0]);
    $elf2 = explode('-', $pair[1]);

    $elf1_seats = range($elf1[0], $elf1[1]);
    $elf2_seats = range($elf2[0], $elf2[1]);

    if(count(array_intersect($elf1_seats, $elf2_seats)) > 0) 
        $counter += 1;
}

print_r($counter);