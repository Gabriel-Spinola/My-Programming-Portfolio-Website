<?php 

namespace Controllers;

use Helpers\Router;

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

        $this -> authController -> login($username, $password);
    }

    // Handles form submit and validation
    public function handleRegisterForm() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $description = $_POST['description'];

        $this -> authController -> register($username, $password, $description);
    }
} 