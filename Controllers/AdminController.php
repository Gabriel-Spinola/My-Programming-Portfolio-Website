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

    public function handleAddMemberForm(): void { 
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

    public function handleEditMemberForm() {
        $name = $_POST['member-name'];
        $password = $_POST['member-password'];
        $description = $_POST['member-description'];
        $position = $_POST['member-position'];

        if ($this -> userModel -> updateData([$name, $password, $description, $position, null])) {
            Response::simpleResponse('success', 'You <strong>successfully</strong> add a member to the team.');
        }
        else {
            Response::simpleResponse('success', "Something went wrong, and we can't edit the extra section ):");
        }
    }

    public function handleMembersListDeletion(int $userID): void {
        $this->userModel->deleteData($userID);
    }

    public function getUserData() {
        return $this -> userModel -> getData();
    }
}