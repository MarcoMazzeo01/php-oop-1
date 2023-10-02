<?php

include_once __DIR__ . "/Models/Movie.php";
include_once __DIR__ . "/Models/Genre.php";
include_once __DIR__ . "/Models/Production.php";
include_once __DIR__ . "/Models/TvSerie.php";

$movie_1 = new Movie("La Città Incantata", "Hayao Miyazaki", "JP", "10", new Genre(["Fantasy", "Adventure"]), 2001, 125);
$series = new TvSerie("Modern Family", "Christopher Lloyd", "EN", "8", new Genre(["Comedy"]), 2009, 2020, 250, 11);

var_dump($movie_1);
var_dump($series);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolflix But Better</title>
</head>

<body>
    <main>
        <div>
            <ol>
                <li>
                    <?php
                    echo "<b>{$movie_1->title}: </b> {$movie_1->getStarRating()} &#9733";
                    ?>
                </li>

                <li>
                    <?php
                    echo "<b>{$series->title}: </b> {$series->getStarRating()} &#9733";
                    ?>
                </li>
            </ol>
        </div>
    </main>
</body>

</html>