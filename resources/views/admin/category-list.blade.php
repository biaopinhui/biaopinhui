@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">产品子类</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $category->name }}分类
                </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>子类名称</th>
                                    <th>产品数量</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subCategories as $subCategory)
                                <tr>
                                    <td>{{ $subCategory->id }}</td>
                                    <td><a href="{{ url($category->slug . '/' . $subCategory->slug) }}">{{ $subCategory->name }}</a></td>
                                    <td>{{ $subCategory->products->count() }}</td>
                                    <td class="col-md-2">
                                        <a class="col-md-3 col-md-offset-2" href="{{ url('admin/products/' . $subCategory->id) }}" title="产品管理">
                                            <i class="glyphicon glyphicon-th"></i>
                                        </a>
                                        <a class="col-md-3" href="{{ url('admin/product/create/' . $subCategory->id) }}" title="添加">
                                            <i class="glyphicon glyphicon-plus"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection