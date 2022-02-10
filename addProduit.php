<?php
require "auth.php";
$nom = $_POST["Nom"];
$Prix = $_POST["Prix"];
$Description = $_POST["Description"];
$data = [
    'name' => $nom,
    'regular_price' => $Prix,
    'description' => $Description


];

$woocommerce->post('products', $data);
header("Location: viewProducts.php");
