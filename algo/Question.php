<?php

namespace algo;

class Question
{
    public $index;
    public $title;
    public $content;
    public $answers;

    public function __construct($index, $title, $content, $answers)
    {
        $this->index = $index;
        $this->title = $title;
        $this->content = $content;
        $this->answers = $answers;
    }
}
