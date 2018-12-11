<?php include 'layout/top.php'; // En-tête et NavBar. ?>

<!---Customer---------------------------------------------------------------------------------------------------------->
<div class="card mr-auto ml-auto mt-5" style="width: 50%;">
    <div class="card-header text-center bg-dark text-white">
        Personal Information
    </div>
    <div class="card-body">

    <p class="card-text">Name: <b><?php echo $customer->name ?></b></p>
    <p class="card-text">Email: <b><?php echo $customer->email ?></b></p>
    <p class="card-text">Language: <b><?php echo $customer->language ?></b></p>

    </div>
    <div class="card-footer">

        <a href="/page/customer-save.php?refCustomer=<?= $customer->refCustomer ?>">Update personal information.</a><br>
        <a href="/page/subscription-create.php?refCustomer=<?= $customer->refCustomer ?>">Add a subscription.</a><br><hr>

        <?php if ($response->status != 204) { ?>
        <a href="/page/subscription-list.php?refCustomer=<?= $customer->refCustomer ?>">Subscriptions available.</a><br>
        <?php } ?>

        <?php if (isset($customer->links) && (array_key_exists('hosted-collection-upgrade', $customer->links))) {?>
            <a href="/page/usage-list.php?refCustomer=<?= $customer->refCustomer ?>">Usages available.</a><br>
        <?php } ?>

        <hr><a href="/page/customer-list.php">Back to the customer selection.</a><br>

    </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->

<!---Address----------------------------------------------------------------------------------------------------------->
<div class="card mr-auto ml-auto mt-5" style="width: 50%;">
    <div class="card-header text-center bg-dark text-white">
        Billing Address
    </div>
    <div class="card-body">

        <?php if (isset($address)) { ?>

        <p class="card-text">Company: <b><?php echo $address->company ?></b></p>
        <p class="card-text">First Name: <b><?php echo $address->firstName ?></b></p>
        <p class="card-text">Last Name: <b><?php echo $address->lastName ?></b></p>
        <p class="card-text">Address Line 1: <b><?php echo $address->addressLine1 ?></b></p>
        <p class="card-text">Address Line 2: <b><?php echo $address->addressLine2 ?></b></p>
        <p class="card-text">Zip Code: <b><?php echo $address->zipCode ?></b></p>
        <p class="card-text">City: <b><?php echo $address->city ?></b></p>
        <p class="card-text">Country: <b><?php echo $address->country?></b></p>
        <p class="card-text">Region: <b><?php echo $address->region ?></b></p>
        <p class="card-text">Phone: <b><?php echo $address->phone ?></b></p>
        <p class="card-text">Tax Information: <b><?php echo $address->taxInformation ?></b></p>

        <?php } else {
            echo 'No billing address.';
        } ?>

    </div>
    <div class="card-footer">
        <a href="/page/customer-address.php?refCustomer=<?= $customer->refCustomer ?>">Update billing adress.</a><br>
    </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->

<!---Payment----------------------------------------------------------------------------------------------------------->
<div class="card mr-auto ml-auto mt-5" style="width: 50%;">
    <div class="card-header text-center bg-dark text-white">
        Payment Settings
    </div>
    <div class="card-body">

        <?php if (isset($payment)) { ?>
        <p class="card-text">Type Payment: <b><?php echo $payment->typePayment ?></b></p>
        <p class="card-text">Date Next Billing: <b><?php echo $payment->dateNextBilling ?></b></p>
        <?php } else {
            echo 'No payment payment.';
        } ?>

    </div>
    <div class="card-footer">
        <a href="/page/customer-payment.php?refCustomer=<?= $customer->refCustomer ?>">Update payment settings.</a><br>
    </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->

<!---Portal-Client----------------------------------------------------------------------------------------------------->
<div class="card mr-auto ml-auto mt-5 mb-5" style="width: 50%;">
    <div class="card-header text-center bg-dark text-white">
        Portal Client
    </div>
    <div class="card-body">
        <a href="<?= $customer->links['hosted-collection-offers'] ?>" target="_blank">Go to the offers.</a> (<i>uniquement en mode authentifié</i>)<br>
        <a href="<?= $customer->links['hosted-home'] ?>" target="_blank">Go to the portal client.</a><br>
        <a href="<?= $customer->links['hosted-register'] ?>" target="_blank">Update payment settings on portal client.</a><br>
        <?php if (isset($customer->links) && (array_key_exists('hosted-collection-upgrade', $customer->links))) {?>
        <a href="<?= $customer->links['hosted-collection-upgrade'] ?>" target="_blank">Already subscribed? Update your offer</a><br>
        <?php } ?>
    </div>
</div>

<?php include 'layout/bottom.php'; // En-tête et NavBar. ?>