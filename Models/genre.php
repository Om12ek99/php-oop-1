<?php
class MovieGenre{
    private string $genre;

    /**
     * Get the value of genre
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     *
     */ 
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }
}

?>