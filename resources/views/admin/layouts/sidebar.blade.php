<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard') }}">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="{{ route('admin.dashboard') }}" class="nav-link has-dropdown"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Starter</li>
            <li
                class="dropdown {{ setActive(['admin.category.*', 'admin.sub-category.*', 'admin.child-category.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-bookmark"></i>
                    <span>Manage Categories </span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.category.']) }}"><a class="nav-link"
                            href="{{ route('admin.category.index') }}">Categories</a>
                    </li>
                    <li class="{{ setActive(['admin.sub-category.']) }}"><a class="nav-link"
                            href="{{ route('admin.sub-category.index') }}">Sub
                            Categories</a>
                    </li>
                    <li class="{{ setActive(['admin.child-category.']) }}"><a class="nav-link"
                            href="{{ route('admin.child-category.index') }}">Child
                            Categories</a>
                    </li>
                </ul>
            </li>
            <li
                class="dropdown {{ setActive([
                    'admin.brand.*',
                    'admin.product.*',
                    'admin.product-image-gallery.*',
                    'admin.product-variant.*',
                    'admin.product-variant-item.*',
                    'admin.seller-product.*',
                    'admin.seller-pending-product.*',
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-box"></i>
                    <span>Manage Products</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.brand.*']) }}"><a class="nav-link"
                            href="{{ route('admin.brand.index') }}">Brands</a></li>
                    <li
                        class="{{ setActive([
                            'admin.product.*',
                            'admin.product-image-gallery.*',
                            'admin.product-variant.*',
                            'admin.product-variant-item.*',
                        ]) }}">
                        <a class="nav-link" href="{{ route('admin.product.index') }}">Products</a>
                    </li>
                    <li class="{{ setActive(['admin.seller-product.*']) }}"><a class="nav-link"
                            href="{{ route('admin.seller-product.index') }}">Seller Products</a></li>
                    <li class="{{ setActive(['admin.seller-pending-product.*']) }}"><a class="nav-link"
                            href="{{ route('admin.seller-pending-product.index') }}">Seller Pending Products</a></li>

                </ul>
            </li>
            <li class="dropdown {{ setActive(['admin.vendor-profile.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i>
                    <span>Ecommerce</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.vendor-profile.*']) }}"><a class="nav-link"
                            href="{{ route('admin.flash-sale.index') }}">Flash Sale</a></li>
                    <li class="{{ setActive(['admin.vendor-profile.*']) }}"><a class="nav-link"
                            href="{{ route('admin.vendor-profile.index') }}">Vendor Profile</a></li>
                </ul>
            </li>
            <li class="dropdown {{ setActive(['admin.slider.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i>
                    <span>Manage Website</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.slider.*']) }}"><a class="nav-link"
                            href="{{ route('admin.slider.index') }}">Slider</a></li>
                </ul>
            </li>
            <li class="dropdown {{ setActive(['admin.setting.*']) }}">
                <a href="{{ route('admin.setting.index') }}" class="nav-link"><i class="fas fa-cog"></i>
                    <span>Settings</span></a>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
