<?php
//////////// REQUIRE ////////////

require_once( __DIR__ . '/../config.php' );

//////////// PARAMETER ////////////

$refCustomer = $_GET['refCustomer'] ?? null;

$page = $_GET['page'] ?? null;

//////////// VARIABLE ////////////

$urlLink = "/page/customer.php?refCustomer=";

$urlPagination = "../page/customer-list.php?page=";

$customers = new CustomerList();

//////////// FETCH ////////////

$response = $customers->fetch($page);

//////////// VIEW ////////////

if ($response->is_success()) {
    include '../view/customer_list.php';
}
