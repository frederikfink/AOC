<?php

$lines = str_split(file('input.txt', FILE_IGNORE_NEW_LINES)[0]);

$dictionary = [];
$curr_dictionary = [];

foreach(file('input.txt', FILE_IGNORE_NEW_LINES) as $line)
{
    $input = explode(' ', $line);
    switch($input[0])
    {
        case '$' :
            if($input[1] == 'cd')
            {
                if($input[2] == '..')   
                {
                }
                else 
                {

                }
            }
            else if($input[1] == 'ls')
            {

            }
            break;
        
        case 'dir' :
            break;
       
        default :
            $file_size = $input[0];
            $file_name = $input[1];

            array_push($curr_dictionary, [
                'file' => $file_name, 
                'size' => $file_size
            ]);
            break;
    }
}

$dictionary_level = ['c', 'b'];

// cd a
if(!array_key_exists($curr_dictionary['a'], $curr_dictionary)) $curr_dictionary['a'] = [];
$curr_dictionary = $curr_dictionary['a'];
array_push($dictionary_level, 'a');

// cd .. ('b')
$curr_dictionary = $curr_dictionary[array_pop($dictionary_level)];


function add_file($file_name, $file_size, $dictionary)
{

}

function cd_up($dictionary)
{

}

function cd($dir_name, $dictionary)
{
    
}