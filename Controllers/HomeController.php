<?php 

namespace Controllers;

use Helpers\Response;
use Helpers\Router;
use Models\CommentModel;
use Models\Fields;
use Models\UserFields;
use Models\UserModel;
use MySql;
use Position;
use Views\MainView;

class HomeController extends PageController { 
    use Router;

    private CommentModel $commentModel;
    private UserModel $userModel;

    public function __construct(protected string $pageName = "") {
        parent::__construct($pageName);

        $this -> commentModel = new CommentModel(new MySql);
        $this -> userModel = new UserModel(new MySql);
    }

    public function handleCommentSubmission(int $gameID) {
        $id = intval($gameID);
        
        if ($_SESSION['isLogged']) {
            $ownerName = $_POST['owner-name'];
            $comment = $_POST['comment'];
            
            $user = $this -> userModel -> findByName($ownerName, $_SESSION['password']);
            echo "<h2>". $user->rowCount() ."</h2>";

            if ($user->rowCount() == 1) {
                $info = $user -> fetch();
                

                if ($this -> commentModel -> insertData([$info[Fields::ID], $id, $comment])) {
                    Response::simpleResponse('success', 'Eba');
                }
                else {
                    Response::simpleResponse('error', 'Erro');
                }
            }
        }
        else {
            header('Location: ' . INCLUDE_PATH . 'signin');
            die;
        }
    }

    public function displayComments(string $gameId): array {
        return $this -> commentModel -> getByGameID($gameId);
    }
}