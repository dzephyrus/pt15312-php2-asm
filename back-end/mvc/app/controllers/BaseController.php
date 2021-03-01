<?php
namespace App\Controllers;
use Jenssegers\Blade\Blade;

class BaseController{
    protected function render($viewFile, $viewData = []){
        $blade = new Blade('./app/views', './storage');

        echo $blade->make($viewFile, $viewData)->render();
    }
    protected function render_fontend($viewFile, $viewData = []){
        $blade = new Blade('./app/views/client', './storage');
        echo $blade->make($viewFile, $viewData)->render();
    }
}
