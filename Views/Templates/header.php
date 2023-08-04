<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <?php

    use Controllers\AuthController;

    if (!is_null(@$pageData['css'])) : ?>
        <link href="<?php echo INCLUDE_PATH ?>Styles/<?php echo $pageData['css'] ?>" rel="stylesheet">
    <?php endif ?>

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>Styles/header.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>Styles/footer.css">

    <title>I Don't really know yet</title>

</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="<?php echo INCLUDE_PATH ?>Scripts/code.jquery.com_jquery-3.7.0.min.js"></script>
    
    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

            <div class="container-fluid">

                <a class="navbar-brand" href="#">Spinola</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button><!--navbar-toggler--->

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">

                    <ul class="navbar-nav me-auto mb-2 mb-md-0">

                        <li class="nav-item active"> <a class="nav-link" aria-current="page" href="<?php echo INCLUDE_PATH ?>">Home</a> </li>
                        <li class="nav-item"> <a id="contact" class="nav-link" tabindex="-1">contact</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="https://www.linkedin.com/in/gabriel-spinola-b64b5b273/">Linkedin</a> </li>


                        <?php if (AuthController::isLogged()) : ?>
                            <li class="nav-item"> <a class="nav-link " href="<?php echo INCLUDE_PATH ?>signin?logout" tabindex="-1">Logout</a></li>
                        <?php else : ?>
                            <li class="nav-item"> <a class="nav-link " href="<?php echo INCLUDE_PATH ?>signin" tabindex="-1">Login</a></li>
                        <?php endif ?>

                        <?php if ($_SESSION[Position::class] == Position::Admin->value) : ?>
                            <li class="nav-item"> <a class="nav-link " href="<?php echo INCLUDE_PATH ?>adm" tabindex="-1">Admin Panel</a></li>
                        <?php endif ?>

                    </ul><!--navbar-nav--->

                </div><!--collapse navbar-collapser--->

            </div><!--container-fluid--->

        </nav><!--navbar navbar-expand-md--->

    </header><!--END HEADER--->