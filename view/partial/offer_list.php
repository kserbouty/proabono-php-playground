<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Reference Offer</th>
        <?php if (isset($urlLink)) { ?>
        <th scope="col">Go</th>
        <?php } else { }?>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($offers as $offer) {?>
        <tr>
            <th scope="row"><?= $offer->id ?></th>
            <td scope="col"><?= $offer->name ?></td>
            <td scope="col"><?= $offer->refOffer ?></td>
            <?php if (isset($urlLink)) { ?>
            <td><a href=<?= $urlLink . $offer->refOffer ?>><img src="/src/sharp-forward-24px.svg"></a></td>
            <?php } else { }?>
        </tr>
    <?php } ?>

    </tbody>
</table>