@extends('layouts.main');
@section('title','tạo mới sản phẩm');

@section('main-content')
<form action="{{BASE_URL}}save_product" method="post">
    <div>
        <label for="">Tên sản phẩm</label>
        <input type="text" name="name">
    </div>
    <div class="">
        <label for="">Ảnh sản phẩm</label>
        <input type="file" name="image">
    </div>
    <div>
        <label for="">danh mục</label>
        <select name="cate_id" id="">
            @foreach ($cate as $key)
            <option value="{{$key -> id}}">
                {{$key -> cate_name}}
            </option>
            @endforeach
        </select>
    </div>
    <!-- <div>
        <label for="">Hiển thị ở menu?</label>
        <input type="checkbox" name="show_menu" value="1">
    </div> -->
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>

@endsection