<?php if (isset($response)
    && (isset($response->errors) || isset($response->error))) { ?>

<div class="card border-danger bg-dark text-white mr-auto ml-auto mt-3" style="width: 35%;">

    <div class="card-header text-danger bg-transparent text-center">
        ( ! ) Encountered Errors ( ! )
    </div>

    <div class="card-body">
        <?php
        // if single error:
        if (isset($response->error)) {
            $error = $response->error;
            include '../view/partial/error_single.php';
        }
        // if many errors:
        if (isset($response->errors)) {
            foreach ($response->errors as $error) {
                include '../view/partial/error_single.php';
            }
        } ?>
    </div>

</div>

<?php } ?>

