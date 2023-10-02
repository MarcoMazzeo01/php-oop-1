<?php
class Production
{
    public $title;
    public $producer;
    public $language;

    function __construct(string $title, string $producer, string $language)
    {
        $this->title = $title;
        $this->producer = $producer;
        $this->language = $language;
    }
}
