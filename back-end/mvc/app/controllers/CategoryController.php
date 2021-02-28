<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends BaseController
{


    public function editCate()
    {
        $id = $_GET['id'];
        $model = Category::find($id);
        if ($model) {
            // include_once './app/views/cates/edit.blade.php';
            $this->render('cates.edit', ["model" => $model]);
        } else {
            header('location: ./');
        }
    }

    public function addNew()
    {

        // include_once './app/views/cates/add-new.php';
        $this->render('cates.add-new');
    }

    public function saveCate()
    {
        $model = new Category();
        $model->fill($_POST);

        $model->save();
        header('location: ./');
    }

    public function saveEdit()
    {
        $id = $_GET['id'];
        $model = Category::find($id);
        if (!$model) {
            header('location: ./');
            die;
        }

        $model->fill($_POST);
        $model->save();
        header('location: ./');
    }

    public function removeCate()
    {
        $id = $_GET['id'];
        $model = Category::find($id);
        if (!$model) {
            header('location: ./');
            die;
        }
        Product::where('cate_id', $id)->delete();
        $model->delete();
        header('location: ./');
    }
}
