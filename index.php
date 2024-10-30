<?php

require_once("./vendor/autoload.php");
require_once("./config/database.php");
require_once("./models/JobOffer.php");


$loader = new \Twig\Loader\FilesystemLoader("./views");
$twig = new \Twig\Environment($loader);

echo $twig->render("home.twig", [
    "name" => "Thomas"
]);
