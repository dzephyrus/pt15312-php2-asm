<?php

namespace App\Controllers;


class ClientController extends BaseController
{
    public function index()
    {
        // include_once './app/views/client/index.blade.php';
        $this->render('/client/index');
    }
}
