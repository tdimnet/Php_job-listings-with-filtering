<?php

require_once("./vendor/autoload.php");
require_once("./config/database.php");
require_once("./models/JobOffer.php");

$loader = new \Twig\Loader\FilesystemLoader("./views");
$twig = new \Twig\Environment($loader);


$sql = "SELECT * FROM tag";

$sqlStatement = $conn->prepare($sql);
$sqlStatement->execute();

$data = $sqlStatement->fetchAll();

var_dump($data);



echo $twig->render("home.twig", [
    "name" => "Thomas"
]);
