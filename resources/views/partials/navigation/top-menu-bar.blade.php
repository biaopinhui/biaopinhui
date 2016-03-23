<!-- ============================================================= TOP NAVIGATION ============================================================= -->
<nav class="top-bar animate-dropdown">
    <div class="container">
        <div class="col-xs-12 col-sm-6 no-margin">
            <ul>
                <li><a href="/">{{ trans('labels.home') }}</a></li>
                <li><a href="about">{{ trans('labels.company-intro') }}</a></li>
                <li><a href="faq">{{ trans('labels.faq') }}</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#pages">{{ trans('labels.category') }}</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="index.php?page=home&amp;style=alt2">{{ trans('labels.biaopai') }}</a></li>
                        <li><a href="index.php?page=home-2&amp;style=alt2">{{ trans('labels.huizhang') }}</a></li>
                        <li><a href="index.php?page=category-grid&amp;style=alt2">{{ trans('labels.diaopai') }}</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.col -->

        <div class="col-xs-12 col-sm-6 no-margin">
            <ul class="right">
                <li class="dropdown">
                    <a class="dropdown-toggle"  data-toggle="dropdown" href="#change-language">{{ trans('labels.english') }}</a>
                    <ul class="dropdown-menu" role="menu" >
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">{{ trans('labels.chinese') }}</a></li>
                    </ul>
                </li>
                <li><a href="index.php?page=authentication">{{ trans('labels.register') }}</a></li>
                <li><a href="index.php?page=authentication">{{ trans('labels.login') }}</a></li>
            </ul>
        </div><!-- /.col -->
    </div><!-- /.container -->
</nav><!-- /.top-bar -->
<!-- ============================================================= TOP NAVIGATION : END ============================================================= -->