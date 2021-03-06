<section id="gaming">
    <div class="grid-list-products">
        <div class="tab-content">
            <div id="grid-view" class="products-grid fade tab-pane in active">
                <div class="product-grid-holder">
                    <div class="row no-margin">
                        @foreach ($products as $product)
                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                            <div class="product-item">
                                @if ($product->isOnSale())
                                <div class="ribbon red"><span>sale</span></div>
                                @endif
                                <div class="image">
                                    <img alt="" src="{{ asset('assets/images/blank.gif') }}"
                                        data-echo="{{ asset('assets/images/products/product-01.jpg') }}" />
                                </div>
                                <div class="body">
                                    <!-- <div class="label-discount green">-50% sale</div> -->
                                    <div class="title">
                                        <a href="{{ url($product->id) }}">{{ $product->title }}</a>
                                    </div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">
                                        @if ($product->isOnSale())
                                            {{ money_format('¥%.2n', $product->original_price) }}
                                        @endif
                                    </div>
                                    <div class="price-current pull-right">
                                        {{ money_format('¥%.2n', $product->price) }}
                                    </div>
                                </div>
                            </div><!-- /.product-item -->
                        </div><!-- /.product-item-holder -->
                        @endforeach
                    </div><!-- /.row -->
                </div><!-- /.product-grid-holder -->
                
                <div class="pagination-holder">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 text-left">
                            {{ $pagination }}
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.pagination-holder -->
            </div><!-- /.products-grid #grid-view -->
        </div><!-- /.tab-content -->
    </div><!-- /.grid-list-products -->
</section><!-- /#gaming -->