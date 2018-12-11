<?php


//---Require------------------------------------------------------------------------------------------------------------
require_once('../lib/proabono.php');
//----------------------------------------------------------------------------------------------------------------------


//---Property-----------------------------------------------------------------------------------------------------------
$refCustomer = $_POST['refCustomer'] ?? $_GET['refCustomer'] ?? null;

$company = $_POST['company'] ?? null;
$firstName = $_POST['firstName'] ?? null;
$lastName = $_POST['lastName'] ?? null;
$addressLine1 = $_POST['addressLine1'] ?? null;
$addressLine2 = $_POST['addressLine2'] ?? null;
$zipCode = $_POST['zipCode'] ?? null;
$city = $_POST['city'] ?? null;
$country = $_POST['country'] ?? null;
$region = $_POST['region'] ?? null;
$phone = $_POST['phone'] ?? null;
$taxInformation = $_POST['taxInformation'] ?? null;
//----------------------------------------------------------------------------------------------------------------------


//---Save-Billing-------------------------------------------------------------------------------------------------------
$address = new CustomerAddress();

$address->company = $company;
$address->firstName = $firstName;
$address->lastName = $lastName;
$address->addressLine1 = $addressLine1;
$address->addressLine2 = $addressLine2;
$address->zipCode = $zipCode;
$address->city = $city;
$address->country = $country;
$address->region = $region;
$address->phone = $phone;
$address->taxInformation = $taxInformation;

$response = $address->save($refCustomer);

if ($response->is_success()) { // En cas de succès, redirection vers la page offer.php.
    header('Location:../page/offer.php?refCustomer=' . $refCustomer);
} else { // En cas d'échec; affichage de l'erreur dans la vue du formulaire avec $response->error(s).
    include '../view/customer_address.php';
}
//----------------------------------------------------------------------------------------------------------------------