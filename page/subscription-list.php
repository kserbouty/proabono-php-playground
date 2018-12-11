<?php
//////////// REQUIRE ////////////

require_once( __DIR__ . '/../config.php' );

//////////// PARAMETER ////////////

$refCustomer = $_GET['refCustomer'] ?? null;
$refCustomerBuyer = $_GET['refCustomerBuyer'] ?? null;

$page = $_GET['page'] ?? null;

//////////// VARIABLE ////////////

$urlPagination = "../page/subscription-list.php?page=";

$subscriptions = new SubscriptionList();

//////////// FETCH ////////////

// If reference customer / buyer is set:
$response = $subscriptions->fetch($page, $refCustomer, $refCustomerBuyer);

//////////// VIEW ////////////

include '../view/subscription_list.php';
