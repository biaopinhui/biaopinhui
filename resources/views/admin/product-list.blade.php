@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">产品列表</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $category->name }}分类
                    <a class="pull-right" href="{{ url('admin/product/create/' . $category->id) }}" title="添加">
                        <i class="glyphicon glyphicon-plus"></i>
                    </a>
                </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>产品名称</th>
                                    <th>价格</th>
                                    <th>状态</th>
                                    <th class="col-md-2">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category->products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ trans('labels.status-' . $product->status) }}</td>
                                    <td class="col-md-2">
                                        <a class="col-md-3 col-md-offset-2" href="{{ url('admin/products/') }}" title="编辑"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a
                                            class="col-md-3 product-delete"
                                            href="{{ url('admin/products/') }}"
                                            title="删除"
                                            data-id="{{ $product->id }}"
                                        >
                                            <i class="glyphicon glyphicon-trash"></i>
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

@section('js')
    @parent

    <script>
    (function(){
        $('.product-delete').click(function(){
            var productId = $(this).data().id;

            $.ajax({
                url: '{{ url("admin/product/destroy") }}/' + productId,
                context: this,
                success: function(){
                    $(this).closest('tr').remove()
                }
            });

            return false;
        });
    })();
    </script>
@endsection