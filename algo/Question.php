<?php

namespace algo;

class Question implements \JsonSerializable
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

    public function jsonSerialize()
    {
        return [
            'index' => $this->index,
            'title' => $this->title,
            'content' => $this->content,
            'answers' => $this->answers,
        ];
    }
}
