<?php include 'layout/top.php'; // En-tête et NavBar. ?>

<div class="card mr-auto ml-auto m-5" style="width: 50%;">
    <div class="card-header text-center bg-dark text-white">
        Payment Settings
    </div>
    <div class="card-body">
        <form action="../process/customer_payment.php" method="POST" class="m-4" >

            <input type="hidden" name="refCustomer" value="<?= $refCustomer ?>">

            <?php if(isset($payment->typePayment)) { ?>
            <p class="card-text">Current Payment: <b><?php echo $payment->typePayment ?></b></p><hr>
            <?php } ?>

            <div class="form-group">

                <!---Type-Payment-------------------------------------------------------------------------------------->
                <label for="type">Type Payment:</label>
                <select class="form-control" id="typePayment" name="typePayment">
                    <option selected value="<?= $payment->typePayment ?>">Keep Current Payment</option>
                    <option value="ExternalBank">ExternalBank</option>
                    <option value="ExternalCash">ExternalCash</option>
                    <option value="ExternalCheck">ExternalCheck</option>
                    <option value="ExternalOther">ExternalOther</option>
                </select>

            </div>

            <!---Date-Next-Billing------------------------------------------------------------------------------------->
            <div class="form-group">
                <label for="dateNextBilling">Date Next Billing:</label>
                <input type="date" class="form-control col-sm " name="dateNextBilling" value="<?= $payment->dateNextBilling ?>">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <div class="card-footer">
        <a href="/page/customer.php?refCustomer=<?= $refCustomer ?>">Back to your customer.</a>
    </div>
</div>


<?php include 'layout/bottom.php'; // En-tête et NavBar. ?>
