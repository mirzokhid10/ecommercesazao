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
            <li class="dropdown {{ setActive(['admin.order.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-truck"></i>
                    <span>Orders </span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.order.*']) }}"><a class="nav-link"
                            href="{{ route('admin.order.index') }}">All Orders</a></li>
                    <li class="{{ setActive(['admin.pending-orders']) }}"><a class="nav-link"
                            href="{{ route('admin.pending-orders') }}">All Pending Orders</a></li>
                    <li class="{{ setActive(['admin.processed-orders']) }}"><a class="nav-link"
                            href="{{ route('admin.processed-orders') }}">All processed Orders</a></li>
                    <li class="{{ setActive(['admin.dropped-off']) }}"><a class="nav-link"
                            href="{{ route('admin.dropped-off-orders') }}">All Dropped Off Orders</a></li>
                    <li class="{{ setActive(['admin.shipped-orders']) }}"><a class="nav-link"
                            href="{{ route('admin.shipped-orders') }}">All Shipped Orders</a></li>
                    <li class="{{ setActive(['admin.out-for-delivery-orders']) }}"><a class="nav-link"
                            href="{{ route('admin.out-for-delivery-orders') }}">All Out For Delivery Orders</a></li>
                    <li class="{{ setActive(['admin.delivered-orders']) }}"><a class="nav-link"
                            href="{{ route('admin.delivered-orders') }}">All Delivered Orders</a></li>
                    <li class="{{ setActive(['admin.canceled-orders']) }}"><a class="nav-link"
                            href="{{ route('admin.canceled-orders') }}">All Canceled Orders</a></li>
                </ul>
            </li>
            <li class="{{ setActive(['admin.transaction']) }}"><a class="nav-link"
                    href="{{ route('admin.transaction') }}"><i class="fas fa-money-bill-alt"></i>
                    <span>Transactions</span></a>
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
                            'admin.review.*',
                        ]) }}">
                        <a class="nav-link" href="{{ route('admin.product.index') }}">Products</a>
                    </li>
                    <li class="{{ setActive(['admin.seller-product.*']) }}"><a class="nav-link"
                            href="{{ route('admin.seller-product.index') }}">Seller Products</a></li>
                    <li class="{{ setActive(['admin.seller-pending-product.*']) }}"><a class="nav-link"
                            href="{{ route('admin.seller-pending-product.index') }}">Seller Pending Products</a></li>
                    <li class="{{ setActive(['admin.reviews.*']) }}"><a class="nav-link"
                            href="{{ route('admin.reviews.index') }}">Product Reviews</a></li>

                </ul>
            </li>
            <li
                class="dropdown {{ setActive([
                    'admin.flash-sale.*',
                    'admin.coupon.*',
                    'admin.shipping-rule.*',
                    'admin.vendor-profile.*',
                    'payment-settings',
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i>
                    <span>Ecommerce</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.flash-sale.*']) }}"><a class="nav-link"
                            href="{{ route('admin.flash-sale.index') }}">Flash Sale</a></li>
                    <li class="{{ setActive(['admin.coupon.*']) }}"><a class="nav-link"
                            href="{{ route('admin.coupon.index') }}">Coupons</a></li>
                    <li class="{{ setActive(['admin.shipping-rule.*']) }}"><a class="nav-link"
                            href="{{ route('admin.shipping-rule.index') }}">Shipping Rule</a></li>
                    <li class="{{ setActive(['admin.vendor-profile.*']) }}"><a class="nav-link"
                            href="{{ route('admin.vendor-profile.index') }}">Vendor Profile</a></li>
                    <li class="{{ setActive(['admin.payment-settings.*']) }}"><a class="nav-link"
                            href="{{ route('admin.payment-settings.index') }}">Payment Settings</a></li>
                </ul>
            </li>
            <li
                class="dropdown {{ setActive([
                    'admin.slider.*',
                    'admin.vendor-condition.index',
                    'admin.about.index',
                    'admin.terms-and-conditions.index',
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i>
                    <span>Manage Website</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.slider.*']) }}"><a class="nav-link"
                            href="{{ route('admin.slider.index') }}">Slider</a></li>
                    <li class="{{ setActive(['admin.slider.*']) }}"><a class="nav-link"
                            href="{{ route('admin.home-page-setting') }}">Home Page Setting</a></li>
                    <li class="{{ setActive(['admin.vendor-condition.index']) }}"><a class="nav-link"
                            href="{{ route('admin.vendor-condition.index') }}">Vendor Condition</a></li>
                    <li class="{{ setActive(['admin.about.index']) }}"><a class="nav-link"
                            href="{{ route('admin.about.index') }}">About page</a></li>
                    <li class="{{ setActive(['admin.terms-and-conditions.index']) }}"><a class="nav-link"
                            href="{{ route('admin.terms-and-conditions.index') }}">Terms & Conditions</a></li>
                </ul>
            </li>
            <li
                class="dropdown {{ setActive([
                    'admin.footer-info.*',
                    'admin.footer-socials.*',
                    'admin.footer-grid-two.*',
                    'admin.footer-grid-three.*',
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i>
                    <span>Footer</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.footer-info.*']) }}"><a class="nav-link"
                            href="{{ route('admin.footer-info.index') }}">Footer Info</a></li>
                    <li class="{{ setActive(['admin.footer-socials.*']) }}"><a class="nav-link"
                            href="{{ route('admin.footer-socials.index') }}">Footer Socials</a></li>
                    <li class="{{ setActive(['admin.footer-grid-two.*']) }}"><a class="nav-link"
                            href="{{ route('admin.footer-grid-two.index') }}">Footer Grid Two</a></li>
                    <li class="{{ setActive(['admin.footer-grid-three.*']) }}"><a class="nav-link"
                            href="{{ route('admin.footer-grid-three.index') }}">Footer Grid Three</a></li>
                </ul>
            </li>
            <li
                class="dropdown {{ setActive([
                    'admin.vendor-requests.index',
                    'admin.customer.index',
                    'admin.vendor-list.index',
                    'admin.manage-user.index',
                    'admin-list.index',
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i>
                    <span>Users</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.customer.index']) }}"><a class="nav-link"
                            href="{{ route('admin.customer.index') }}">Customer list</a></li>
                    <li class="{{ setActive(['admin.vendor-list.index']) }}"><a class="nav-link"
                            href="{{ route('admin.vendor-list.index') }}">Vendor list</a></li>

                    <li class="{{ setActive(['admin.vendor-requests.index']) }}"><a class="nav-link"
                            href="{{ route('admin.vendor-requests.index') }}">Pending vendors</a></li>

                    <li class="{{ setActive(['admin.admin-list.index']) }}"><a class="nav-link"
                            href="{{ route('admin.admin-list.index') }}">Admin Lists</a></li>

                    <li class="{{ setActive(['admin.manage-user.index']) }}"><a class="nav-link"
                            href="{{ route('admin.manage-user.index') }}">Manage user</a></li>
                </ul>
            </li>
            <li> <a href="{{ route('admin.advertisement.index') }}"
                    class="nav-link {{ setActive(['admin.advertisement.*']) }}"><i class="fas fa-cog"></i>
                    <span>Advertisement</span></a>
            </li>
            <li> <a href="{{ route('admin.subscribers.index') }}"
                    class="nav-link {{ setActive(['admin.subscribers.*']) }}"><i class="fas fa-cog"></i>
                    <span>Subscribers</span></a>
            </li>
            <li> <a href="{{ route('admin.setting.index') }}"
                    class="nav-link {{ setActive(['admin.setting.*']) }}"><i class="fas fa-cog"></i>
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
