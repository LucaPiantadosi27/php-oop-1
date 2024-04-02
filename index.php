

<!-- 
    create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 
-->


<?php

class Movie
{

   // istanze
   public $title;
   public $year;
   public $genere;
   public $regista;
   

//costruttore

function __construct($title,$year,$genere)

{
   $this->title = $title;
   $this->year = $year;
   $this->genere = $genere;
}

}

$pulpFiction = new Movie('Pulp Fiction', 1994, 'Thriller-pulp ');

var_dump($pulpFiction);