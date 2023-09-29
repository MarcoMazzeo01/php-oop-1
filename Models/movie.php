<?php

class Movie
{
    public $title;
    public $release;
    public $language;
    public $rating;

    function __construct(string $title, int $release, string $lang, float $rating)
    {
        $this->title = $title;
        $this->release = $release;
        $this->language = $lang;
        $this->rating = $rating;
    }

    public function getStarRating()
    {
        return round($this->rating / 2, 2);
    }
}
