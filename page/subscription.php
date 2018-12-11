<?php
//////////// REQUIRE ////////////

require_once( __DIR__ . '/../config.php' );

//////////// PARAMETER ////////////

$refCustomer = $_GET['refCustomer'] ?? null;
$idSubscription = $_GET['idSubscription'] ?? null;

//////////// VARIABLE ////////////

$subscription = new Subscription();
$response = null;

//////////// FETCH ////////////

// Case id subscription is set:
if (isset($idSubscription)) {
    $response = $subscription->fetchById($idSubscription);
}

// Case ref customer is set:
else if (isset($refCustomer)) {
    $response = $subscription->fetchByCustomer($refCustomer);
}

//////////// VIEW ////////////

// Case response is null:
if ($response == null) {
    header ('Location: http://www.proabono-demo.fr/page/customer-list.php');

// Case response is success:
} else if ($response->is_success()) {
    include '../view/subscription.php';

// Case response is error:
} else {
    include '../view/error.php';
}