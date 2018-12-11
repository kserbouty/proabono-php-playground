<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">IdSegment</th>
        <th scope="col">ReferenceCustomer</th>
        <th scope="col">ReferenceFeature</th>
        <th scope="col">QuantityCurrent</th>
        <th scope="col">DatePeriodEnd</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($usages as $usage) {?>
        <tr>
            <th scope="row"><?= $usage->idSegment ?></th>
            <td scope="col"><?= $usage->refCustomer ?></td>
            <td scope="col"><?= $usage->refFeature ?></td>
            <td scope="col"><?= $usage->quantityCurrent ?></td>
            <td scope="col"><?= $usage->datePeriodEnd ?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>

<div class="mr-auto ml-auto m-3">
    <nav aria-label="Page navigation example">
        <ul class="pagination">

            <li class="page-item"><a class="page-link" href=<?= $urlPagination . ($usages->page-1) ?>>Previous</a></li>

            <li class="page-item"><a class="page-link" href=<?= $urlPagination . ($usages->page+1) ?> >Next</a></li>

        </ul>
    </nav>
</div>