<?php 

namespace Controllers;

use Helpers\Router;
use Models\UserFields;

class SignInController extends PageController { 
    use Router;

    private AuthController $authController;

    public function __construct(protected string $pageName = "") {
        parent::__construct($pageName);

        $this -> authController = new AuthController();
    }

    // Handles form submit and validation
    public function handleLoginForm() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (isset($_POST['remember'])) {
            setcookie('remember', true, time() + (pow(60, 2) * 24) * 7, '/');
            setcookie(UserFields::username, $username, time() + (pow(60, 2) * 24) * 7, '/');
            setcookie(UserFields::password, $password, time() + (pow(60, 2) * 24) * 7, '/');
            setcookie(UserFields::position, time() + (pow(60, 2) * 24) * 7, '/');
        }

        $this -> authController -> login($username, $password);
    }

    // Handles form submit and validation
    public function handleRegisterForm() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $description = $_POST['description'];

        $this -> authController -> register($username, $password, $description);
    }

    public function rememberMe(): void {
        if (isset($_COOKIE['remember'])) {
            $this -> authController -> rememberMe(
                $_COOKIE[UserFields::username],
                $_COOKIE[UserFields::password],
                $_COOKIE[UserFields::position],
            );
        }
    }
} 