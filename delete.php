<?php
require "auth.php";
$id = $_GET['id'];
print_r($woocommerce->delete('products/' . $id, ['force' => true]));
header("Location:viewProducts.php");
