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
    { {
            $request = new Request();            // $request = new Request();
            if (isset($_POST) && !empty($_POST)) {
                if (isset($_POST) && !empty($_POST)) {


                    $data = $_POST;
                    $file = $_FILES['image'];
                    $avatar = '';
                    if ($file['size'] > 0) {
                        $avatar = "product/" . uniqid() . '--' . uniqid() . '--' . $file['name']; // uniqid() hàm tạo text ngẫu nhiên
                        move_uploaded_file($file['tmp_name'], IMAGE_BE . $avatar);
                        $data['image'] = $avatar;
                    }
                    var_dump(IMAGE_BE . $avatar); //đg dẫn ảnh đang sai

                    $model = new Product();
                    $model = new Product();
                    $model->fill($_POST);
                    $model->fill($data);
                    $model->save();
                    $model->save();
                    header('location: ./tao-moi');
                    header('location: ./san-pham');
                } else {
                    header('location: ./tao-moi');
                    header('location: ./san-pham');
                }
            }
        }
    }
}
