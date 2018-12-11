<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">ReferenceCustomer</th>
            <th scope="col">Language</th>
            <th scope="col">Go</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($customers as $customer) {?>
        <tr>
            <th scope="row"><?= $customer->id ?></th>
            <td scope="col"><?= $customer->name ?></td>
            <td scope="col"><?= $customer->email ?></td>
            <td scope="col"><?= $customer->refCustomer ?></td>
            <td scope="col"><?= $customer->language ?></td>
            <td><a href=<?= $urlLink . $customer->refCustomer ?>><img src="/src/sharp-forward-24px.svg"></a></td>
        </tr>
    <?php } ?>

    </tbody>
</table>

<div class="m-2 ml-5">
    Page n°<?= $customers->page ?>
</div>


<nav>
    <ul class="pagination justify-content-center">

        <li class="page-item"><a class="page-link" href=<?= $urlPagination . ($customers->page-1) ?>>Previous</a></li>

        <li class="page-item"><a class="page-link" href=<?= $urlPagination . ($customers->page+1) ?> >Next</a></li>

    </ul>
</nav>

