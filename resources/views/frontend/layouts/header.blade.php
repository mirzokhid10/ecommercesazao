<header>
    <div class="container">
        <div class="row">
            <div class="col-2 col-md-1 d-lg-none">
                <div class="wsus__mobile_menu_area">
                    <span class="wsus__mobile_menu_icon"><i class="fal fa-bars"></i></span>
                </div>
            </div>
            <div class="col-xl-2 col-7 col-md-8 col-lg-2">
                <div class="wsus_logo_area">
                    <a class="wsus__header_logo" href="{{ url('/') }}">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="logo" class="img-fluid w-100">
                    </a>
                </div>
            </div>
            <div class="col-xl-5 col-md-6 col-lg-4 d-none d-lg-block">
                <div class="wsus__search">
                    <form action="">
                        <input type="text" placeholder="Search..." name="search" value="">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-xl-5 col-3 col-md-3 col-lg-6">
                <div class="wsus__call_icon_area">
                    <div class="wsus__call_area">
                        <div class="wsus__call">
                            <i class="fas fa-user-headset"></i>
                        </div>
                        <div class="wsus__call_text">
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                    <ul class="wsus__icon_area">
                        <li><a href=""><i class="fal fa-heart"></i><span id="wishlist_count">
                                </span></a></li>
                        {{-- <li><a href="compare.html"><i class="fal fa-random"></i><span>03</span></a></li> --}}
                        <li><a class="wsus__cart_icon" href="#"><i class="fal fa-shopping-bag"></i><span
                                    id="cart-count"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="wsus__mini_cart">
        <h4>shopping cart <span class="wsus_close_mini_cart"><i class="far fa-times"></i></span></h4>
        <ul class="mini_cart_wrapper">

        </ul>
        <div class="mini_cart_actions">
            <h5>sub total <span id="mini_cart_subtotal"></span></h5>
            <div class="wsus__minicart_btn_area">
                <a class="common_btn" href="">view cart</a>
                <a class="common_btn" href="">checkout</a>
            </div>
        </div>
    </div>

</header>
