<?php
include_once __DIR__ . "/Production.php";
include_once __DIR__ . "/Genre.php";

class TvSerie extends Production
{
    public $aired_from_year;
    public $aired_to_year;
    public $number_of_episodes;
    public $number_of_seasons;

    public function __construct(
        string $title,
        string $producer,
        string $language,
        float $rating,
        Genre $genre,
        int $aired_from_year,
        int $aired_to_year,
        int $number_of_episodes,
        int $number_of_seasons,
    ) {
        parent::__construct($title, $producer, $language, $rating, $genre);
        $this->aired_from_year = $aired_from_year;
        $this->aired_to_year = $aired_to_year;
        $this->number_of_episodes = $number_of_episodes;
        $this->number_of_seasons = $number_of_seasons;
    }
}
