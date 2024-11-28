<?php

require_once("./vendor/autoload.php");
require_once("./config/database.php");
require_once("./models/JobOffer.php");

$loader = new \Twig\Loader\FilesystemLoader("./views");
$twig = new \Twig\Environment($loader);


// $mainQuery = "SELECT * FROM job_offer";
$q = "
    SELECT 
        job_offer.id AS job_offer_id, 
        job_offer.name AS job_title, 
        company.name AS company_name,
        company.img as company_img
    FROM job_offer
    INNER JOIN company ON job_offer.company_id = company.id
";

$sqlStatement = $conn->prepare($q);
$sqlStatement->execute();

$jobOffersData = $sqlStatement->fetchAll(PDO::FETCH_ASSOC);


echo "<br />";
echo "<br />";
var_dump($jobOffersData[0]);
echo "<br />";
echo "<br />";


echo $twig->render("home.twig", [
    "jobOffers" => $jobOffersData
]);
