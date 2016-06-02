<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li class="active">
                <a href="#">
                    <i class="fa fa-list fa-fw"></i> 产品大类
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('admin/categories/1') }}">标牌</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/categories/2') }}">徽章</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/categories/3') }}">吊牌</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/categories/4') }}">包装</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/categories/5') }}">印刷</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>