<?php
    // Includo il database di dischi
    include __DIR__ . "/dischi.php";

    //Dichiaro un array vuoto dove inserire i dischi filtrati per genere
    $filtered_database = [];

    // Dichiaro che le informazioni restituite nella risposta HTTP sono di tipo json
    header('Content-Type: application/json');


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
       // traduco la variabile contenente i dischi filtari in json ...
        echo json_encode($filtered_database);

        //esco.
        die;
    }

    // Attraverso la funzione json_encode traduco il database in formato json
    echo json_encode($database);
?>
