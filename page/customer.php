<?php
//////////// REQUIRE ////////////

require_once( __DIR__ . '/../config.php' );

//////////// PARAMETER ////////////

$refCustomer = $_GET['refCustomer'] ?? null;

//////////// VARIABLE ////////////

$customer = new Customer();
$address = new CustomerAddress();
$payment = new CustomerPayment();

//////////// FETCH ////////////

// If refCustomer is set:
if (isset($refCustomer)) {
    // Fill response with the subscription
    $response = $customer->fetch($refCustomer);
    // If response is success:
    if ($response->is_success()) {
        // Fill the new response with the billing address.
        $response = $address->fetch($refCustomer);
        // If response is success:
        if ($response->is_success()) {
            // Fill the new response with the payment settings.
            $response = $payment->fetch($refCustomer);
        }
    }
}

//////////// VIEW ////////////

include '../view/customer.php';
