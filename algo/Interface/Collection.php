<?php

namespace Hoangm\Algo\Interface;

use Hoangm\Algo\Question;

interface Collection
{
    
    function add(Question $question): array;
    function all();
    function first();
    function last();
    function map($callback);
    function filter($callback);
    function pluck($key = "index");
    function push(Question $question);
    function sortBy($callback);
}
