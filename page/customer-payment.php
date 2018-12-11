<?php
//////////// REQUIRE ////////////

require_once( __DIR__ . '/../config.php' );

//////////// PARAMETER ////////////

$refCustomer = $_GET['refCustomer'] ?? null;

//////////// VARIABLE ////////////

$payment = new CustomerPayment();

//////////// FETCH ////////////

// If refCustomer is set:
if (isset($refCustomer)) {
    // Fill the response with the billing address.
    $response = $payment->fetch($refCustomer);
}

//////////// VIEW ////////////

// If response is succes, include the view.
if ($response->is_success()) {
    include '../view/customer_payment.php';
}