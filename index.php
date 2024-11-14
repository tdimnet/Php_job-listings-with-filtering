<?php

require_once("./vendor/autoload.php");
require_once("./config/database.php");
require_once("./models/JobOffer.php");

$loader = new \Twig\Loader\FilesystemLoader("./views");
$twig = new \Twig\Environment($loader);


$sql1 = "SELECT * FROM tag";

$sqlStatement1 = $conn->prepare($sql1);
$sqlStatement1->execute();

$tagsData = $sqlStatement1->fetchAll();

var_dump($tagsData);



echo $twig->render("home.twig", [
    "name" => "Thomas"
]);
