<?php 

namespace Controllers;

use Helpers\Response;
use Helpers\Router;
use Models\UserModel;
use MySql;

class AdminController extends PageController { 
    use Router;

    private UserModel $userModel;

    public function __construct(protected string $pageName = "") {
        parent::__construct($pageName);

        $this -> userModel = new UserModel(new MySql);
    }
    
    public function SayHello() {
        echo "<h1>Hello</h1>";
    }

    public function handleAddMemberForm() { 
        $name = $_POST['member-name'];
        $password = $_POST['member-password'];
        $description = $_POST['member-description'];
        $position = $_POST['member-position'];
        
        if ($this -> userModel -> insertData([$name, $password, $description, $position])) {
            Response::simpleResponse('success', 'Member Added');
        }
        else {
            Response::simpleResponse('success', 'Failed');
        }
    }
}