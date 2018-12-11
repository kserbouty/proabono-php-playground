<?php
//////////// REQUIRE ////////////

require_once( __DIR__ . '/../config.php' );

//////////// PARAMETER ////////////

$refCustomer = $_GET['refCustomer'] ?? null;
$refOffer = $_GET['refOffer'] ?? null;

//////////// VARIABLE ////////////

$displayOffer = null;

$customer = new Customer();

if ($refOffer == 'premium') {
    $displayOffer = 'Premium';
}

if ($refOffer == 'starter') {
    $displayOffer = 'Starter';
}

//////////// FETCH ////////////

if (isset($refCustomer)) {
    $customer->fetch($refCustomer);
}

//////////// VIEW ////////////

include '../view/subscription_validation.php';