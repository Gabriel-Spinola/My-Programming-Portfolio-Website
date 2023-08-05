<?php

use Controllers\HomeController;
use Models\CommentFields;
use Models\UserModel;

$userModel = new UserModel(new MySql);
$controller = new HomeController();

if (!isset($_SESSION['isLogged'])) {
    if (
        isset($_POST['submit-comment-game1']) ||
        isset($_POST['submit-comment-game2']) || 
        isset($_POST['submit-comment-game3']) ||
        isset($_POST['submit-comment-game4'])
    ) {
        header('Location: ' . INCLUDE_PATH . 'signin');
        die;
    }
}

?>
<script src="<?php echo INCLUDE_PATH ?>Scripts/scroll.js"></script>
<script src="<?php echo INCLUDE_PATH ?>Scripts/home.js"></script>

<script>
    ScrollToItem('a#contact', '.contract-plans')
</script>

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
                        Entre na Lista
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

                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-joystick mb-2" viewBox="0 0 16 16">
                        <path d="M10 2a2 2 0 0 1-1.5 1.937v5.087c.863.083 1.5.377 1.5.726 0 .414-.895.75-2 .75s-2-.336-2-.75c0-.35.637-.643 1.5-.726V3.937A2 2 0 1 1 10 2z" />
                        <path d="M0 9.665v1.717a1 1 0 0 0 .553.894l6.553 3.277a2 2 0 0 0 1.788 0l6.553-3.277a1 1 0 0 0 .553-.894V9.665c0-.1-.06-.19-.152-.23L9.5 6.715v.993l5.227 2.178a.125.125 0 0 1 .001.23l-5.94 2.546a2 2 0 0 1-1.576 0l-5.94-2.546a.125.125 0 0 1 .001-.23L6.5 7.708l-.013-.988L.152 9.435a.25.25 0 0 0-.152.23z" />
                    </svg>

                    <h2>C#/Unity/Monogame</h2>

                    <p>Combinando meu domínio em C# com minha experiência em Unity e MonoGame, busco transformar ideias criativas em jogos interativos e envolventes, entregando experiências únicas e memoráveis para os jogadores.</p>

                </div><!--col-md-4-->

                <div class="col-md-6">

                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-browser-chrome mb-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8ZM0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8Zm5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                    </svg>

                    <h2>PHP/JavaScript</h2>

                    <p>Ao combinar PHP e JavaScript, tenho a capacidade de criar aplicações web completas, desde a interação do usuário com a interface até a manipulação dos dados nos bastidores. Oferecendo a melhor experiência possível.</p>

                </div><!--col-md-4-->

                <div class="text-center mt-5">

                    <div class="m-auto w-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-pc-display-horizontal mb-2" viewBox="0 0 16 16">
                            <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z" />
                        </svg>

                        <h2>Dart/Flutter</h2>

                        <p>Dart e Flutter me permite desenvolver aplicativos móveis de alta qualidade, com desempenho excepcional e interface intuitiva. Dart e Flutter também oferece uma solução poderosa e versátil para a criação de aplicativos desktop.</p>
                    </div>

                </div><!--col-md-4-->

            </div><!--row-->

        </div><!--differentials-container-->

    </section><!--differentials-->

    <section class="testimonial text-center">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <h1>Minhas Aplicacoes</h1>

                    <ul class="apps-list">
                        <h3 style="color: #30B33A;">Sistemas Web</h3>
                        <li><a class="app-links" href="https://github.com/Gabriel-Spinola/Github-Clone">Clone do Github</a></li>
                        <li><a class="app-links" href="https://github.com/Gabriel-Spinola/Github-Clone/tree/master/Patelandia">Sistema Web Pastelandia</a></li>
                        <li><a class="app-links" href="https://github.com/Gabriel-Spinola/Support-System">Sistema de Suporte (Rest API)</a></li>
                        <li><a class="app-links" href="https://github.com/Gabriel-Spinola/Website-PHP">Site empresarial com dashboard</a></li>
                    </ul>

                    <ul class="mt-5 apps-list">
                        <h3 style="color: #30B33A;">Sistemas Desktop/Mobile</h3>
                        <li><a class="app-links" href="https://github.com/Gabriel-Spinola/MentalHealthApp">Aplicativo Saúde Mental (Mobile)</a></li>
                        <li><a href="https://github.com/Gabriel-Spinola/Flutter-CRM/" class="app-links">CRM em Flutter (Desktop)</a></li>
                    </ul>

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

                <div class="col-md-auto w-100">

                    <div class="team-single" id="game1">

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

                            <div class="text-center">
                                <button id="show1" class="btn btn-warning float-right m-2 w-50 text-right" onclick="showComment('display-comments1', 'show1')">Mostrar Comentarios</button>
                            </div>

                            <div class="container w-100 comments-sec" id="display-comments1" style="display: none">
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

                <div class="col-md-auto w-100 mt-5">

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

                        <hr>

                        <div class="comment-box">

                            <h6>Comentarios</h6>

                            <form method="post">
                                <input type="hidden" name="owner-name" value="<?php print $_SESSION['username'] ?? '' ?>">

                                <textarea name="comment" id="comment" class="form-control" placeholder="Escreva seu comentario..."></textarea>

                                <input type="submit" class="form-control mt-2 hell-end-bg" name="submit-comment-game1" id="submit-comment-game1" value="Enviar Comentario">
                            </form>

                            <div class="text-center">
                                <button id="show2" class="btn btn-warning float-right m-2 w-50 text-right" onclick="showComment('display-comments2', 'show2')">Mostrar Comentarios</button>
                            </div>

                            <div class="container w-100 comments-sec" id="display-comments2" style="display: none">
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

                <div class="col-md-auto w-100 mt-5">

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

                        <hr>

                        <div class="comment-box">

                            <h6>Comentarios</h6>

                            <form method="post">
                                <input type="hidden" name="owner-name" value="<?php print $_SESSION['username'] ?? '' ?>">

                                <textarea name="comment" id="comment" class="form-control" placeholder="Escreva seu comentario..."></textarea>

                                <input type="submit" class="form-control mt-2 hell-end-bg" name="submit-comment-game1" id="submit-comment-game1" value="Enviar Comentario">
                            </form>

                            <div class="text-center">
                                <button id="show3" class="btn btn-warning float-right m-2 w-50 text-right" onclick="showComment('display-comments3', 'show3')">Mostrar Comentarios</button>
                            </div>

                            <div class="container w-100 comments-sec" id="display-comments3" style="display: none">
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

                <div class="col-md-auto w-100 mt-5">

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

                        <hr>

                        <div class="comment-box">

                            <h6>Comentarios</h6>

                            <form method="post">
                                <input type="hidden" name="owner-name" value="<?php print $_SESSION['username'] ?? '' ?>">

                                <textarea name="comment" id="comment" class="form-control" placeholder="Escreva seu comentario..."></textarea>

                                <input type="submit" class="form-control mt-2 hell-end-bg" name="submit-comment-game1" id="submit-comment-game1" value="Enviar Comentario">
                            </form>

                            <div class="text-center">
                                <button id="show4" class="btn btn-warning float-right m-2 w-50 text-right" onclick="showComment('display-comments4', 'show4')">Mostrar Comentarios</button>
                            </div>

                            <div class="container w-100 comments-sec" id="display-comments4" style="display: none">
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

            </div><!--row-->

        </div><!--team-container-->

    </section><!--team-->

    <hr>

    <section class="contract-plans">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <h2>Me Contate</h2>

                    <form method="post">

                        <div class="form-group">

                            <label for="nome">Nome:</label>
                            <input type="text" name="name" class="form-control" id="nome">

                        </div><!--form-group-->

                        <div class="form-group">

                            <label for="email">E-mail:</label>
                            <input type="email" name="email" class="form-control" id="email">

                        </div><!--form-group-->

                        <div class="form-group">

                            <label for="message">Mensagem:</label>
                            <textarea class="form-control" id="message"></textarea>

                        </div><!--form-group-->

                        <button type="submit" class="btn btn-primary">Enviar</button>

                    </form>

                </div><!--col-md-6-->

                <!-- <div class="col-md-6">

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

                <!-- </div>col-md-6 -->

            </div><!--row-->

        </div><!--container-->

    </section><!--final-site-->

</main><!--END BOX--->