<?php
include './algo/QuestionList.php';

use algo\QuestionList;

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    // error was suppressed with the @-operator
    if (0 === error_reporting()) {
        return false;
    }
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});


$questionList = new QuestionList();
$list = $questionList->parse('questions.md')->saveJson('questions.json');
$list = $questionList->parse('questions.md')->all();

var_dump($list);
echo nl2br("\n=============================");

// $list = $questionList->sortBy(function ($a, $b) {
//     return $a->title < $b->title;
// });

// var_dump($list);
