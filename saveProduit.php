<?php
require "auth.php";
$id = $_POST['id'];
$name = $_POST['Nom'];
$Description = $_POST['Description'];
$Price = $_POST['regular_price'];


$data = [
    'name' => $name,
    'description' => $Description,
    'regular_price' => $Price



];

$woocommerce->put('products/' . $id, $data);
header("Location:viewProducts.php");
