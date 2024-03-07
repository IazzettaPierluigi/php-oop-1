<?php
class Movie
{
    public $title;
    public $genre;
    public $year;

    //costruttore

    public function __construct($title, $genre, $year)
    {

        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    //funzione per stampare info

    public function printMovie()
    {
        echo "title: {$this->title}, genre: {$this->genre}, year: {$this->year}";
    }
}


//creazione dei movies

$movie1 = new Movie("Kill Bill vol.1", "Action/thriller", 2003);

$movie2 = new Movie("The hateful eight", "Western/thriller", 2015);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop</title>
</head>

<body>
    <ul>
        <li>
            <?php
            echo "Movie 1:";
            $movie1->printMovie();
            ?>
        </li>
        <li>
            <?php
            echo "Movie 2:";
            $movie2->printMovie();
            ?>
        </li>
    </ul>
</body>

</html>