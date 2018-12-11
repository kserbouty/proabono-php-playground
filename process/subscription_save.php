<?php


//---Require------------------------------------------------------------------------------------------------------------
require_once('../lib/proabono.php');
//----------------------------------------------------------------------------------------------------------------------


//---Property-----------------------------------------------------------------------------------------------------------
$refCustomer = $_POST['refCustomer'] ?? null;
$refOffer = $_POST['refOffer'] ?? null;
//----------------------------------------------------------------------------------------------------------------------


//---Save---------------------------------------------------------------------------------------------------------------
$sub = new Subscription();

$data = array(
    'ReferenceCustomer' => $refCustomer,
    'ReferenceOffer' => $refOffer
);

$response = $sub->save($data);

// If success, redirect to the subscription result page:
if ($response->is_success()) {
    header('Location:../page/subscription-list.php?refCustomer=' . $refCustomer);

    // If error, redirect to the subscription selection with a display alert:
} else {
    include '../view/subscription_select_customer.php';
}
//----------------------------------------------------------------------------------------------------------------------