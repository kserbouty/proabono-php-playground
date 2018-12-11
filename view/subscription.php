<?php include 'layout/top.php'; // En-tête et NavBar. ?>

<!---Subscription-Information------------------------------------------------------------------------------------------>
<div class="card mr-auto ml-auto mt-5" style="width: 50%;">
    <div class="card-header text-center bg-dark text-white">
        Subscription Information
    </div>
    <div class="card-body">

    <p class="card-text">Id: <b><?php echo $subscription->id ?></b></p>
    <p class="card-text">Reference Offer: <b><?php echo $subscription->refOffer ?></b></p>
    <p class="card-text">Reference Customer: <b><?php echo $subscription->refCustomer ?></b></p>

    </div>
    <div class="card-footer bg-dark">
    </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->

<?php include 'layout/bottom.php'; // En-tête et NavBar. ?>