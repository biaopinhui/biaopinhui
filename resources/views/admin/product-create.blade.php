@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">添加产品 - {{ $category->name }}</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    基本产品信息
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form role="form" method="post" action="{{ url('admin/product/store') }}">
                            {!! csrf_field() !!}
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>名称</label>
                                    <input class="form-control" name="title">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">￥</span>
                                    <input type="text" class="form-control" name="price" placeholder="价格">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">￥</span>
                                    <input type="text" class="form-control" name="original_price" placeholder="原始价格">
                                </div>
                                <div class="form-group">
                                    <label>状态</label>
                                    <select class="form-control" name="status">
                                        <option value="1">上架</option>
                                        <option value="2">下架</option>
                                        <option value="0">删除</option>
                                    </select>
                                </div>
                                <div class="form-group" name="excerpt">
                                    <label>简介</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>所属系列</label>
                                    @foreach ($filters as $filter)
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="series[]" value="{{ $filter->id }}">{{ $filter->name }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Text area</label>
                                    <textarea class="form-control" name="description" rows="3"></textarea>
                                </div>

                                <input type="hidden" name="category" value="{{ $category->id }}" />

                                <button type="submit" class="btn btn-primary">提交</button>
                                <button type="reset" class="btn btn-warning">重置</button>
                            </div>
                        </form>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
@endsection