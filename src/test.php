<?php

// Connessione al database MongoDB
$mongoClient = new MongoDB\Client("mongodb+srv://Alessio:caccamella99@test.4gh2pkb.mongodb.net/");

// Seleziona il database
$database = $mongoClient->selectDatabase("test");

// Seleziona la collezione
$collection = $database->selectCollection("nome_della_collezione");

// Esegui una query
$result = $collection->find([]);

// Itera sui risultati
foreach ($result as $document) {
    print_r($document);
}

?>