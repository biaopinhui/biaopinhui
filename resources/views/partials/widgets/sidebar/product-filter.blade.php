<!-- ========================================= PRODUCT FILTER ========================================= -->
<div class="widget">
    <h1>{{ trans('labels.product-filters') }}</h1>
    <div class="body bordered">
        
        <div class="category-filter">
            <h2>{{ trans('menu.series') }}</h2>
            <hr>
            <ul>
                @foreach ($series as $item)
                <li>
                    <input
                        class="le-checkbox filter-series"
                        type="checkbox"
                        data-id={{ $item['id'] }}
                        {{ $item['checked'] ? 'checked' : '' }}
                    >
                    <label>{{ trans('menu.series-' . $item['slug']) }}</label>
                    <a href="{{ url(end($breadcrumb)['url'] . '?series=' . $item['id']) }}">
                        <span class="pull-right">({{ $item['productCount'] }})</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div><!-- /.category-filter -->
        
        <div class="price-filter">
            <h2>{{ trans('labels.price') }}</h2>
            <hr>
            <div class="price-range-holder">

                <input type="text" class="price-slider"
                    value="{{ $fromPrice . ',' . $toPrice }}"
                    data-min="{{ $minPrice }}"
                    data-max="{{ $maxPrice }}"
                    data-from="{{ $fromPrice }}"
                    data-to="{{ $toPrice }}"
                >

                <span class="min-max">
                    {{ trans('labels.price') }}: 
                    {{ money_format('¥%.2n', $fromPrice) }} - 
                    {{ money_format('¥%.2n', $toPrice) }}
                </span>
                <span class="filter-button">
                    <a id="product-filter-btn" href="javascript:;">{{ trans('labels.filter') }}</a>
                </span>
            </div>
        </div><!-- /.price-filter -->

    </div><!-- /.body -->
</div><!-- /.widget -->
<!-- ========================================= PRODUCT FILTER : END ========================================= -->