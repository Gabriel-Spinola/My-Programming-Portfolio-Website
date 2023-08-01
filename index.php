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
const INCLUDE_PATH = 'http://localhost:8080/Website-With-Bootstrap/';

const DATABASE_HOST = 'localhost:3307';
const DATABASE_NAME = 'db_portfolio_project';
const DATABASE_USER = 'root';
const DATABASE_PASSWORD = '';

enum Position: string {
    case User = 'USER';
    case Admin = 'ADMIN';
};

// ---------------------------------------------------------
// Imports
include_once 'Icons.php';
require "Database/database.php";

use Controllers\HomeController;
use Controllers\SignInController;
use Controllers\AdminController;

// ---------------------------------------------------------
// Autoload
$autoload = function (string $className): void {
    require $className . '.php';
};

spl_autoload_register($autoload);

// ---------------------------------------------------------
// Controllers
$homeController = new HomeController(pageName: 'home');
$signInController = new SignInController(pageName: 'signin');
$adminController = new AdminController(pageName: 'admin');

// ---------------------------------------------------------
// Router
if (isset($_SESSION[Position::class]) && $_SESSION[Position::class] == Position::Admin->value) {
    $adminController -> addRoute('/adm', $adminController);
}

$homeController -> addRoute('/', $homeController);
$signInController -> addRoute('/signin', $signInController);