<?php

include __DIR__ . "/Models/movie.php";
include __DIR__ . "/Models/genre.php";

$movie_1 = new Movie("La Città Incantata", 2001, "JA", 10.00);
$movie_2 = new Movie("Barbie", 2023, "EN", 8.5);

var_dump($movie_1, $movie_2);

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
                    echo "<b>{$movie_2->title}: </b> {$movie_2->getStarRating()} &#9733";
                    ?>
                </li>
            </ol>
        </div>
    </main>
</body>

</html>