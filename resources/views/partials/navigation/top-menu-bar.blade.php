<!-- ============================================================= TOP NAVIGATION ============================================================= -->
<nav class="top-bar animate-dropdown">
    <div class="container">
        <div class="col-xs-12 col-sm-6 no-margin">
            <ul>
                <li><a href="/">{{ trans('menu.home') }}</a></li>
                <li><a href="about">{{ trans('menu.company-intro') }}</a></li>
                <li><a href="contact">{{ trans('menu.contact') }}</a></li>
                <li><a href="faq">{{ trans('menu.faq') }}</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#pages">{{ trans('menu.category') }}</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="index.php?page=home&amp;style=alt2">{{ trans('menu.biaopai') }}</a></li>
                        <li><a href="index.php?page=home-2&amp;style=alt2">{{ trans('menu.huizhang') }}</a></li>
                        <li><a href="index.php?page=category-grid&amp;style=alt2">{{ trans('menu.diaopai') }}</a></li>
                        <li><a href="index.php?page=category-grid&amp;style=alt2">{{ trans('menu.baozhuang') }}</a></li>
                        <li><a href="index.php?page=category-grid&amp;style=alt2">{{ trans('menu.yinshua') }}</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.col -->

        <div class="col-xs-12 col-sm-6 no-margin">
            <ul class="right">
                <li class="dropdown">
                    <a class="dropdown-toggle"  data-toggle="dropdown" href="#change-language">{{ trans('menu.english') }}</a>
                    <ul class="dropdown-menu" role="menu" >
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">{{ trans('menu.chinese') }}</a></li>
                    </ul>
                </li>
                <li><a href="index.php?page=authentication">{{ trans('menu.register') }}</a></li>
                <li><a href="index.php?page=authentication">{{ trans('menu.login') }}</a></li>
            </ul>
        </div><!-- /.col -->
    </div><!-- /.container -->
</nav><!-- /.top-bar -->
<!-- ============================================================= TOP NAVIGATION : END ============================================================= -->