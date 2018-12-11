<?php
//////////// REQUIRE ////////////

require_once( __DIR__ . '/../config.php' );

//////////// PARAMETER ////////////

$refCustomer = $_GET['refCustomer'] ?? null;

//////////// VARIABLE ////////////

$customer = new Customer();

//////////// FETCH ////////////

if (isset($refCustomer)) {
    $response = $customer->fetch($refCustomer);
}

//////////// VIEW ////////////

if ($refCustomer == null) {
    include '../view/customer_save.php';
}

if ($response->is_success()) {
    include '../view/customer_save.php';
}


