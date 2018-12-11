<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Reference Offer</th>
        <th scope="col">Reference Customer</th>
        <th scope="col">Reference Customer Buyer</th>
        <th scope="col">Term Date</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($subscriptions as $subscription) {?>
        <tr>
            <th scope="row"><?= $subscription->id ?></th>
            <td scope="col"><?= $subscription->titleLocalized ?></td>
            <td scope="col"><?= $subscription->refOffer ?></td>
            <td scope="col"><?= $subscription->refCustomer ?></td>
            <td scope="col"><?= $subscription->refCustomerBuyer ?></td>
            <td scope="col"><?= $subscription->dateTerm ?></td>
        </tr>
    <?php }

    //var_dump($subscriptions);

    ?>

    </tbody>
</table>


<div class="m-2 ml-5">
    Page n°<?= $subscriptions->page ?>
</div>


<nav>
    <ul class="pagination justify-content-center">

        <li class="page-item"><a class="page-link" href=<?= $urlPagination . ($subscriptions->page -1) ?>>Previous</a></li>

        <li class="page-item"><a class="page-link" href=<?= $urlPagination . ($subscriptions->page +1) ?> >Next</a></li>

    </ul>
</nav>
