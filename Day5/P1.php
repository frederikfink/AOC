<?php

$stacks = [];
$answer = '';
$BUILD_PHASE = TRUE;

ini_set('memory_limit', '-1');

$lines = file('input.txt', FILE_IGNORE_NEW_LINES);

$counter = 0;

foreach (file('input.txt', FILE_IGNORE_NEW_LINES) as $line) {
    print_r($counter . "\n");
    if ($BUILD_PHASE) {
        $array = str_split($line, 4);

        for ($i = 0; $i < count($array); $i++) {
            $crate = substr($array[$i], 1, 1);

            // add crate to stack
            if (ctype_alpha($crate)) {
                if (!isset($stacks[$i + 1])) $stacks[$i + 1] = [];
                array_unshift($stacks[$i + 1], $crate);
            }

            // no more crates to add
            if (ctype_digit($crate)) {
                $BUILD_PHASE = FALSE;
                break;
            }
        }

    } else {

        // first line is empty - skip it
        if($line == ""){
            continue;
        }

        // parse instructions
        $move = explode(" ", $line);
        $amount =       (int) $move[1];
        $from_stack =   (int) $move[3];
        $to_stack =     (int) $move[5];

        // execute instructions
        for ($i = 1; $i <= $amount; $i++) {
            $crate = array_pop($stacks[$from_stack]);
            array_push($stacks[$to_stack], $crate);
        }
    }

    $counter++;
}

// SWTMPFPRH
// WSFTMRHPP
for($i = 1; $i <= count($stacks); $i++)
{
    $answer .= array_pop($stacks[$i]);
}
print_r($answer);
