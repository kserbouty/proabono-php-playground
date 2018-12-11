<?php
//////////// REQUIRE ////////////

require_once( __DIR__ . '/../config.php' );

//////////// PARAMETER ////////////

$refCustomer = $_GET['refCustomer'] ?? null;
$refOffer = $_GET['refOffer'] ?? null;
$page = $_GET['page'] ?? null;

//////////// VARIABLE ////////////

// Use on partial list:
$urlPagination = null;
$urlLink = null;

$customer = new Customer();
$subscriptions = new CustomerList();

$offer = new Offer();
$offers = new OfferList();

//////////// FETCH ////////////

// If reference subscription is set:
if (isset($refCustomer)) {

    // Load the subscription:
    $response = $customer->fetch($refCustomer);

    // If success:
    if ($response->is_success()) {

        // If reference offer is set with the reference subscription:
        if (isset($refOffer)) {
            $response = $offer->fetch($refOffer);

            // If success:
            if ($response->is_success()) {
                $urlLink = "/page/subscription_validation.php?refCustomer=" . $refCustomer . "&refOffer=";

            // If error:
            } else {
                include '../view/subscription_select_offer.php';
            }

        // If reference offer is not set:
        } else {
            $response = $offers->fetch();

            // If success:
            if ($response->is_success()) {
                $urlLink = "/page/subscription-validation.php?refCustomer=" . $refCustomer . "&refOffer=";
                include '../view/subscription_select_offer.php';

            // If error:
            } else {
                include '../view/subscription_select_offer.php';
            }
        }

    // If error:
    } else {
        include '../view/subscription_select_customer.php';
    }
// If reference subscription is not set:
} else {
    $urlLink = "/page/subscription-create.php?refCustomer=";
    $urlPagination = "../page/subscription-create.php?page=";

    // Load the subscriptions list:
    $response = $subscriptions->fetch($page);

    // If succes:
    if ($response->is_success()) {
        include '../view/subscription_select_customer.php';

    // If error:
    } else {
        include '../view/subscription_select_customer.php';
    }

}

//////////// VIEW ////////////

