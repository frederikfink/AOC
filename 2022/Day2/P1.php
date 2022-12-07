<?php

enum play : int
{
    case ROCK = 1;
    case PAPER = 2;
    case SCISSOR = 3;
}

class hand
{
    public play $type;
    public play $wins_over;
    public play $loses_to;

    public function __construct(play $type, play $wins_over, play $loses_to)
    {
        $this->type = $type;
        $this->wins_over = $wins_over;
        $this->loses_to = $loses_to;
    }
}

$rock =     new hand(play::ROCK,    play::SCISSOR,  play::PAPER);
$paper =    new hand(play::PAPER,   play::ROCK,     play::SCISSOR);
$scissor =  new hand(play::SCISSOR, play::PAPER,    play::ROCK);

$moves = [
    'X' => $rock, 'Y' => $paper, 'Z' => $scissor,
    'A' => $rock, 'B' => $paper, 'C' => $scissor
];

$my_score = 0;
$opponent_score = 0;

foreach (file('input.txt', FILE_IGNORE_NEW_LINES) as $line) {
    $arr =              explode(' ', $line);
    $opponent_move =    $moves[$arr[0]];
    $my_move =          $moves[$arr[1]];

    if($my_move->wins_over == $opponent_move->type)    $my_score += $my_move->type->value + 6;
    if($my_move->loses_to == $opponent_move->type)     $my_score += $my_move->type->value;
    if($my_move->type == $opponent_move->type)         $my_score += $my_move->type->value + 3;
}

print_r($my_score);