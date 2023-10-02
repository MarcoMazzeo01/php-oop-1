<?php

include_once __DIR__ . "/Models/Movie.php";
include_once __DIR__ . "/Models/Genre.php";
include_once __DIR__ . "/Models/Production.php";

$movie_1 = new Movie("La Città Incantata", "Hayao Miyazaki", "JP", "10", new Genre(["Fantasy", "Adventure"]), 2001, 125);


var_dump($movie_1);

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

            </ol>
        </div>
    </main>
</body>

</html>