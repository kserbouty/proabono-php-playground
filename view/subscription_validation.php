<?php include 'layout/top.php'; // En-tête et NavBar. ?>

<div class="card mr-auto ml-auto mt-5" style="width: 50%;">
    <div class="card-header text-center bg-dark text-white">
        Subscription<br><hr>Step 3: Validation
    </div>
    <div class="card-body">

        <form action="../process/subscription_save.php" method="POST">

            <input type="hidden" name="refCustomer" value="<?=$refCustomer?>" >
            <input type="hidden" name="refOffer" value="<?=$refOffer?>" >

            <h5 class="m-5 text-center">Confirm the subscription to the <b><?= $displayOffer ?></b> offer,<br>
                available now for <b><?= $customer->name ?></b> ?</h5>

            <button type="submit" class="btn btn-success mb-2" style="margin-left:45%;">
                    Confirm
            </button>

        </form>

    </div>



    <div class="card-footer bg-dark"></div>
</div>

<?php include 'layout/bottom.php'; // En-tête et NavBar. ?>
