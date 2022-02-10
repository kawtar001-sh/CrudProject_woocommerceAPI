<?php
require "auth.php";
echo json_encode($woocommerce->get('customers'));
