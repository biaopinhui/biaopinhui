<div class="contact-row">
    <div class="phone inline">
        <i class="fa fa-phone"></i> 15727865656 ({{ trans('messages.seller-contact1') }}), 18324263053 ({{ trans('messages.seller-contact2') }})
    </div>
    <div class="contact inline">
        <i class="fa fa-envelope"></i> biaopinhui@126.com</span>
    </div>
</div><!-- /.contact-row -->
<!-- ============================================================= SEARCH AREA ============================================================= -->
<div class="search-area">
    <form>
        <div class="control-group">
            <input class="search-field" placeholder="{{ trans('labels.keyword') }}" />

            <ul class="categories-filter animate-dropdown">
                <li class="dropdown">

                    <a class="dropdown-toggle"  data-toggle="dropdown" href="index.php?page=category-grid">{{ trans('menu.all-categories') }}</a>

                    <ul class="dropdown-menu" role="menu" >
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?page=category-grid">{{ trans('menu.biaopai') }}</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?page=category-grid">{{ trans('menu.huizhang') }}</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?page=category-grid">{{ trans('menu.diaopai') }}</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?page=category-grid">{{ trans('menu.baozhuang') }}</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?page=category-grid">{{ trans('menu.yinshua') }}</a></li>
                    </ul>
                </li>
            </ul>

            <a class="search-button" href="#" ></a>    

        </div>
    </form>
</div><!-- /.search-area -->
<!-- ============================================================= SEARCH AREA : END ============================================================= -->