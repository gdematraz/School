<?php

const DB_SERVER = 'localhost';
const DB_USER = 'cpnv';
const DB_PASSWORD = 'cpnv1234';
const DB_NAME = 'world';

//connexion à la base de données en utilisant les constantes du dessus
$dbh = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

$query = 'SELECT ID, Name, CountryCode, District, Population from City where CountryCode = \'CHE\'' ;

//recherche d'éléments de la base de données
$result = $dbh->query($query);

//affichage de chaque ligne par rapport à chaque données de ville.
foreach ($result as $city) {
    
    echo "{$city['ID']}, {$city['Name']} <br />";
    
}
