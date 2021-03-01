<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Request;

class ProductController extends BaseController
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
        $this->render('product.index', ['products' => $products]);
    }
    public function add_new()
    {
        $cate = Category::all();
        // var_dump($cate);
        // die;
        $this->render("product.add", ['cate' => $cate]);
    }
    public function save_product()
    {
        $request = new Request();
        if (isset($_POST) && !empty($_POST)) {
            $model = new Product();
            $model->fill($_POST);
            $model->save();

            header('location: ./tao-moi');
        } else {
            header('location: ./tao-moi');
        }
    }
    public function edit_product()
    {
        $id = $_GET['id'];
        $model = Category::find($id);
        if ($model) {
            // include_once './app/views/cates/edit.blade.php';
            $this->render('product.edit', ["model" => $model]);
        } else {
            header('location: ./');
        }
    }
}
