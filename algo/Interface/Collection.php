<?php

namespace Hoangm\Algo\Interface;

use Hoangm\Algo\Question;
use Hoangm\Algo\QuestionList;

interface Collection
{
    
    function add(Question $question): array;
    function all(): array;
    function first(): Question | NULL;
    function last(): Question | NULL;
    function map($callback): QuestionList;
    function filter($callback): QuestionList;
    function pluck($key = "index"): array;
    function push(Question $question):void;
    function sortBy($callback): QuestionList;
}
