<?php

use Controllers\HomeController;
use Models\CommentFields;
use Models\UserModel;

$userModel = new UserModel(new MySql);
$controller = new HomeController();

?>
<!-- https://thenounproject.com/icon/pixel-star-135344/
https://thenounproject.com/icon/pixel-star-135350/
https://thenounproject.com/icon/pixel-images-4603108/ -->
<main class="box">
    <?php
    $commentSection = function (string $id) use ($controller) {
    ?>
        <?php foreach ($controller->displayComments($id) as $key => $row) : ?>

            <div class="container w-100">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success-emphasis"></strong>
                        <h3 class="mb-0">Username</h3>

                        <hr>

                        <div class="mb-1 text-body-secondary">Nov 11</div>

                        <p class="mb-auto"><?php print $row[CommentFields::comment] ?></p>

                        <div class="row">
                            <a href="#" class="col-1 link-warning icon-link icon-link-hover stretched-link mt-2">edit</a>
                            <a href="#" class="col-4 link-danger icon-link icon-link-hover stretched-link mt-2">delete</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach ?>
    <?php
    } ?>

    <section class="banner">

        <div class="overlay"></div>

        <div class="container main-banner">

            <div class="row">

                <div class="col-md-12 text-center">

                    <img src="<?php echo INCLUDE_PATH ?>Assets/Icon.png" alt="">

                    <h2>&lt;Gabriel-Spinola&gt;</h2>

                    <p>Ola! Sou um Desenvolvedor de jogos e sistemas web e desktop</p>

                    <a href="">Saiba Mais!</a>

                </div><!--col-md-12--->

            </div><!--row-->

        </div><!--container--->

    </section><!--banner--->

    <section class="main-register">

        <div class="container">

            <div class="row text-center">

                <div class="col-md-6">

                    <h2 id="go-down">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                        </svg>
                        Join our list
                    </h2>

                </div>

                <div class="col-md-6">

                    <form method="post">

                        <input type="text" name="name" id="send-name-border"><input type="submit" name="action" value="Enviar" id="send-name">

                    </form>

                </div><!--col-md-6-->

            </div><!--row-->

        </div><!--container-->

    </section><!--main-register-->

    <section class="differentials text-center">

        <h1 id="abilities-title">Habilidades</h1>

        <div class="container differentials-container">

            <div class="row">

                <div class="col-md-6">

                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>

                    <h2>C#/Unity/Monogame</h2>

                    <p>Proin sed nibh enim. In quis magna sed enim placerat dictum. Fusce hendrerit fermentum velit. Vestibulum imperdiet metus et eleifend tincidunt. Etiam nisi lacus, laoreet a lacus sed, lobortis blandit est.</p>

                </div><!--col-md-4-->

                <div class="col-md-6">

                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-trophy-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z" />
                    </svg>

                    <h2>PHP/JavaScript</h2>

                    <p>Proin sed nibh enim. In quis magna sed enim placerat dictum. Fusce hendrerit fermentum velit. Vestibulum imperdiet metus et eleifend tincidunt. Etiam nisi lacus, laoreet a lacus sed, lobortis blandit est. Nunc purus dui, aliquet vitae auctor vel</p>

                </div><!--col-md-4-->

                <div class="text-center mt-5">

                    <div class="m-auto w-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-tree-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0z" />
                            <path d="M7 13.5h2V16H7v-2.5z" />
                        </svg>

                        <h2>Dart/Flutter</h2>

                        <p>Proin sed nibh enim. In quis magna sed enim placerat dictum. Fusce hendrerit fermentum velit. Vestibulum imperdiet metus et eleifend tincidunt. Etiam nisi lacus, laoreet a lacus sed, lobortis blandit est. Nunc purus dui.</p>
                    </div>

                </div><!--col-md-4-->

            </div><!--row-->

        </div><!--differentials-container-->

    </section><!--differentials-->

    <section class="testimonial text-center">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <h2>Minhas Aplicacoes</h2>

                    <ul class="apps-list">
                        <h4 style="color: #30B33A;">Sistemas Web</h4>
                        <li><a class="app-links" href="https://github.com/Gabriel-Spinola/Github-Clone">Clone do Github</a></li>
                        <li><a class="app-links" href="https://github.com/Gabriel-Spinola/Github-Clone/tree/master/Patelandia">Sistema Web Pastelandia</a></li>
                        <li><a class="app-links" href="https://github.com/Gabriel-Spinola/Support-System">Sistema de Suporte (Rest API)</a></li>
                        <li><a class="app-links" href="https://github.com/Gabriel-Spinola/Website-PHP">Site empresarial com dashboard</a></li>
                    </ul>
                    
                    <ul class="mt-5 apps-list">
                        <h4 style="color: #30B33A;">Sistemas Desktop/Mobile</h4>
                        <li><a class="app-links" href="https://github.com/Gabriel-Spinola/MentalHealthApp">Aplicativo Saúde Mental (Mobile)</a></li>
                        <li><a href="https://github.com/Gabriel-Spinola/Flutter-CRM/" class="app-links">CRM em Flutter (Desktop)</a></li>
                    </ul>

                    <!-- <blockquote>

                        <p>"Phasellus et vehicula velit. Suspendisse ut faucibus lectus. Curabitur fermentum lacus odio, eget egestas turpis finibus in. Aliquam eget urna condimentum, lobortis nisl quis, congue libero. Maecenas non velit consectetur, ultrices justo sed, gravida purus. Phasellus efficitur tempus dolor, sit amet vehicula ligula condimentum quis. Ut euismod, urna ac ultricies lacinia, lectus justo vulputate sem, vitae faucibus eros mi quis nisl"</p> #1

                    </blockquote> -->

                </div><!--col-md-12-->

            </div><!--row-->

        </div><!--container-->

    </section><!--testimonial-->

    <section class="team">

        <h2>Meus Jogos</h2>

        <div class="container team-container">

            <?php
            if (isset($_POST['submit-comment-game1'])) {
                $controller->handleCommentSubmission('1');
            }

            if (isset($_POST['submit-comment-game2'])) {
                $controller->handleCommentSubmission('2');
            }

            if (isset($_POST['submit-comment-game3'])) {
                $controller->handleCommentSubmission('3');
            }

            if (isset($_POST['submit-comment-game4'])) {
                $controller->handleCommentSubmission('4');
            }
            ?>


            <div class="row">

                <div class="col-md-6">

                    <div class="team-single">

                        <div class="row">

                            <div class="col-md-3">

                                <div class="user-picture" id="hell-end-picture">

                                    <div class="user-picture-child">
                                        <img src="<?php echo INCLUDE_PATH ?>Assets/HellEnd.png" alt="Game Icon" width="100%" height="100%">
                                    </div>

                                </div>

                            </div><!--col-md-3-->

                            <div class="col-md-9 col-md-offset-1">

                                <h3 class="hell-end">Hell End</h3>

                                <p>(PT-BR)

                                    Esse jogo foi desenvolvido para a <strong>Jam #1/2</strong> com tema <strong>"o jogo mais fácil do mundo"</strong>
                                    <br><br>
                                    Hell end é um jogo de plataforma 2D shooter, com jogabilidade precisa e muito caos
                                    <br><br>
                                    <em>Ver Jogo:</em> <a href="https://gabriel-spinola.itch.io/vacajam" class="hell-end">Gabriel-Spinola Itch.io</a>
                                    <br>
                                    <em>Codigo do jogo:</em> <a href="https://github.com/Gabriel-Spinola/Vaca-Jam" class="hell-end">Codigo Fonte</a>
                                </p>

                            </div><!--col-md-9-->

                        </div><!--row-->

                        <hr>

                        <div class="comment-box">

                            <h6>Comentarios</h6>

                            <form method="post">
                                <input type="hidden" name="owner-name" value="<?php print $_SESSION['username'] ?? '' ?>">

                                <textarea name="comment" id="comment" class="form-control" placeholder="Escreva seu comentario..."></textarea>

                                <input type="submit" class="form-control mt-2 hell-end-bg" name="submit-comment-game1" id="submit-comment-game1" value="Enviar Comentario">
                            </form>

                            <div class="container w-100">
                                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                    <div class="col p-4 d-flex flex-column position-static">
                                        <div>
                                            <img src="<?php echo INCLUDE_PATH ?>Assets/didi.png" alt="user-pic" width="50" height="50">
                                            <h3 class="mb-0">didigameboy</h3>
                                            <small class="mb-1 text-body-secondary">date</small>
                                        </div>

                                        <hr>

                                        <p class="mb-auto">Legal demais, com certeza muita coisa pra 3dias. A arte tá bem legal, gostei demais da paleta e da musica. Foge um pouco do tema, mas o importante é a diversão. Senti falta de alguma anim ou partículas qd os inimigos morrem/explodem, o screenshake está na medida, tbm senti falta de objetivos no level(quanto que temos q destruir para aparecer a saída?) E senti falta de algum portal ou algo que anuncie a aparição de um novo inimigo. Tbm faltou alguma coisa para mostrar/introduzir a nova arma cada level. Boa sacada a mecânica de recuo com o shotgun ;)</p>

                                        <div class="row">
                                            <a href="#" class="col-1 link-warning icon-link icon-link-hover stretched-link mt-2">edit</a>
                                            <a href="#" class="col-4 link-danger icon-link icon-link-hover stretched-link mt-2 m-2" id="space-left">delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div><!--team-single-->

                </div><!--col-md-6-->

                <div class="col-md-6">

                    <div class="team-single">

                        <div class="row">

                            <div class="col-md-3">

                                <div class="user-picture">

                                    <div class="user-picture-child">
                                        <img src="<?php echo INCLUDE_PATH ?>Assets/Re-Bot!.png" alt="Game Icon" width="100%" height="100%">
                                    </div>

                                </div>

                            </div><!--col-md-3-->

                            <div class="col-md-9 col-md-offset-1">

                                <h3 class="re-bot">Re-bot</h3>

                                <p>(PT-BR)
                                    Esse jogo foi desenvolvido para a <strong>Game Jaaj 6</strong> que tinha o tema Ciclos.
                                    <br><br>
                                    Re-Bot é um jogo de plataforma 2D, com jogabilidade simples e intuitiva, ele vem com uma história enigmática e personagens muito fofos... Ou talvez nem tanto...
                                    <br><br>
                                    <em>Ver Jogo:</em> <a href="https://gabriel-spinola.itch.io/re-bot" class="re-bot">Gabriel-Spinola Itch.io</a>
                                    <br>
                                    <em>Codigo do jogo:</em> <a href="https://github.com/Gabriel-Spinola/Ciclos-GameJaaj6" class="re-bot">Codigo Fonte</a>
                                </p>

                            </div><!--col-md-9-->

                        </div><!--row-->

                        <form method="post">
                            <input type="hidden" name="owner-name" value="<?php print $_SESSION['username'] ?? '' ?>">

                            <textarea name="comment" id="comment"></textarea>

                            <input type="submit" name="submit-comment-game2" id="submit-comment-game2" value="Enviar Comentário">
                        </form>

                    </div><!--team-single-->

                </div><!--col-md-6-->

                <div class="col-md-6 mt-4">

                    <div class="team-single">

                        <div class="row">

                            <div class="col-md-3">

                                <div class="user-picture">

                                    <div class="user-picture-child">
                                        <img src="<?php echo INCLUDE_PATH ?>Assets/Jumbbubble.png" alt="Game Icon" width="100%" height="100%">
                                    </div>

                                </div>

                            </div><!--col-md-3-->

                            <div class="col-md-9 col-md-offset-1">

                                <h3 class="jumbbubble">Jumbbubble</h3>

                                <p>(PT-BR)

                                    Jumbbubble is a 2D platformer game where you're a cool ninja, that can turn into a shuriken, to kill evil bubbles and avoid obstacles.
                                    <br><br>
                                    This game was made in 72 hours for Mini-Jam 84, the theme was "bubbles" and the limitation was "you are your own ammo."
                                    <br><br>
                                    <em>Ver Jogo:</em> <a href="https://gabriel-spinola.itch.io/jumbbubble" class="jumbbubble">Gabriel-Spinola Itch.io</a>
                                    <br>
                                    <em>Codigo do jogo:</em> <a href="https://github.com/Gabriel-Spinola/Bubbles-MiniJam" class="jumbbubble">Codigo Fonte</a>
                                </p>

                            </div><!--col-md-9-->

                        </div><!--row-->

                        <form method="post">
                            <input type="hidden" name="owner-name" value="<?php print $_SESSION['username'] ?? '' ?>">

                            <textarea name="comment" id="comment"></textarea>

                            <input type="submit" name="submit-comment-game3" id="submit-comment-game3" value="Enviar Comentário">
                        </form>

                    </div><!--team-single-->

                </div><!--col-md-6-->

                <div class="col-md-6 mt-4">

                    <div class="team-single">

                        <div class="row">

                            <div class="col-md-3">

                                <div class="user-picture">

                                    <div class="user-picture-child">
                                        <img src="<?php echo INCLUDE_PATH ?>Assets/SpacelHell.png" alt="Game Icon" width="100%" height="100%">
                                    </div>

                                </div>

                            </div><!--col-md-3-->

                            <div class="col-md-9 col-md-offset-1">

                                <h3 class="rainbow-seven">Prototipo de Jogo 3D Multiplayer</h3>

                                <p>(PT-BR)

                                    Um jogo multijogador inspirado no triple A Rainbow six e a franquia Counter Strike.</strong>
                                    <br><br>
                                    <em>Ver Jogo:</em> <a href="https://gabriel-spinola.itch.io/jumbbubble" class="rainbow-seven">Gabriel-Spinola Itch.io</a>
                                    <br>
                                    <em>Codigo do jogo:</em> <a href=" https://github.com/Gabriel-Spinola/Rainbow-Seven" class="rainbow-seven">Codigo Fonte</a>
                                </p>

                            </div><!--col-md-9-->

                        </div><!--row-->

                        <form method="post">
                            <input type="hidden" name="owner-name" value="<?php print $_SESSION['username'] ?? '' ?>">

                            <textarea name="comment" id="comment"></textarea>

                            <input type="submit" name="submit-comment-game4" id="submit-comment-game4" value="Enviar Comentário">
                        </form>

                    </div><!--team-single-->

                </div><!--col-md-6-->

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

</main><!--END BOX--->