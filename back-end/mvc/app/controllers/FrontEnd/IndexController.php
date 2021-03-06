<?php

namespace App\Controllers\FrontEnd;

use App\Models\Product;
use App\Models\Category;


class IndexController extends BaseController
{

    public function detail()
    {
        return "Chi tiết sản phẩm";
    }
    public function index()
    {
        $keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";
        if ($keyword != "") {
            $products = Product::where("name", "like", "%$keyword%")->get();
        } else {
            $products = Product::all();
        }
        $products->load('category');
        $this->render_frontend('client.index', ['products' => $products]);
    }
}


?>


<!-- namespace App\Controllers;

class ProductController
{
    public function index()
    {
        return " product home here";
    }
    public function about()
    {
        # code...
        return " about product here";
    }
} -->