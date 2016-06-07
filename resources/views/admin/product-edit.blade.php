@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">编辑产品</h1>
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
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label>名称</label>
                                    <input class="form-control" name="title" value="{{ $product->title }}">
                                    @if ($errors->has('title'))
                                        <span class="help-block has-error">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                    <div class="input-group">
                                        <span class="input-group-addon">￥</span>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="price"
                                            placeholder="价格"
                                            value="{{ $product->price }}">
                                    </div>
                                    @if ($errors->has('price'))
                                    <span class="help-block has-error">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('original_price') ? ' has-error' : '' }}">
                                    <div class="input-group">
                                        <span class="input-group-addon">￥</span>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="original_price"
                                            placeholder="原始价格"
                                            value="{{ $product->original_price }}"
                                        >
                                    </div>
                                    @if ($errors->has('original_price'))
                                    <span class="help-block has-error">
                                        <strong>{{ $errors->first('original_price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>状态</label>
                                    <select class="form-control" name="status" value="{{ $product->status }}">
                                        <option value="1"{{ $product->status === "1" ? ' selected' : '' }}>{{ trans('labels.status-1') }}</option>
                                        <option value="0"{{ $product->status === "0" ? ' selected' : '' }}>{{ trans('labels.status-0') }}</option>
                                    </select>
                                </div>
                                <div class="form-group{{ $errors->has('excerpt') ? ' has-error' : '' }}">
                                    <label>简介</label>
                                    <textarea
                                        class="form-control"
                                        rows="3"
                                        name="excerpt"
                                        value="{{ $product->excerpt }}"
                                    ></textarea>
                                    @if ($errors->has('excerpt'))
                                    <span class="help-block has-error">
                                        <strong>{{ $errors->first('excerpt') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>所属系列</label>
                                    @foreach ($filters as $filter)
                                    <div class="checkbox">
                                        <label>
                                            <input
                                                type="checkbox"
                                                name="seriesIds[]"
                                                value="{{ $filter->id }}"
                                            >
                                            {{ $filter->name }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Text area</label>
                                    <textarea
                                        class="form-control"
                                        name="description"
                                        rows="3"
                                        value="{{ $product->description }}"
                                    ></textarea>
                                </div>

                                <input type="hidden" name="categoryId" value="{{ $category->id }}" />

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