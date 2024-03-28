<?php

require './data/db-connect.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) 
{
    $errors = [];
    if (empty($_POST['date'])) {
        $errors['date'] = "Le champ date n'est pas rempli";
    }
    if (empty($_POST['description'])) {
        $errors['description'] = "Le champ description n'est pas rempli";
    }
}

$title = "Entrer des dates";

require './templates/home.html.php';


if (empty($errors)) {
    $query = $dbh->prepare("INSERT INTO chronologie (chronos, description) VALUES (:chronos, :description)");
    $query->execute([
        'chronos' => $_POST['date'],
        'description' => $_POST['description'],
    ]);
}