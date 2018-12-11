<?php
//////////// REQUIRE ////////////

require_once( __DIR__ . '/../config.php' );

//////////// PARAMETER ////////////


//////////// VARIABLE ////////////

$offers = new OfferList();

//////////// FETCH ////////////

$response = $offers->fetch();

//////////// VIEW ////////////

if ($response->is_success()) {
    include '../view/offer_list.php';
}
