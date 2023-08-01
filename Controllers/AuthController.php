<?php 

namespace Controllers;

use Closure;
use Exception;
use Helpers\Response;
use Helpers\Router;
use Helpers\ImageUploader;
use Models\Fields;
use Models\Model;
use Models\UserFields;
use Models\UserModel;
use MySql;
use Position;

class AuthController {
    private UserModel $model;
 
    public function __construct() {
        $this -> model = new UserModel(new MySql);
    }


    public static function initSession(string $username, string $password, string $position): void {
        $_SESSION['isLogged'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION[Position::class] = $position;
    }

    public static function isLogged(): bool {
        return isset($_SESSION['isLogged']);
    }

    public static function logout(): void {
        session_destroy();
        setcookie('remember', 'true', time() - 1, '/');
        
        header('Location:' . INCLUDE_PATH);
        die;
    }

    public function login(string $username, string $password, Closure $onSuccess): void {
        echo $username;
        echo $password;

        $user = $this -> model -> findByName($username, $password);

        if ($user->rowCount() == 1) {
            $info = $user -> fetch();

            self::initSession($username, $password, $info[UserFields::position]);
            $onSuccess();

            header('Location: ' . INCLUDE_PATH);
            die; 
        }

        Response::simpleResponse('error', 'Nome de usuário ou senha incorretos');
    }
    
    public function register(string $username, string $password, string $description): void {
        try {
            // $profilePic = ImageUploader::receiveUserImageFromPost('profile_pic');
        } catch (Exception $e) {
            // TODO if exception caught user Helpers\Response to display error to client
            // or give the option to use the default profile pic
            echo $e->getMessage();
            $profilePic = '';
        }

        $this -> model -> insertData([
            $username, $password, $description, Position::User->value, $profilePic
        ]);
    }

    public function rememberMe(string $username, string $password, int $position): void {
        $user = $this -> model -> findByName($username, $password);

        if ($user->rowCount() == 1) {
            self::initSession($username, $password, $position);
        }
    }
}