<?php include 'layout/top.php'; // En-tête et NavBar. ?>

<div class="card mr-auto ml-auto mt-5" style="width: 50%;">
    <div class="card-header text-center bg-dark text-white">
        Features available
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Reference Feature</th>
            <th scope="col">Title Localized</th>
            <th scope="col">Description Localized</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($features as $feature) {?>
            <tr>
                <th scope="row"><?= $feature->id ?></th>
                <td scope="col"><?= $feature->refFeature ?></td>
                <td scope="col"><?= $feature->titleLocalized ?></td>
                <td scope="col"><?= $feature->descriptionLocalized ?></td>
            </tr>
        <?php } ?>

        </tbody>
    </table>

    <div class="card-footer bg-dark"></div>

</div>

<?php include 'layout/bottom.php'; // En-tête et NavBar. ?>