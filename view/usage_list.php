<?php include 'layout/top.php'; // En-tête et NavBar. ?>

    <div class="card mr-auto ml-auto mt-5" style="width: 50%;">
        <div class="card-header text-center bg-dark text-white">
            Retrieve an Usage<br><hr>Select a feature:
        </div>
        <div class="card-body">
            <form action="/process/usage_list.php" method="POST" class="m-4">
                <div class="form-group">

                    <?php include 'partial/feature_select.php' ?>

                    <input type="hidden" name="refCustomer" value="<?= $refCustomer ?>">

                    <button type="submit" class="btn btn-primary mt-3 mb-1 float-right">Go</button>

                </div>
            </form>
        </div>
        <div class="card-footer bg-dark"></div>

    </div>

    <div class="card mr-auto ml-auto m-5" style="width: 70%;">

        <div class="card-header text-center bg-dark text-white">
            Usages available
        </div>

        <?php include 'partial/usage_list.php' ?>

        <div class="card-footer bg-dark"></div>

    </div>

<?php include 'layout/bottom.php'; // En-tête et NavBar. ?>