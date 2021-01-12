<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=bootstrap_project', 'root', '');

    $sql = $pdo -> prepare(
        "SELECT * FROM `tb_extra`"
    );

    $sql -> execute();
    $about = $sql -> fetch()['extra'];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

    <title>Bootstrap Project</title>

</head>

<body>

    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

            <div class="container-fluid">

                <a class="navbar-brand" href="#">Bootstrap</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button><!--navbar-toggler--->

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">

                    <ul class="navbar-nav me-auto mb-2 mb-md-0">

                        <li class="nav-item active"> <a class="nav-link" aria-current="page" href="#">Home</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="about">About</a> </li>
                        <li class="nav-item"> <a class="nav-link " href="contact" tabindex="-1">contact</a> </li>

                    </ul><!--navbar-nav--->

                </div><!--collapse navbar-collapser--->

            </div><!--container-fluid--->

        </nav><!--navbar navbar-expand-md--->

    </header><!--END HEADER--->

    <div class="box">

        <section class="banner">

            <div class="overlay"></div>

            <div class="container main-banner">

                <div class="row">

                    <div class="col-md-12 text-center">

                        <h2>&lt;Danki Code&gt;</h2>

                        <p>Company focused on digital marketing and web development</p>

                        <a href="">Know More!</a>

                    </div><!--col-md-12--->

                </div><!--row-->

            </div><!--container--->

        </section><!--banner--->

        <section class="main-register">

            <div class="container">

                <div class="row text-center">

                    <div class="col-md-6">

                        <h2>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg> Join our list
                        </h2>

                    </div>

                    <div class="col-md-6">

                        <form method="post">

                            <input type="text" name="name"><input type="submit" name="action" value="Enviar">

                        </form>

                    </div><!--col-md-6-->
                    
                </div><!--row-->

            </div><!--container-->

        </section><!--main-register-->

        <section class="differentials text-center">

            <h2>Conheça Nossa Empresa</h2>

            <div class="container differentials-container">

                <div class="row">

                    <?php echo $about ?>
                    
                </div><!--row-->

            </div><!--differentials-container-->

        </section><!--differentials-->

        <section class="testimonial text-center">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <h2>testimonial</h2>

                        <blockquote>

                            <p>"Phasellus et vehicula velit. Suspendisse ut faucibus lectus. Curabitur fermentum lacus odio, eget egestas turpis finibus in. Aliquam eget urna condimentum, lobortis nisl quis, congue libero. Maecenas non velit consectetur, ultrices justo sed, gravida purus. Phasellus efficitur tempus dolor, sit amet vehicula ligula condimentum quis. Ut euismod, urna ac ultricies lacinia, lectus justo vulputate sem, vitae faucibus eros mi quis nisl"</p>

                        </blockquote>

                    </div><!--col-md-12-->

                </div><!--row-->

            </div><!--container-->

        </section><!--testimonial-->

        <section class="team">

            <h2>Team</h2>

            <div class="container team-container">

                <div class="row">

                    <?php
                    
                        $query = $pdo -> prepare(
                            "SELECT * FROM `tb_team`;"
                        );

                        $query -> execute();

                        $selectMember = $query -> fetchAll();
                    
                    ?>

                    <?php foreach($selectMember as $key => $row): ?>

                        <div class="col-md-6">

                            <div class="team-single">

                                <div class="row">

                                    <div class="col-md-3">

                                        <div class="user-picture">

                                            <div class="user-picture-child"></div>

                                        </div>

                                    </div><!--col-md-3-->

                                    <div class="col-md-9 col-md-offset-1">

                                        <h3><?php echo $row['name'] ?> <?php echo $row['surname'] ?></h3>

                                        <p><?php echo $row['description'] ?></p>

                                    </div><!--col-md-9-->

                                </div><!--row-->
                                
                            </div><!--team-single-->

                        </div><!--col-md-6-->

                    <?php endforeach ?>
                    
                </div><!--row-->

            </div><!--team-container-->

        </section><!--team-->

        <hr>

        <section class="contract-plans">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">

                        <h2>Contact Us</h2>

                        <form method="post">

                            <div class="form-group">

                                <label for="nome">name:</label>
                                <input type="text" name="name" class="form-control" id="nome">

                            </div><!--form-group-->

                            <div class="form-group">

                                <label for="email">E-mail:</label>
                                <input type="email" name="email" class="form-control" id="email">

                            </div><!--form-group-->

                            <div class="form-group">

                                <label for="message">Message:</label>
                                <textarea class="form-control" id="message"></textarea>

                            </div><!--form-group-->

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>

                    </div><!--col-md-6-->

                    <div class="col-md-6">

                        <h2>Our Plans</h2>

                        <table class="table table-bordered table-light">

                            <thead>

                                <tr>

                                    <th>Weakly Plan</th>
                                    <th>Monthly Plan</th>
                                    <th>Annual Plan</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>R$ 199,00</td>
                                    <td>R$ 750,00</td>
                                    <td>R$ 8.500,00</td>

                                </tr>

                                <tr>

                                    <td>R$ 199,00</td>
                                    <td>R$ 750,00</td>
                                    <td>R$ 8.500,00</td>

                                </tr>

                                <tr>

                                    <td>R$ 199,00</td>
                                    <td>R$ 750,00</td>
                                    <td>R$ 8.500,00</td>

                                </tr>

                                <tr>

                                    <td>R$ 199,00</td>
                                    <td>R$ 750,00</td>
                                    <td>R$ 8.500,00</td>

                                </tr>

                            </tbody>

                        </table><!--table-bordered-->

                    </div><!--col-md-6-->

                </div><!--row-->

            </div><!--container-->

        </section><!--final-site-->

    </div><!--END BOX--->

    <footer>

        <p class="text-center">All Rights Reserved&copy;</p>

    </footer><!--END FOOTER--->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>