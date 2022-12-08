<?php

include './algo/QuestionList.php';

use algo\QuestionList;

$questionList = new QuestionList();
$list = $questionList->parse('questions.md')->all();

var_dump($list[5]);
echo nl2br("\n=============================");

// $list = $questionList->sortBy(function ($a, $b) {
//     return $a->title < $b->title;
// });

// var_dump($list);
