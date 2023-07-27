<?php
/**
 * @author Gabriel Spinola <gabrielspinola77@gmail.com>
 * 
 * # Plano B
 * ## STACK Front
 * - Html
 * - JS
 * - CSS
 * 
 * ## Stack Back
 * - PHP 
 * - MySql
 * 
 * # Arquitetura
 * - MVC
*/

session_start();

// ---------------------------------------------------------
// Constants
const INCLUDE_PATH = 'http://localhost:8080/Grffiti/';

const DATABASE_HOST = 'localhost:3307';
const DATABASE_NAME = 'db_portfolio_project';
const DATABASE_USER = 'root';
const DATABASE_PASSWORD = '';

enum Positions: string {
    case User = 'USER';
    case Admin = 'ADMIN';
};

// ---------------------------------------------------------
// Imports
require "Database/MySql.php";

use Controllers\HomeController;
use Controllers\LoginController;
use Controllers\PostController;

// ---------------------------------------------------------
// Autoload
$autoload = function (string $className): void {
    require $className . '.php';
};

spl_autoload_register($autoload);

// ---------------------------------------------------------
// Controllers
$homeController = new HomeController(pageName: 'home');

// ---------------------------------------------------------
// Router
$homeController -> addRoute('/', $homeController);
$postController -> addRoute('/post', $postController);
$loginController -> addRoute('/login', $loginController);