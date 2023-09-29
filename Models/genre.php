<?php

class Genre
{
    public $genre_name;

    function __construct(string $genre_name)
    {
        $this->genre_name = $genre_name;
    }
}
