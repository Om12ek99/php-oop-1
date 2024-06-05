<?php
//definizione di classe movie
class Movies{
    //definizione degli attributi
    private string $name;
    private string $description;
    private string $director;
    private int $year;

    // nome
    // set del nome
    public function setNameMovie(string $name) {
        if (strlen($name) > 0) {              //controlla che l'esistenza del valore
            $this->name = $name;
        } else {
            $this->name = "Nessun titolo presente";
        }
    }
    // get del nome
    public function getNameMovie() {
        return $this->name;
    }

    
    //description
    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * 
     */ 
    public function setDescription($description)
    {
         if (strlen($description) > 0) {              //controlla che l'esistenza del valore
            $this->name = $description;
        } else {
            $this->name = "Nessuna descrizione presente";
        }
    }

    //director
    /**
     * Get the value of director
     */ 
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set the value of director
     *
     *
     */ 
    public function setDirector($director)
    {
        if (strlen($director) > 0) {              //controlla che l'esistenza del valore
            $this->name = $director;
        } else {
            $this->name = "Nessuna direttore presente";
        }
    }

    //year
    /**
     * Get the value of year
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * 
     */ 
    public function setYear($year)
    {
        if (strlen($year)> 0 && $year > 1888) {     //controlla la validitò del valore
            $this->year= $year;
        }else{
            $this->year="anno non valido";
        }
    }
}

?>