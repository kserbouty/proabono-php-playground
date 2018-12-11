<?php
//////////// REQUIRE ////////////

require_once( __DIR__ . '/../config.php' );

//////////// PARAMETER ////////////

$refOffer = $_GET['refOffer'] ?? null;

//////////// VARIABLE ////////////

$offer = new Offer();

//////////// FETCH ////////////

if (isset($refOffer)) {
    $response = $offer->fetch($refOffer);
}

//////////// VIEW ////////////

if ($response->is_success()) {
    include '../view/offer_list.php';
}
