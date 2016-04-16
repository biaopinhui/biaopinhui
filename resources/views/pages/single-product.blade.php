@extends('layouts.main')

@section('title', '标牌徽章吊牌包装 - 尽在')
@section('description', '标品会专业生产标牌徽章吊牌包装等，应有尽有。')

@section('content')
@include('partials/breadcrumb/breadcrumb-biaopai')

<div id="single-product">
    <div class="container">

        @include('partials/section/single-product-gallery')
        
        @include('partials/section/single-product-detail')

    </div><!-- /.container -->
</div><!-- /.single-product -->

@include('partials/section/single-product-tab')

@include('partials/section/recently-viewed')

@endsection