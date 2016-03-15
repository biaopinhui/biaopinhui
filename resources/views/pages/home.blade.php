@extends('layouts.master')

@section('title', '标牌徽章吊牌包装 - 尽在')
@section('description', '标品会专业生产标牌徽章吊牌包装等，应有尽有。')

@section('content')
	<div id="top-banner-and-menu">
		<div class="container">
			
			<div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
				@include('partials.navigation.sidemenu')	
			</div><!-- /.sidemenu-holder -->

			<div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
				@include('partials.section.home-page-slider')	
			</div><!-- /.homebanner-holder -->

		</div><!-- /.container -->
	</div><!-- /#top-banner-and-menu -->

	@include('partials.section.home-page-tabs')
	@include('partials.section.best-sellers')
	@include('partials.section.recently-viewed')
@endsection