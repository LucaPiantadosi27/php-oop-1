

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
   public $votation;
   

//costruttore

function __construct($title,$year,$genere,$votation)

{
   $this->title = $title;
   $this->year = $year;
   $this->genere = $genere;
   $this->votation = $votation;
   
}

public function isRecommended() 
{
   if ($this->votation > 7.5) {
      return "Consigliato";
  } else {
      return "Non è consigliato";
  }
}
 

}

// Creazione oggetti Movie
$movie1 = new Movie("Interstellar", 2014, "Science Fiction", 8.6);
$movie2 = new Movie("Inception", 2010, "Science Fiction", 8.8);
$movie3 = new Movie('Pulp Fiction', 1994, 'Thriller-pulp',9);
$movie4 = new Movie('Natale in India', 2003, 'commedia',3.6);


?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!-- css -->
   <link rel="stylesheet" href="style.css">
   <title>php-Movie</title>
</head>


<body>
   
   <div class="title">
      <h1>Movies</h1>
   </div>

   <div class="container mt-5 bg-body-secondary rounded-2 p-5">

    
      <!--Stampo a schermo i valori delle relative proprietà e se il film è consigliato o meno-->

      <div class="card mb-3 p-2 ">

         <?php
         echo "<h2>Film 1:</h2>";
         echo "Titolo: " . $movie1->title . "<br>";
         echo "Anno: " . $movie1->year . "<br>";
         echo "Genere: " . $movie1->genere . "<br>";
         echo "Votazione: " . $movie1->votation . "<br>";
         echo "Giudizio: " . $movie1->isRecommended() . "<br>";
         ?>

         
      </div>

      <div class="card mb-3 p-2">
         <?php
         echo "<h2>Film 2:</h2>";
         echo "Titolo: " . $movie2->title . "<br>";
         echo "Anno: " . $movie2->year . "<br>";
         echo "Genere: " . $movie2->genere . "<br>";
         echo "Votazione: " . $movie2->votation . "<br>";
         echo "Giudizio: " . $movie2->isRecommended() . "<br>";
         ?>
         
      </div>

      <div class="card mb-3 p-2">
         <?php
         echo "<h2>Film 3:</h2>";
         echo "Titolo: " . $movie3->title . "<br>";
         echo "Anno: " . $movie3->year . "<br>";
         echo "Genere: " . $movie3->genere . "<br>";
         echo "Votazione: " . $movie3->votation . "<br>";
         echo "Giudizio:" . $movie3->isRecommended() . "<br>";
         ?>
         
      </div>

      <div class="card mb-3 p-2">
         <?php
         echo "<h2>Film 4:</h2>";
         echo "Titolo: " . $movie4->title . "<br>";
         echo "Anno: " . $movie4->year . "<br>";
         echo "Genere: " . $movie4->genere . "<br>";
         echo "Votazione: " . $movie4->votation . "<br>";
         echo "Giudizio: " . $movie4->isRecommended() . "<br>";
         ?>
      
      </div>


   </div>

   <!-- bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>