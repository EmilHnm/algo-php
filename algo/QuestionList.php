<?php

namespace Hoangm\Algo;

use Hoangm\Algo\Interface\Collection;
class QuestionList implements Collection
{
    protected static $questions = [];

    public function __construct($listQuestion = [])
    {
        self::$questions = $listQuestion;
    }

    public static function parse($path): QuestionList
    {
        $contents = file_get_contents($path);
        $questionsList = explode('######',  strip_tags($contents));
        array_shift($questionsList);
        foreach ($questionsList as $questions) {
            [$question, $answer] = explode('####', $questions);
            try {
                [$title, $content] = explode('?', "$question");
                [$index, $title] = explode('.', "$title", 2);
            } catch (\Throwable $th) {
                [$index, $title, $content] = explode('.', $question);
            }
            self::$questions[] = new Question($index, trim($title), trim($content), str_replace('---', '', $answer));
        }
        return new static(self::$questions);
    }

    public function saveJson($path)
    {
        $json = json_encode($this->all(), JSON_UNESCAPED_UNICODE);
        return file_put_contents($path, $json) ? 1 : 0;
    }
    public function add(Question $question): array
    {
        self::$questions[] = $question;
        return $this->questions;
    }
    public function all(): array
    {
        return self::$questions;
    }
    public function first(): Question | NULL
    {
        return self::$questions[0] ?? NULL;
    }
    public function last(): Question | NULL
    {
        return self::$questions[count(self::$questions) - 1] ?? NULL;
    }
    public function map($callback): QuestionList
    {
        self::$questions = array_map($callback, self::$questions);
        return $this;
    }
    public function filter($callback):QuestionList
    {
        self::$questions = array_filter(self::$questions, $callback);
        return $this;
    }
    public function pluck($key = "index"):array
    {
        $tempArray = [];
        foreach (self::$questions as $question) {
            $tempArray[] = $question->$key;
        }
        return $tempArray;
    }
    public function push(Question $question):void
    {
        array_push(self::$questions, $question);
    }

    public function sortBy($callback): QuestionList
    {
        usort(self::$questions, $callback);
        return $this;
    }
}
