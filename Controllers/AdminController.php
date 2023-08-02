<?php 

namespace Controllers;

use Helpers\Response;
use Helpers\Router;
use Models\UserFields;
use Models\UserModel;
use MySql;
use Position;

class AdminController extends PageController { 
    use Router;

    private UserModel $userModel;

    public function __construct(protected string $pageName = "") {
        parent::__construct($pageName);

        $this -> userModel = new UserModel(new MySql);
    }

    public function handleAddMemberForm() { 
        $name = $_POST['member-name'];
        $password = $_POST['member-password'];
        $description = $_POST['member-description'];
        $position = $_POST['member-position'];
        
        if ($this -> userModel -> insertData([$name, $password, $description, $position])) {
            Response::simpleResponse('success', 'You <strong>successfully</strong> add a member to the team.');
        }
        else {
            Response::simpleResponse('success', "Something went wrong, and we can't edit the extra section ):");
        }
    }

    public function handleMembersList(string $action, string | int $id) {
        switch ($action) {
            case 'delete':
                $this->userModel->deleteData($id);
            break;
            
            case 'edit':
                echo 'edit';
            break;

            default:
                echo 'Invalid Member List action';
        }
    }

    public function displayUsers() {
        return $this -> userModel -> getData();
    }
}