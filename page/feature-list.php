<?php
//////////// REQUIRE ////////////

require_once( __DIR__ . '/../config.php' );

//////////// PARAMETER ////////////

//////////// VARIABLE ////////////

$features = new FeatureList();

//////////// FETCH ////////////

$response = $features->fetch();

//////////// VIEW ////////////

if ($response->is_success()) {
    include '../view/feature_list.php';
}
