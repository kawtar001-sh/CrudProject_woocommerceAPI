<?php
require "auth.php";
$nom = $_POST["Nom"];
$Prenom = $_POST["Prenom"];
$Email = $_POST["Email"];
$Ville = $_POST["Ville"];
$Tel = $_POST["Tel"];

$data = [
    'first_name' => $Prenom,
    'last_name' => $nom,
    'email' => $Email,
    'billing' => [
        'city' => $Ville,
        'phone' => $Tel
    ]


];

$woocommerce->post('customers', $data);
header("Location: viewClients.php");
