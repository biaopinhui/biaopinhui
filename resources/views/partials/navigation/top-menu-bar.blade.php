<!-- ============================================================= TOP NAVIGATION ============================================================= -->
<nav class="top-bar animate-dropdown">
    <div class="container">
        <div class="col-xs-12 col-sm-6 no-margin">
            <ul>
                <li><a href="/index.php?page=home">{{ trans('buttons.home') }}</a></li>
                <li><a href="index.php?page=faq">{{ trans('buttons.faq') }}</a></li>
                <li><a href="index.php?page=contact">{{ trans('buttons.contact') }}</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#pages">{{ trans('buttons.category') }}</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="index.php?page=home&amp;style=alt2">{{ trans('buttons.biaopai') }}</a></li>
                        <li><a href="index.php?page=home-2&amp;style=alt2">{{ trans('buttons.huizhang') }}</a></li>
                        <li><a href="index.php?page=category-grid&amp;style=alt2">{{ trans('buttons.diaopai') }}</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.col -->

        <div class="col-xs-12 col-sm-6 no-margin">
            <ul class="right">
                <li class="dropdown">
                    <a class="dropdown-toggle"  data-toggle="dropdown" href="#change-language">{{ trans('buttons.english') }}</a>
                    <ul class="dropdown-menu" role="menu" >
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">{{ trans('buttons.chinese') }}</a></li>
                    </ul>
                </li>
                <li><a href="index.php?page=authentication">{{ trans('buttons.register') }}</a></li>
                <li><a href="index.php?page=authentication">{{ trans('buttons.login') }}</a></li>
            </ul>
        </div><!-- /.col -->
    </div><!-- /.container -->
</nav><!-- /.top-bar -->
<!-- ============================================================= TOP NAVIGATION : END ============================================================= -->