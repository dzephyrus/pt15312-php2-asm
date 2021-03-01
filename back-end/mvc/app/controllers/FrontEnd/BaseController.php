<?php

namespace App\Controllers\FrontEnd;

use Jenssegers\Blade\Blade;

class BaseController
{
    protected function render($viewFile, $viewData = [])
    {
        $blade = new Blade('./app/views', './storage');

        echo $blade->make($viewFile, $viewData)->render();
    }
    protected function render_frontend($viewFile, $viewData = [])
    {
        $blade = new Blade('./app/views', './storage');
        echo $blade->make($viewFile, $viewData)->render();
    }
}
