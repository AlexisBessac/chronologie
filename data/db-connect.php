<?php


$host = "localhost";
$user = "root";
$password = "";
$dbName = "historia";

try{
    $dbh = new PDO("mysql:host=$host;dbname=$dbName", $user, $password, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch(PDOException $e)
{
    echo "Error : " . $e->getMessage();
    die;
}