<?php include 'layout/top.php'; // En-tête et NavBar. ?>

<div class="card mr-auto ml-auto mt-5" style="width: 50%;">
    <div class="card-header text-center bg-dark text-white">
        Offers available
    </div>

    <?php include 'partial/offer_list.php' ?>

    <div class="card-footer bg-dark">
        <a href="/page/subscription-create.php">Create a subscription.</a><br>
    </div>

</div>

<?php include 'layout/bottom.php'; // En-tête et NavBar. ?>