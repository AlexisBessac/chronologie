<?php

require './data/db-connect.php';

$query = $dbh->prepare("SELECT * FROM chronologie");
$query->execute();
$date = $query->fetchAll();

$title = 'Chronologie';

require './templates/liste.html.php';