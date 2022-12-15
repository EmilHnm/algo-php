<?php

require "vendor/autoload.php";

use Hoangm\Algo\QuestionList;

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    // error was suppressed with the @-operator
    if (0 === error_reporting()) {
        return false;
    }
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});


$questionList = new QuestionList();
$json = $questionList::parse('questions.md')->saveJson('questions.json');
// $list = $questionList::parse('questions.md')->all();

var_dump($json);

$list = $questionList->sortBy(function ($a, $b) {
    return $a->index < $b->index ? 1 : -1;
})->filter(function($item) {
    return $item->index % 2 === 0;
})->all();

echo '<pre>';
var_dump($list);
echo '</pre>';
