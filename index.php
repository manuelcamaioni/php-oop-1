<!-- Descrizione:
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’ :
 => all'interno della classe sono dichiarate delle variabili d'istanza
 => all'interno della classe è definito un costruttore
 => all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
  Creare un layout completo per stampare a schermo una lista di movies. Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. -->
<?php 
class Movie {
    public $title;
    public $director;
    public $actors;
    public $genre;

    function __construct(string $_title, array $_actors, string $_director, array $_genre){
        $this->title = $_title;
        $this->actors = $_actors;
        $this->director = $_director;
        $this->genre = $_genre;
    }

}

$wows = new Movie('The Wolf of Wall Street',['Leonardo Di Caprio','Jordan Belfort','Margot Robbie'], 'Martin Scorsese', ['Commedia', 'Black humor', 'Drammatico', 'Giallo']);
$django = new Movie('Django Unchained', ['Cristoph Waltz','Jamie Foxx', 'Samuel L. Jackson'], 'Quentin Tarantino', ['Western', 'Drammatico', 'Azione']);
$movies = [$wows, $django];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Objects</title>
</head>
<body>
    <div id="app">
<ul> 
<?php foreach ($movies as $movie){ ?>
    <li>
        <?php
            $properties = get_object_vars($movie);
            foreach ($properties as $property => $value) {
                if(is_array($value)) { echo $property . ': ' . implode(", ",$value) . PHP_EOL; }
                else {echo $property . ': ' . $value . PHP_EOL;}
            }
        ?>
        <?php } ?>
        
    </li>
</ul></div>
</body>
</html>