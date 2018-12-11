<?php include 'layout/top.php'; // En-tête et NavBar. ?>

<div class="card mr-auto ml-auto m-5" style="width: 50%;">

    <div class="card-header text-center bg-dark text-white">
        Billing Address
    </div>

    <div class="card-body">
        <form action="../process/customer_address.php" method="POST" class="m-4" >

            <input type="hidden" name="refCustomer" value="<?= $refCustomer ?>">

            <!---Company----------------------------------------------------------------------------------------------->
            <div class="form-group">
                <label for="company">Company:</label>
                <input type="text" class="form-control col-sm " name="company" value="<?= $address->company ?>">
                <p class="card-text"><small class="text-muted"><i>Example: John Doe LLC</i></small></p>
            </div>

            <!---First-Name-------------------------------------------------------------------------------------------->
            <div class="form-group">
                <label for="company">First Name:</label>
                <input type="text" class="form-control col-sm " name="firstName" value="<?= $address->firstName ?>">
                <p class="card-text"><small class="text-muted"><i>Example: John</i></small></p>
            </div>

            <!---Last-Name--------------------------------------------------------------------------------------------->
            <div class="form-group">
                <label for="company">Last Name:</label>
                <input type="text" class="form-control col-sm " name="lastName" value="<?= $address->lastName ?>">
                <p class="card-text"><small class="text-muted"><i>Example: Doe</i></small></p>
            </div>

            <!---Address-1--------------------------------------------------------------------------------------------->
            <div class="form-group">
                <label for="company">Address Line 1:</label>
                <input type="text" class="form-control col-sm " name="addressLine1" value="<?= $address->addressLine1 ?>">
                <p class="card-text"><small class="text-muted"><i>Example: 123 avenue des Champs Elysées</i></small></p>
            </div>

            <!---Address-2--------------------------------------------------------------------------------------------->
            <div class="form-group">
                <label for="company">Address Line 2:</label>
                <input type="text" class="form-control col-sm " name="addressLine2" value="<?= $address->addressLine2 ?>">
                <p class="card-text"><small class="text-muted"><i>Example: 1st Floor</i></small></p>
            </div>

            <!---Zip-Code---------------------------------------------------------------------------------------------->
            <div class="form-group">
                <label for="company">Zip Code:</label>
                <input type="text" class="form-control col-sm " name="zipCode" value="<?= $address->zipCode ?>">
                <p class="card-text"><small class="text-muted"><i>Example: 75008</i></small></p>
            </div>

            <!---City-------------------------------------------------------------------------------------------------->
            <div class="form-group">
                <label for="company">City:</label>
                <input type="text" class="form-control col-sm " name="city" value="<?= $address->city ?>">
                <p class="card-text"><small class="text-muted"><i>Example: Paris</i></small></p>
            </div>

            <!---Country----------------------------------------------------------------------------------------------->
            <div class="form-group">
                <label for="company">Country:</label>
                <input type="text" class="form-control col-sm " name="country" value="<?= $address->country ?>">
                <p class="card-text"><small class="text-muted"><i>Example: FR</i></small></p>
            </div>

            <!---Region------------------------------------------------------------------------------------------------>
            <div class="form-group">
                <label for="company">Region:</label>
                <input type="text" class="form-control col-sm " name="region" value="<?= $address->region ?>">
                <p class="card-text"><small class="text-muted"><i>Example: FR-75</i></small></p>
            </div>

            <!---Phone------------------------------------------------------------------------------------------------->
            <div class="form-group">
                <label for="company">Phone:</label>
                <input type="text" class="form-control col-sm " name="phone" value="<?= $address->phone ?>">
                <p class="card-text"><small class="text-muted"><i>Example: +33102030405</i></small></p>
            </div>

            <!---Tax-Information--------------------------------------------------------------------------------------->
            <div class="form-group">
                <label for="company">Tax Information:</label>
                <input type="text" class="form-control col-sm " name="taxInfos" value="<?= $address->taxInformation ?>">
                <p class="card-text"><small class="text-muted"><i>Example: FR1234567890</i></small></p>
            </div>

            <button type="submit" class="btn btn-primary float-right">Save</button>
        </form>
    </div>

    <div class="card-footer">
        <a href="/page/customer.php?refCustomer=<?= $refCustomer ?>">Back to your customer.</a>
    </div>

</div>
<!--------------------------------------------------------------------------------------------------------------------->

<?php include 'layout/bottom.php'; // En-tête et NavBar. ?>