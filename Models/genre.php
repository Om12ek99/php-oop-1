<?php
class Genre {
    private string $genre;

    public function setGenre(string $genre) {       //controllo della validità del valore
        if (strlen($genre) > 0) {
            $this->genre = $genre;
        }
    }

    public function getGenre() {
        return $this->genre;
    }
};