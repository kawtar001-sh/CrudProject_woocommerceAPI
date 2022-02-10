<?php
require "auth.php";
$id = $_POST['id'];
$name = $_POST['Nom'];
$Prenom = $_POST['Prenom'];
$Email = $_POST['Email'];
$Ville = $_POST['Ville'];
$Tel = $_POST['Tel'];



$data = [
    'last_name' => $name,
    'first_name' => $Prenom,
    'email' => $Email,
    'billing' => [
        'city' => $Ville,
        'phone' => $Tel
    ]



];

$woocommerce->put('customers/' . $id, $data);
header("Location:viewClients.php");
