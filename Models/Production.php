<?php
class Production
{
    public $title;
    public $producer;
    public $language;
    public $rating;
    public $genre;

    function __construct(string $title, string $producer, string $language, float $rating, Genre $genre)
    {
        $this->title = $title;
        $this->producer = $producer;
        $this->language = $language;
        $this->rating = $rating;
        $this->genre = $genre;
    }

    public function getStarRating()
    {
        return round($this->rating / 2, 2);
    }
}
