<?php

namespace algo;

class Collection
{
    protected $questions = [];

    public function __construct($listQuestion = [])
    {
        $this->questions = $listQuestion;
    }

    public function add(Question $question): array
    {
        $this->questions[] = $question;
        return $this->questions;
    }
    public function all()
    {
        return $this->questions;
    }
    public function first()
    {
        return $this->questions[0];
    }
    public function last()
    {
        return $this->questions[count($this->questions) - 1];
    }
    public function map($callback)
    {
        return array_map($callback, $this->questions);
    }
    public function filter($callback)
    {
        return array_filter($this->questions, $callback);
    }
    public function pluck($key = "index")
    {
        $tempArray = [];
        foreach ($this->questions as $question) {
            $tempArray[] = $question->$key;
        }
        return $tempArray;
    }
    public function push(Question $question)
    {
        array_push($this->questions, $question);
    }

    public function sortBy($callback)
    {
        usort($this->questions, $callback);
        return $this->questions;
    }
}
