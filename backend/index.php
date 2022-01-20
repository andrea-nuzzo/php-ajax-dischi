<?php
    // Includo il database di dischi
    include __DIR__ . "/dischi.php";

    //Dichiaro un array vuoto dove inserire i dischi filtrati per genere
    $filtered_database = [];


    //Se la richiesta GET non è vuota ...
    if(!empty($_GET["genre"])){
        //accedo al database e ciclo su i dischi
       foreach($database as $discs){
           foreach($discs as $key => $disc){
                // Se all'interno del disco il genere è uguale alla richiesta GET ...
                if($disc == $_GET["genre"]){
                    //pusho il disco all'interno della variabile
                    array_push($filtered_database, $discs);
                }
            }
       }
       // Assegno alla variabile $database il nuovo array filtrato
       $database = $filtered_database;
    }

   
   var_dump($database);

    // Dichiaro che le informazioni restituite nella risposta HTTP sono di tipo json
    header('Content-Type: application/json');
    
    // Attraverso la funzione json_encode traduco il database in formato json
    echo json_encode($database);
?>
