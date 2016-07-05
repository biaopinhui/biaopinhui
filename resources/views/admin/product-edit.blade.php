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
                        <form role="form" method="post" action="{{ url('admin/product/update/' . $product->id) }}">
                            {!! csrf_field() !!}
                            <div class="col-lg-6">
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label>名称</label>
                                    <input class="form-control"
                                        name="title"
                                        value="{{ old('title') !== null ? old('title') : $product->title}}"
                                    >
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
                                            value="{{ old('price') !== null ? old('price') : $product->price}}"
                                        >
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
                                            value="{{ old('original_price') !== null ? old('original_price') : $product->original_price}}"
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
                                    <select class="form-control"
                                        name="status"
                                    >
                                        <option value="1"{{ (old('status') !== null && old('status') === 1) || (old('status') === null && $product->status === 1) ? ' selected' : '' }}>{{ trans('labels.status-1') }}</option>
                                        <option value="0"{{ (old('status') !== null && old('status') === 0) || (old('status') === null && $product->status === 0) ? ' selected' : '' }}>{{ trans('labels.status-0') }}</option>
                                    </select>
                                </div>
                                <div class="form-group{{ $errors->has('excerpt') ? ' has-error' : '' }}">
                                    <label>简介</label>
                                    <textarea
                                        class="form-control"
                                        rows="3"
                                        name="excerpt"
                                    >{{ old('excerpt') !== null ? old('excerpt') : $product->excerpt}}</textarea>
                                    @if ($errors->has('excerpt'))
                                    <span class="help-block has-error">
                                        <strong>{{ $errors->first('excerpt') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group{{ $errors->has('categoryIds') ? ' has-error' : '' }}">
                                    <label>所属分类</label>
                                    @foreach ($categories as $item)
                                    <div class="checkbox">
                                        <label>
                                            <input
                                                type="checkbox"
                                                name="categoryIds[]"
                                                value="{{ $item->id }}"
                                                {{ (old('categoryIds') !== null && in_array($item->id, old('categoryIds'))) || (old('categoryIds') === null && $item->isChecked) ? "checked" : "" }}
                                            >
                                            {{ $item->name }}
                                        </label>
                                    </div>
                                    @endforeach
                                    @if ($errors->has('categoryIds'))
                                    <span class="help-block has-error">
                                        <strong>{{ $errors->first('categoryIds') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>所属系列</label>
                                    @foreach ($series as $item)
                                    <div class="checkbox">
                                        <label>
                                            <input
                                                type="checkbox"
                                                name="seriesIds[]"
                                                value="{{ $item->id }}"
                                                {{ (old('seriesIds') !== null && in_array($item->id, old('seriesIds'))) || (old('seriesIds') === null && $item->isChecked) ? "checked" : "" }}
                                            >
                                            {{ $item->name }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>描述</label>
                                    <textarea
                                        id="product-discription"
                                        class="form-control"
                                        name="description"
                                        rows="3"
                                    >{{ old('description') !== null ? old('description') : $product->description}}</textarea>
                                </div>

                                <input type="hidden" name="productId" value="{{ $product->id }}" />

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
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    产品图片
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form method="post" action="dump.php">  
                            <div id="uploader">
                                <p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
                            </div>
                            <input type="submit" value="Send" />
                        </form>

 

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>
@endsection

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.2/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="{{ env('BPH_CDN') }}assets/plupload/js/jquery.ui.plupload/css/jquery.ui.plupload.css" rel="stylesheet" type="text/css">
@endsection

@section('js')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script src="{{ env('BPH_CDN') }}assets/plupload/js/plupload.full.min.js"></script>
<script src="{{ env('BPH_CDN') }}assets/plupload/js/jquery.ui.plupload/jquery.ui.plupload.js"></script>

<script>
tinymce.init({
    selector: '#product-discription',
    height: 500,
    theme: 'modern',
    plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools'
    ],
    toolbar1: 'insertfile undo redo | styleselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | preview',
    image_advtab: true,
    templates: [
        { title: 'Test template 1', content: 'Test 1' },
        { title: 'Test template 2', content: 'Test 2' }
    ],
    content_css: [
        '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
        '//www.tinymce.com/css/codepen.min.css'
    ]
});

(function(){
    $("#uploader").plupload({
        // General settings
        runtimes : 'html5,flash,silverlight,html4',
        url : "{{ url('admin/image/upload/' . $product->id) }}",

        // User can upload no more then 20 files in one go (sets multiple_queues to false)
        max_file_count: 20,
        
        chunk_size: '1mb',
        
        filters : {
            // Maximum file size
            max_file_size : '1000mb',
            // Specify what files to browse for
            mime_types: [
                {title : "Image files", extensions : "jpg,gif,png"}
            ]
        },

        // Rename files by clicking on their titles
        rename: false,
        
        // Sort files
        sortable: true,

        // Enable ability to drag'n'drop files onto the widget (currently only HTML5 supports that)
        dragdrop: true,

        // Views to activate
        views: {
            list: true,
            thumbs: true, // Show thumbs
            active: 'thumbs'
        },

        // Flash settings
        flash_swf_url : '../../js/Moxie.swf',

        // Silverlight settings
        silverlight_xap_url : '../../js/Moxie.xap'
    });
})();
</script>
@endsection