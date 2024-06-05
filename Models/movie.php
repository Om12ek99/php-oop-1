<?php
//definizione di classe movie
class Movies{
    //definizione degli attributi
    private string $name;
    private string $description;
    private string $director;
    private int $year;

    // set del nome
    public function setNameMovie(string $index_name) {
        if (strlen($index_name) > 0) {              //controlla che l'esistenza del valore
            $this->name = $index_name;
        } else {
            $this->name = "Nessun titolo presente";
        }
    }
    // get del nome
    public function getNameMovie() {
        return $this->name;
    }
}

?>