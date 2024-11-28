<?php

require_once("./vendor/autoload.php");
require_once("./config/database.php");
require_once("./models/JobOffer.php");

$loader = new \Twig\Loader\FilesystemLoader("./views");
$twig = new \Twig\Environment($loader);


// $mainQuery = "SELECT * FROM job_offer";
$q = "
    SELECT job_offer.id, job_offer.name, company.name, company.img
    FROM job_offer
    INNER JOIN company ON job_offer.company_id = company.id
";

$sqlStatement = $conn->prepare($q);
$sqlStatement->execute();

$jobOffersData = $sqlStatement->fetchAll();


// var_dump($jobOffersData[0]);
var_dump($jobOffersData[0][2]);


echo $twig->render("home.twig", [
    "jobOffers" => $jobOffersData
]);
