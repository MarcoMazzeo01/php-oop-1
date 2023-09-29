<?php

class Genre
{
    public $genre_list;

    function __construct(array $genres)
    {
        $this->genre_list = $genres;
    }
}
