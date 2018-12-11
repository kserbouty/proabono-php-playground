<?php
//////////// REQUIRE ////////////

require_once( __DIR__ . '/../config.php' );

//////////// PARAMETER ////////////

$refFeature = $_GET['refFeature'] ?? null;

//////////// VARIABLE ////////////

$feature = new Feature();

//////////// FETCH ////////////

if (isset($refFeature)) {
    $response = $feature->fetch($refFeature);
}

//////////// VIEW ////////////

if ($response->is_success()) {
    include '../view/feature_list.php';
}
