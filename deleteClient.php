<?php
require "auth.php";
$id = $_GET['id'];
print_r($woocommerce->delete('customers/' . $id, ['force' => true]));
header("Location:viewClients.php");
