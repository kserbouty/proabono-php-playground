<?php

$customer = new Customer();

include 'layout/top.php'; // En-tête et NavBar.

?>

<div class="card mr-auto ml-auto mt-5" style="width: 50%;">

    <div class="card-header text-center bg-dark text-white">
    <?php if (isset($customer->refCustomer)) { ?>
        Update a customer
    <?php } else {?>
        Create a customer
    <?php } ?>
    </div>

    <div class="card-body">
        <form action="../process/customer_save.php" method="POST" class="m-4" >

            <!---Customer---------------------------------------------------------------------------------------------->
            <div class="form-group">
                <label for="refCustomer">Reference Customer :</label>
                <?php if (isset($customer->refCustomer)) { ?>
                    <input type="hidden" name="refCustomer" value="<?= $customer->refCustomer ?>">
                    <div class="form-control col-sm" style="background-color: #efefef; color: #888;" >
                        <?= $customer->refCustomer ?>
                    </div>
                <?php } else {?>
                    <input type="text" class="form-control col-sm " name="refCustomer" >
                <?php } ?>
            </div>

            <!---Name-------------------------------------------------------------------------------------------------->
            <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" class="form-control col-sm" name="name" value="<?= $customer->name ?>" >
            </div>

            <!---Email------------------------------------------------------------------------------------------------->
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="text" class="form-control col-sm" name="email" value="<?= $customer->email ?>">
            </div>

            <button type="submit" class="btn btn-primary float-right mt-2">Go</button>
        </form>
    </div>

    <!---Back-Customer------------------------------------------------------------------------------------------------->
    <div class="card-footer bg-dark">
        <?php if (isset($customer->refCustomer)) { ?>
            <a href="/page/customer.php?refCustomer=<?= $customer->refCustomer ?>">Back to your customer.</a>
        <?php } ?>
    </div>

</div>

<?php include 'layout/bottom.php'; // En-tête et NavBar. ?>