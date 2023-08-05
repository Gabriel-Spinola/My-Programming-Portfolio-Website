<?php
    use Controllers\AuthController;
    use Controllers\SignInController;

    $signInController = new SignInController();  

    if (isset($_GET['logout'])) {
        AuthController::logout();

        header('Location: ' . INCLUDE_PATH);
        die;
    }
    
    if (AuthController::isLogged()) {
        header('Location: ' . INCLUDE_PATH);

        die;
    }
    
    if (isset($_COOKIE['remember'])) {
        $signInController -> rememberMe();
    }
?>

<main class="text-center">
    <?php if (!isset($_GET['register'])): ?>
        <?php  
            if (isset($_POST['login'])) {
                $signInController -> handleLoginForm();
            }
        ?>

        <form action="" method="post" class="form-signin w-50 m-auto">
            <img class="mb-4" src="#" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Faca Login!</h1>

            <div class="form-floating m-2">
                <input type="text" class="form-control" id="username" placeholder="nome de usuário" name="username">
                <label for="floatingInput">Nome de Usuario</label>
            </div>
            
            <div class="form-floating m-2">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <label for="floatingPassword">Senha</label>
            </div>
            
            <div class="form-check text-start my-3">
                <label class="form-check-label" for="flexCheckDefault">
                    Lembre de mim
                </label>
                <input class="form-check-input" type="checkbox" value="remember" id="flexCheckDefault">
            </div>
            
            <button class="btn btn-primary w-50 py-2 mb-4" name="login" type="submit">Entrar</button>
            <br>
            
            <a class="link" href="<?php echo INCLUDE_PATH ?>signin?register"> cadastro</a>
        </form>

    <?php else: ?>
        <?php
            if (isset($_POST['register'])) {
                $signInController -> handleRegisterForm();
            }
        ?>

        <form method="post" class="form-signin w-50 m-auto" enctype="multipart/form-data">
            <img class="mb-4" src="#" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Cadastre-se</h1>

            <div class="form-group m-2">
                <input type="text" class="form-control" id="username" name="username" placeholder="Nome de usuário...">
            </div>
            
            <div class="form-group m-2">
                <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
            </div>

            <div class="form-group m-2 text-start">
                <label for="profile_pic">Foto de Perfil</label>
                <input type="file" class="form-control-file" id="profile_pic" name="profile_pic">
            </div>

            <div class="form-group m-2">
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descricao..."></textarea>
            </div>

            <button class="btn btn-primary w-50 py-2 mb-4 mt-4" type="submit" name="register">Enviar</button>

            <br>

            <a class="link" href="<?php echo INCLUDE_PATH ?>signin">login</a>
        </form>

    <?php endif ?>
</main>