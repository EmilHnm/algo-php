<?php

namespace Hoangm\Algo;

class Question implements \JsonSerializable
{
    public int $index;
    public string $title;
    public string $content;
    public string $answers;

    public function __construct(int $index, string $title, string $content, string $answers)
    {
        $this->index = $index;
        $this->title = $title;
        $this->content = $content;
        $this->answers = $answers;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'index' => $this->index,
            'title' => $this->title,
            'content' => $this->content,
            'answers' => $this->answers,
        ];
    }
}
