<?php include 'layout/top.php'; // En-tête et NavBar. ?>

    <div class="card mr-auto ml-auto mt-5" style="width: 50%;">
        <div class="card-header text-center bg-dark text-white">
            Subscription<br><hr>Step 2: Select an offer
        </div>
        <div class="card-body">

            <input id="refCustomer" name="refCustomer" type="hidden" value="<?= $refCustomer ?>">

            <?php include 'partial/offer_list.php'; ?>

        </div>

        <div class="card-footer bg-dark"></div>

    </div>

<?php include 'layout/bottom.php'; // En-tête et NavBar. ?>