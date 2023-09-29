<?php

class Movie
{
    public $title;
    public $release;
    public $language;
    public $rating;
    public $genre;

    function __construct(string $title, int $release, string $lang, float $rating, Genre $genre_name)
    {
        $this->title = $title;
        $this->release = $release;
        $this->language = $lang;
        $this->rating = $rating;
        $this->genre = $genre_name;
    }

    public function getStarRating()
    {
        return round($this->rating / 2, 2);
    }
}
