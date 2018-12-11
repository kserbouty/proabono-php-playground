<!DOCTYPE html>
<html lang="en">

<!---Header------------------------------------------------------------------------------------------------------------>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="/script/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>MyProAbono</title>
</head>
<!--------------------------------------------------------------------------------------------------------------------->

<!---Navbar------------------------------------------------------------------------------------------------------------>
<nav class="navbar navbar-expand-sm navbar-static-top navbar-dark bg-dark">
    <div class="container-fluid">

        <!---Home------------------------------------------------------------------------------------------------------>
        <div class="navbar-header">
            <a class="navbar-brand" href="../../index.php">Home</a>
        </div>
        <!------------------------------------------------------------------------------------------------------------->

        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbar">
            <ul class="nav navbar-nav">

                <!---Customer------------------------------------------------------------------------------------------>
                <li class="nav-item dropdown active">
                    <a id="navbarCustomer" class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Customers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarCustomer">
                        <a class="dropdown-item" href="/page/customer-list.php">List of customers</a>
                        <a class="dropdown-item" href="/page/customer-save.php">Create a customer</a>
                    </div>
                </li>
                <!----------------------------------------------------------------------------------------------------->

                <!---Feature------------------------------------------------------------------------------------------->
                <li class="nav-item dropdown active">
                    <a class="nav-link" href="/page/feature-list.php">
                        Features
                    </a>
                </li>
                <!----------------------------------------------------------------------------------------------------->

                <!---Offer--------------------------------------------------------------------------------------------->
                <li class="nav-item dropdown active">
                    <a class="nav-link" href="/page/offer-list.php">
                        Offers
                    </a>
                </li>
                <!----------------------------------------------------------------------------------------------------->

                <!---Subscription-------------------------------------------------------------------------------------->
                <li class="nav-item dropdown active">
                    <a id="navbarSub" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Subscriptions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarSub">
                        <a class="dropdown-item" href="/page/subscription-list.php">List of subscriptions</a>
                    </div>
                </li>
                <!----------------------------------------------------------------------------------------------------->

                <!---Usage--------------------------------------------------------------------------------------------->
                <li class="nav-item dropdown active">
                    <a class="nav-link" href="/page/usage-list.php">
                        Usages
                    </a>
                </li>
                <!----------------------------------------------------------------------------------------------------->

            </ul>
        </div>
    </div>
</nav>
<!--------------------------------------------------------------------------------------------------------------------->

<body style="background:#FFFAF0">

<!---Errors------------------------------------------------------------------------------------------------------------>
<?php include dirname(__DIR__) . '/partial/error_any.php'; ?>
<!--------------------------------------------------------------------------------------------------------------------->

