<?php include 'layout/top.php'; // En-tête et NavBar. ?>

<div class="card mr-auto ml-auto m-5" style="width:70%;">

    <div class="card-header text-center bg-dark text-white">
        Subscription<br><hr>Step 1: Select a customer
    </div>

    <input id="refOffer" name="refOffer" type="hidden" value="<?= $refOffer ?>">

    <?php include 'partial/customer_list.php'; ?>

    <div class="card-footer bg-dark"></div>

</div>

<?php include 'layout/bottom.php'; // En-tête et NavBar. ?>