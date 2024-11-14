<?php

require_once("./vendor/autoload.php");
require_once("./config/database.php");
require_once("./models/JobOffer.php");

$loader = new \Twig\Loader\FilesystemLoader("./views");
$twig = new \Twig\Environment($loader);


$mainQuery = "SELECT * FROM job_offer";

$sqlStatement = $conn->prepare($mainQuery);
$sqlStatement->execute();

$jobOffersData = $sqlStatement->fetchAll();


var_dump($jobOffersData);


echo $twig->render("home.twig", [
    "jobOffers" => $jobOffersData
]);
