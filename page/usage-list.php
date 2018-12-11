<?php
//////////// REQUIRE ////////////

require_once( __DIR__ . '/../config.php' );

//////////// PARAMETER ////////////

$page = $_GET['page'] ?? null;

$refCustomer = $_GET['refCustomer'] ?? null;
$refFeature = $_GET['refFeature'] ?? null;

//////////// VARIABLE ////////////

$urlPagination = "../page/usage-list.php?page=";

$customers = new CustomerList();
$features = new FeatureList();
$usages = new UsageList();

//////////// FETCH ////////////

$response = $customers->fetch($page);

// If success, fetch features:
if ($response->is_success()) {
    $response = $features->fetch();

    // If success, fetch usages by a reference:
    if ($response->is_success()) {
        $response = $usages->fetch($page, $refCustomer, $refFeature);
    }
}

//////////// VIEW ////////////

include '../view/usage_list.php';
