<div class="no-margin col-xs-12 col-sm-7 body-holder">
    <div class="body">
        <div class="star-holder inline"><div class="star" data-score="4"></div></div>
        <div class="availability"><label>Availability:</label><span class="available">  in stock</span></div>

        <div class="title"><a href="#">{{ $product->title }}</a></div>
        <div class="brand">sony</div>

        <div class="social-row">
            <span class="st_facebook_hcount"></span>
            <span class="st_twitter_hcount"></span>
            <span class="st_pinterest_hcount"></span>
        </div>

        <div class="buttons-holder">
            <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
            <a class="btn-add-to-compare" href="#">add to compare list</a>
        </div>

        <div class="excerpt">
            <p>{{ $product->excerpt }}</p>
        </div>
        
        <div class="prices">
            <div class="price-current">{{ money_format('¥%.2n', $product->price) }}</div>
            @if ($product->isOnsale())
            <div class="price-prev">{{ money_format('¥%.2n', $product->original_price) }}</div>
            @endif
        </div>

        <div class="qnt-holder">
            <div class="le-quantity">
                <form>
                    <a class="minus" href="#reduce"></a>
                    <input name="quantity" readonly="readonly" type="text" value="1" />
                    <a class="plus" href="#add"></a>
                </form>
            </div>
            <a id="addto-cart" href="index.php?page=cart" class="le-button huge">add to cart</a>
        </div><!-- /.qnt-holder -->
    </div><!-- /.body -->

</div><!-- /.body-holder -->