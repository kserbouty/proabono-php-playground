<?php


//---Require------------------------------------------------------------------------------------------------------------
require_once('../lib/proabono.php');
//----------------------------------------------------------------------------------------------------------------------


//---Property-----------------------------------------------------------------------------------------------------------
$refCustomer = $_POST['refCustomer'] ?? $_GET['refCustomer'] ?? null;

$typePayment = $_POST['typePayment'] ?? null;
$dateNextBilling = $_POST['dateNextBilling'] ?? null;
//----------------------------------------------------------------------------------------------------------------------


//---Save-Payment-------------------------------------------------------------------------------------------------------
$payment = new CustomerPayment();

$payment->typePayment = $typePayment;
$payment->dateNextBilling = $dateNextBilling;

$response = $payment->save($refCustomer);

if ($response->is_success()) {
    header('Location:../page/offer.php?refCustomer=' . $refCustomer);
} else {
    include '../view/customer_payment.php';
}
//----------------------------------------------------------------------------------------------------------------------