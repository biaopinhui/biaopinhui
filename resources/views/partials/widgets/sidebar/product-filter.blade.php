<!-- ========================================= PRODUCT FILTER ========================================= -->
<div class="widget">
    <h1>{{ trans('labels.product-filters') }}</h1>
    <div class="body bordered">
        
        <div class="category-filter">
            <h2>{{ trans('menu.series') }}</h2>
            <hr>
            <ul>
                <li>
                    <input class="le-checkbox" type="checkbox"  />
                    <label>{{ trans('menu.series-yinshua') }}</label>
                    <a href="{{ url('/biaopai/dianli') . '?sub-categories=19' }}"><span class="pull-right">(2)</span></a>
                </li>
                <li>
                    <input class="le-checkbox" type="checkbox"  />
                    <label>{{ trans('menu.series-siyin') }}</label>
                    <span class="pull-right">(8)</span>
                </li>
                <li>
                    <input class="le-checkbox" type="checkbox"  />
                    <label>{{ trans('menu.series-fushi') }}</label>
                    <span class="pull-right">(2)</span>
                </li>
                <li>
                    <input class="le-checkbox" type="checkbox"  />
                    <label>{{ trans('menu.series-fanguang') }}</label>
                    <span class="pull-right">(4)</span>
                </li>
                <li>
                    <input class="le-checkbox" type="checkbox"  />
                    <label>{{ trans('menu.series-yeguang') }}</label>
                    <span class="pull-right">(2)</span>
                </li>
                <li>
                    <input class="le-checkbox" type="checkbox"  />
                    <label>{{ trans('menu.series-chongya') }}</label>
                    <span class="pull-right">(6)</span>
                </li>
                <li>
                    <input class="le-checkbox" type="checkbox"  />
                    <label>{{ trans('menu.series-duxinban') }}</label>
                    <span class="pull-right">(5)</span>
                </li>
                <li>
                    <input class="le-checkbox" type="checkbox"  />
                    <label>{{ trans('menu.series-buxiugang') }}</label>
                    <span class="pull-right">(2)</span>
                </li>
                <li>
                    <input class="le-checkbox" type="checkbox"  />
                    <label>{{ trans('menu.series-penhui') }}</label>
                    <span class="pull-right">(9)</span>
                </li>
                <li>
                    <input class="le-checkbox" type="checkbox"  />
                    <label>{{ trans('menu.series-lvban') }}</label>
                    <span class="pull-right">(3)</span>
                </li>
                <li>
                    <input class="le-checkbox" type="checkbox"  />
                    <label>{{ trans('menu.series-yakeli') }}</label>
                    <span class="pull-right">(2)</span>
                </li>
            </ul>
        </div><!-- /.category-filter -->
        
        <div class="price-filter">
            <h2>Price</h2>
            <hr>
            <div class="price-range-holder">

                <input type="text" class="price-slider" value="" >

                <span class="min-max">
                    Price: $89 - $2899
                </span>
                <span class="filter-button">
                    <a href="#">Filter</a>
                </span>
            </div>
        </div><!-- /.price-filter -->

    </div><!-- /.body -->
</div><!-- /.widget -->
<!-- ========================================= PRODUCT FILTER : END ========================================= -->