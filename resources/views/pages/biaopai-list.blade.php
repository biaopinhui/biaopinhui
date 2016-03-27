@extends('layouts.main')

@section('title', '标牌徽章吊牌包装 - 尽在')
@section('description', '标品会专业生产标牌徽章吊牌包装等，应有尽有。')

@section('content')
@include('partials/breadcrumb/breadcrumb-biaopai')

<section id="category-grid">
    <div class="container">
        
        <!-- ========================================= SIDEBAR ========================================= -->
        <div class="col-xs-12 col-sm-3 no-margin sidebar narrow">

            @include('partials/widgets/sidebar/product-filter')

        </div>
        <!-- ========================================= SIDEBAR : END ========================================= -->

        <!-- ========================================= CONTENT ========================================= -->

        <div class="col-xs-12 col-sm-9 no-margin wide sidebar">

           @include('/partials/section/recommended-products')
            
           @include('/partials/section/category-products')
            
        </div><!-- /.col -->
        <!-- ========================================= CONTENT : END ========================================= -->    
    </div><!-- /.container -->
</section><!-- /#category-grid -->
@endsection