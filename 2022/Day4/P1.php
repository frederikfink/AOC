<?php

$counter = 0;

foreach(file('input.txt', FILE_IGNORE_NEW_LINES) as $line)
{
    $pair = explode(',', $line);
    $elf1 = explode('-', $pair[0]);
    $elf2 = explode('-', $pair[1]);

    if      ($elf1[0] <= $elf2[0] && $elf1[1] >= $elf2[1]) $counter += 1;
    elseif  ($elf2[0] <= $elf1[0] && $elf2[1] >= $elf1[1]) $counter += 1;
}

print_r($counter);