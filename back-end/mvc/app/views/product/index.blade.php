@extends('layouts.main');
@section('title','danh sach san pham');

@section('main-content')
<table class="table table-stripped">
    <thead>
        <th>stt</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>tên danh mục va id </th>
        <th>chi tiết</th>
    </thead>
    <tbody>
        @foreach ($products as $p)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$p->name}}</td>
            <td><img src="{{$p->image}}" alt=""></td>
            <td>{{$p->category->cate_name}} . {{$p->cate_id}}</td>
            <td>
                <a href="edit-product?id={{$p->id}}">Sửa</a>
                <a href="remove-product?id={{$p->id}}">Xóa</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection