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
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}

?>