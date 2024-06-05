<?php

require_once 'models/movie.php';
require_once 'models/genre.php';

// chiamata alla classe movies, e creazione di una nuova classe
$movie = new Movies();

// richiamo ai setter and getter dei movie

$movie->setNameMovie("the Dark Knight");
$movie->setDescription("Best Movie ever");
$movie->setDirector("Christopher Nolan");
$movie->setYear(2008);

var_dump($movie);

// genere
$genre = new Genre ();

$genre->setGenre("Action");
var_dump($genre);

?>