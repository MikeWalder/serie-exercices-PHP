<?php
const HOST_NAME = "localhost:3308";
const DB_NAME = "db_panierfruit";
const USER_NAME = "root";
const PWD = "";

try {
    $connexion = 'mysql:host=' . HOST_NAME . ';dbname=' . DB_NAME;
    $myPDO = new PDO($connexion, USER_NAME, PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    $message("Erreur : " . $e->getMessage());
    die($message);
}
