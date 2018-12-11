<?php if (isset($error)) { ?>

    <?php if (isset($error->code)) { ?>
    <p class="card-text">Code Error: <b><?php echo $error->code; ?></b></p>
    <?php } ?>

    <?php if (isset($error->target)) { ?>
        <p class="card-text">Target: <b><?php echo $error->target; ?></b></p>
    <?php } ?>

    <?php if (isset($error->message)) { ?>
        <p class="card-text">Message: <b><?php echo $error->message; ?></b></p>
    <?php } ?>

    <?php if (isset($error->exception)) { ?>
        <p class="card-text">Exception: <b><?php echo $error->exception; ?></b></p>
    <?php } ?>

    <hr class="border-danger">

<?php } ?>