<?php 

namespace Controllers;

use Helpers\Response;
use Helpers\Router;
use Models\CommentModel;
use Models\Fields;
use Models\UserModel;
use MySql;
use Position;

class HomeController extends PageController { 
    use Router;

    private CommentModel $commentModel;
    private UserModel $userModel;

    public function __construct(protected string $pageName = "") {
        parent::__construct($pageName);

        $this -> commentModel = new CommentModel(new MySql);
        $this -> userModel = new UserModel(new MySql);
    }

    public function handleCommentSubmission() {
        if ($_SESSION['isLogged']) {
            $ownerName = $_POST['owner-name'];
            $comment = $_POST['comment'];

            $user = $this -> userModel -> findByName($ownerName, $_SESSION['password']) -> fetchAll();
            
            if ($this -> commentModel -> insertData([$user[Fields::ID], $comment])) {
                Response::simpleResponse('success', 'Eba');
            }
            else {
                Response::simpleResponse('error', 'Erro');
            }
        }
        else {
            header('Location: ' . INCLUDE_PATH . 'signin');
            die;
        }
    }
}