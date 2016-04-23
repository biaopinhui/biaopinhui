<!-- ========================================= BREADCRUMB ========================================= -->
<div id="top-mega-nav">
    <div class="container">
        <nav>
            <ul class="inline">
                <li class="dropdown le-dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-hover="dropdown" style="width: 250px;">
                        <i class="fa fa-list"></i> {{ trans('labels.categorize-by-usage') }}
                    </a>
                    
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('biaopai/anquan') }}">{{ trans('menu.bp-anquan') }}</a></li>
                        <li><a href="{{ url('biaopai/dianli') }}">{{ trans('menu.bp-dianli') }}</a></li>
                        <li><a href="{{ url('biaopai/gonglu') }}">{{ trans('menu.bp-gonglu') }}</a></li>
                        <li><a href="{{ url('biaopai/jiangpai') }}">{{ trans('menu.bp-jiangpai') }}</a></li>
                        <li><a href="{{ url('biaopai/keshi') }}">{{ trans('menu.bp-keshi') }}</a></li>
                        <li><a href="{{ url('biaopai/yakeli') }}">{{ trans('menu.bp-yakeli') }}</a></li>
                        <li><a href="{{ url('biaopai/caodi') }}">{{ trans('menu.bp-caodi') }}</a></li>
                        <li><a href="{{ url('biaopai/famen') }}">{{ trans('menu.bp-famen') }}</a></li>
                        <li><a href="{{ url('biaopai/gongshilan') }}">{{ trans('menu.bp-gongshilan') }}</a></li>
                        <li><a href="{{ url('biaopai/cheku') }}">{{ trans('menu.bp-dixiacheku') }}</a></li>
                        <li><a href="{{ url('biaopai/jiaxiao') }}">{{ trans('menu.bp-jiaxiao') }}</a></li>
                        <li><a href="{{ url('biaopai/jiashiyuan') }}">{{ trans('menu.bp-jiashiyuan') }}</a></li>
                        <li><a href="{{ url('biaopai/qiche') }}">{{ trans('menu.bp-qiche') }}</a></li>
                    </ul>
                </li>

                <li class="breadcrumb-nav-holder"> 
                    <ul>
                        @foreach ($breadcrumb as $key => $item)
                        <li class="breadcrumb-item{{ count($breadcrumb) === $key + 1 ? ' current' : '' }}">
                            <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                        </li><!-- /.breadcrumb-item -->
                        @endforeach
                    </ul>
                </li><!-- /.breadcrumb-nav-holder -->

            </ul><!-- /.inline -->
        </nav>

    </div><!-- /.container -->
</div><!-- /#top-mega-nav -->
