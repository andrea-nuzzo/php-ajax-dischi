<?php
    include __DIR__ . "/dischi.php";

   header('Content-Type: application/json');

   echo json_encode($database);
?>
