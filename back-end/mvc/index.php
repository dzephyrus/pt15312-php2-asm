<?php
session_start();
$url = isset($_GET['url']) == true
    ? $_GET['url'] : "/";

require_once './commons/utils.php';
require_once './vendor/autoload.php';
require_once './config/database.php';
require_once './commons/routes.php';

// composer require illuminate/database
// composer require illuminate/events

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;
use App\Controllers\UserController;
use App\Controllers\ClientController;

switch ($url) {
    case "/":
        $ctr = new HomeController();
        $ctr->index();
        break;
    case "new-cate":
        $ctr = new CategoryController();
        $ctr->addNew();
        break;
    case "save-cate":
        $ctr = new CategoryController();
        $ctr->saveCate();
        break;
    case "edit-cate":
        $ctr = new CategoryController();
        $ctr->editCate();
        break;
    case "save-edit-cate":
        $ctr = new CategoryController();
        $ctr->saveEdit();
        break;
    case "san-pham": 
        $ctr = new ProductController();
        $ctr->index();
        break;
    case "new-product":
        $ctr = new ProductController();
        $ctr->add_new();
        break;
    case "edit-product":
        $ctr = new ProductController();
        $ctr->edit_product();
        break;
    case "save_product":
        $ctr = new ProductController();
        $ctr->save_product();
        break;
    case "login":
        $ctr = new UserController();
        $ctr->index();
        break;
    case "remove-cate":
        $ctr = new CategoryController();
        $ctr->removeCate();
        break;
    case "client":
        $ctr = new ClientController();
        $ctr->index();
        break;
    default:
        echo "Not found!";
        break;
}

?>


<!-- require_once './commons/uitls.php';
require_once './vendor/autoload.php';
require_once './config/database.php';

use App\Controllers\ProductController;
use App\Controllers\HomeController;
use App\Controllers\CategoryController;

switch ($url) {
    case "/":
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    case "about":
        $ctr = new HomeController();
        echo $ctr->about();
        break;
    case "chi-tiet":
        $ctr = new ProductController();
        echo $ctr->detail();
        break;
    case "new-cate":
        $ctr = new CategoryController();
        echo $ctr->addNew();
        break;
    case "save-cate":
        $ctr = new CategoryController();
        echo $ctr->saveCate();
        break;
    default:
        echo "not found =))))";
        break;
} -->