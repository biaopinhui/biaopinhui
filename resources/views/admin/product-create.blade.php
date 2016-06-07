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
                        <form role="form" method="post" action="{{ url('admin/product/store/' . $category->id) }}">
                            {!! csrf_field() !!}
                            <div class="col-lg-6">
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label>名称</label>
                                    <input class="form-control" name="title" value="{{ old('title') }}">
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
                                            value="{{ old('price') }}">
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
                                            value="{{ old('original_price') }}"
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
                                    <select class="form-control" name="status" value="{{ old('status') }}">
                                        <option value="1"{{ old('status') === "1" ? ' selected' : '' }}>{{ trans('labels.status-1') }}</option>
                                        <option value="0"{{ old('status') === "0" ? ' selected' : '' }}>{{ trans('labels.status-0') }}</option>
                                    </select>
                                </div>
                                <div class="form-group{{ $errors->has('excerpt') ? ' has-error' : '' }}">
                                    <label>简介</label>
                                    <textarea
                                        class="form-control"
                                        rows="3"
                                        name="excerpt"
                                    >{{ old('excerpt') }}</textarea>
                                    @if ($errors->has('excerpt'))
                                    <span class="help-block has-error">
                                        <strong>{{ $errors->first('excerpt') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>所属分类</label>
                                    @foreach ($categories as $categoryId => $categoryName)
                                    <div class="checkbox">
                                        <label>
                                            <input
                                                type="checkbox"
                                                name="categoryIds[]"
                                                value="{{ $categoryId }}"
                                                @if (old('categoryIds') && in_array($categoryId, old('categoryIds')))
                                                checked
                                                @endif
                                            >
                                            {{ $categoryName }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>所属系列</label>
                                    @foreach ($filters as $filter)
                                    <div class="checkbox">
                                        <label>
                                            <input
                                                type="checkbox"
                                                name="seriesIds[]"
                                                value="{{ $filter->id }}"
                                                @if (old('seriesIds') && in_array($filter->id, old('seriesIds')))
                                                checked
                                                @endif
                                            >
                                            {{ $filter->name }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>描述</label>
                                    <textarea
                                        class="form-control"
                                        name="description"
                                        rows="3">{{ old('description') }}</textarea>
                                </div>

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