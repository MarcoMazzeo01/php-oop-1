<?php

include_once __DIR__ . "/Genre.php";
include_once __DIR__ . "/Production.php";

class Movie extends Production
{

    public $published_year;
    public $duration;

    function __construct(
        string $title,
        string $producer,
        string $language,
        float $rating,
        Genre $genre,
        int $published_year,
        float $duration,
    ) {

        parent::__construct($title, $producer, $language, $rating, $genre);
        $this->published_year = $published_year;
        $this->duration = $duration;
    }
}
