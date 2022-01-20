<?php
    // Includo il database di dischi
    include __DIR__ . "/dischi.php";

    // Dichiaro che le informazioni restituite nella risposta HTTP sono di tipo json
    header('Content-Type: application/json');
    
    // Attraverso la funzione json_encode traduco il database in formato json
    echo json_encode($database);
?>
