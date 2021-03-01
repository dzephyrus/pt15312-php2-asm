<?php

namespace App\Controllers;

use App\Models\Category;

class ClientController extends BaseController
{
    public function index()
    {
        // include_once './app/views/client/index.blade.php';
        $this->render('./app/views/client/index.blade.php');
    }
}
