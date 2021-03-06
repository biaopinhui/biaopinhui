<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="color-bg">
    
    <div class="container">
        <div class="row no-margin widgets-row">
            <div class="col-xs-12  col-sm-4 no-margin-left">
                @include('partials.widgets.footer.featured-products-footer')
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-4 ">
                @include('partials.widgets.footer.on-sale-products-footer')
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-4 ">
                @include('partials.widgets.footer.top-rated-products-footer')
            </div><!-- /.col -->

        </div><!-- /.widgets-row-->
    </div><!-- /.container -->

    <div class="sub-form-row">
        <div class="container">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
                <form role="form">
                    <input placeholder="{{ trans('messages.subscribe-newsletter') }}">
                    <button class="le-button">{{ trans('labels.subscribe') }}</button>
                </form>
            </div>
        </div><!-- /.container -->
    </div><!-- /.sub-form-row -->

    <div class="link-list-row">
        <div class="container no-padding">
            <div class="col-xs-12 col-md-4 ">
                @include('partials.widgets.footer.contact-info-footer')
            </div>

            <div class="col-xs-12 col-md-8 no-margin">
                @include('partials.widgets.footer.links-footer')
            </div>
        </div><!-- /.container -->
    </div><!-- /.link-list-row -->

    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-margin">
                <div class="copyright">
                    &copy; <a href="index.php?page=home">{{ trans('labels.biaopinhui') }}</a> - {{ trans('messages.rights-reserved') }}
                </div><!-- /.copyright -->
            </div>
        </div><!-- /.container -->
    </div><!-- /.copyright-bar -->

</footer><!-- /#footer -->
<!-- ============================================================= FOOTER : END ============================================================= -->