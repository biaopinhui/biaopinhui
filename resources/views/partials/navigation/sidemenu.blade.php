<!-- ================================== TOP NAVIGATION ================================== -->
<div class="side-menu animate-dropdown">
    <div class="head"><i class="fa fa-list"></i> all departments</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">
            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                <ul class="dropdown-menu mega-menu">
                    <?php $pageChunkes = array_chunk(array(), 6, true); ?>
                    <li class="yamm-content">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="list-unstyled">
                                    <li><a href="index.php?page=home&amp;style=alt2">Home</a></li>
                                    <li><a href="index.php?page=home-2&amp;style=alt2">Home Alt</a></li>
                                    <li><a href="index.php?page=category-grid&amp;style=alt2">Category - Grid/List</a></li>
                                    <li><a href="index.php?page=category-grid-2&amp;style=alt2">Category 2 - Grid/List</a></li>
                                    <li><a href="index.php?page=single-product&amp;style=alt2">Single Product</a></li>
                                    <li><a href="index.php?page=single-product-sidebar&amp;style=alt2">Single Product with Sidebar</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-unstyled">
                                    <li><a href="index.php?page=cart&amp;style=alt2">Shopping Cart</a></li>
                                    <li><a href="index.php?page=checkout&amp;style=alt2">Checkout</a></li>
                                    <li><a href="index.php?page=about&amp;style=alt2">About Us</a></li>
                                    <li><a href="index.php?page=contact&amp;style=alt2">Contact Us</a></li>
                                    <li><a href="index.php?page=blog&amp;style=alt2">Blog</a></li>
                                    <li><a href="index.php?page=blog-fullwidth&amp;style=alt2">Blog Full Width</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-unstyled">
                                    <li><a href="index.php?page=blog-post&amp;style=alt2">Blog Post</a></li>
                                    <li><a href="index.php?page=faq&amp;style=alt2">FAQ</a></li>
                                    <li><a href="index.php?page=terms&amp;style=alt2">Terms &amp; Conditions</a></li>
                                    <li><a href="index.php?page=authentication&amp;style=alt2">Login/Register</a></li>
                                    <li><a href="index.php?page=404&amp;style=alt2">404</a></li>
                                    <li><a href="index.php?page=wishlist&amp;style=alt2">Wishlist</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    
                </ul>
            </li><!-- /.menu-item -->
            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Value of the Day</a>
                <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                        @include('partials.navigation.megamenu-vertical')
                        
                    </li>
                </ul>
            </li><!-- /.menu-item -->
            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laptops &amp; Computers</a>
                <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                        @include('partials.navigation.megamenu-vertical')                            
                    </li>
                </ul>
            </li><!-- /.menu-item -->
            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cameras &amp; Photography</a>
                <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                        @include('partials.navigation.megamenu-vertical')
                    </li>
                </ul>
            </li><!-- /.menu-item -->
            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Smart Phones &amp; Tablets</a>
                <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                        @include('partials.navigation.megamenu-vertical')    
                    </li>
                </ul>
            </li><!-- /.menu-item -->
            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Video Games &amp; Consoles</a>
                <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                        @include('partials.navigation.megamenu-vertical')
                    </li>
                </ul>
            </li><!-- /.menu-item -->
            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">TV &amp; Audio</a>
                <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                        @include('partials.navigation.megamenu-vertical')
                        
                    </li>
                </ul>
            </li><!-- /.menu-item -->
            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gadgets</a>
                <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                        @include('partials.navigation.megamenu-vertical')
                    </li>
                </ul>
            </li><!-- /.menu-item -->
            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Car Electronic &amp; GPS</a>
                <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                        @include('partials.navigation.megamenu-vertical')
                    </li>
                </ul>
            </li><!-- /.menu-item -->
            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accessories</a>
                <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                        @include('partials.navigation.megamenu-vertical')
                    </li>
                </ul>
            </li><!-- /.menu-item -->
            <li><a href="http://themeforest.net/item/media-center-electronic-ecommerce-html-template/8178892?ref=shaikrilwan">Buy this Theme</a></li>
        </ul><!-- /.nav -->
    </nav><!-- /.megamenu-horizontal -->
</div><!-- /.side-menu -->
<!-- ================================== TOP NAVIGATION : END ================================== -->