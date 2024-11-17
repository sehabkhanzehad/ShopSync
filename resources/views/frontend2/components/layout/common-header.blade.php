@php
    $feateuredCategories = \App\Models\FeaturedCategory::with('category')->orderBy('serial', 'DESC')->get();
    $footer = DB::table('footers')->first();
    $sLinks = DB::table('footer_social_links')->get();
    $custom_pages = DB::table('custom_pages')->where('status', 1)->get();
    $paymentv = DB::table('banner_images')->where('id', 16)->first();
    $deliveryp = DB::table('banner_images')->where('id', 17)->first();
    $sLink = DB::table('footer_social_links')->where('id', 5)->first();
@endphp

<header>
    <div class="mobile-fix-option"></div>
    {{-- <div class="top-header">
        <div class="custom-container">
            <div class="row">
                <div class="col-xl-5 col-md-7 col-sm-6">
                    <div class="top-header-left">
                        <div class="shpping-order">
                            <h6>free shipping on order over $99 </h6>
                        </div>
                        <div class="app-link">
                            <h6>
                                Download aap
                            </h6>
                            <ul>
                                <li><a><i class="fa fa-apple"></i></a></li>
                                <li><a><i class="fa fa-android"></i></a></li>
                                <li><a><i class="fa fa-windows"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-md-5 col-sm-6">
                    <div class="top-header-right">
                        <div class="top-menu-block">
                            <ul>
                                <li><a href="#">gift cards</a></li>
                                <li><a href="#">Notifications</a></li>
                                <li><a href="#">help & contact</a></li>
                                <li><a href="#">todays deal</a></li>
                                <li><a href="#">track order</a></li>
                                <li><a href="#">shipping </a></li>
                                <li><a href="#">easy returns</a></li>
                            </ul>
                        </div>
                        <div class="language-block">
                            <div class="language-dropdown">
                                <span class="language-dropdown-click">
                                    english <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                                <ul class="language-dropdown-open">
                                    <li><a href="#">hindi</a></li>
                                    <li><a href="#">english</a></li>
                                    <li><a href="#">marathi</a></li>
                                    <li><a href="#">spanish</a></li>
                                </ul>
                            </div>
                            <div class="curroncy-dropdown">
                                <span class="curroncy-dropdown-click">
                                    usd<i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                                <ul class="curroncy-dropdown-open">
                                    <li><a href="#"><i class="fa fa-inr"></i>inr</a></li>
                                    <li><a href="#"><i class="fa fa-usd"></i>usd</a></li>
                                    <li><a href="#"><i class="fa fa-eur"></i>eur</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="layout-header2">
        <div class="container">
            <div class="col-md-12">
                <div class="main-menu-block">
                    <div class="sm-nav-block">
                        <span class="sm-nav-btn"><i class="fa fa-bars"></i></span>
                        <ul class="nav-slide">
                            <li>
                                <div class="nav-sm-back">
                                    back <i class="fa fa-angle-right pl-2"></i>
                                </div>
                            </li>

                            @foreach ($feateuredCategories as $item)
                                <li><a
                                        href="{{ route('front.subcategory', [
                                            'type' => 'subcategory',
                                            'slug' => $item->category->slug,
                                        ]) }}">{{ $item->category->name }}</a>
                                </li>
                            @endforeach

                            {{-- <li><a href="#">western ware</a></li>
                            <li><a href="#">TV, Appliances</a></li>
                            <li><a href="#">Pets Products</a></li>
                            <li><a href="#">Car, Motorbike</a></li>
                            <li><a href="#">Industrial Products</a></li>
                            <li><a href="#">Beauty, Health Products</a></li>
                            <li><a href="#">Grocery Products </a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Bags, Luggage</a></li>
                            <li><a href="#">Movies, Music </a></li>
                            <li><a href="#">Video Games</a></li>
                            <li><a href="#">Toys, Baby Products</a></li>
                            <li class="mor-slide-open">
                                <ul>
                                    <li><a href="#">Bags, Luggage</a></li>
                                    <li><a href="#">Movies, Music </a></li>
                                    <li><a href="#">Video Games</a></li>
                                    <li><a href="#">Toys, Baby Products</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="mor-slide-click">
                                    mor category
                                    <i class="fa fa-angle-down pro-down"></i>
                                    <i class="fa fa-angle-up pro-up"></i>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="logo-block">
                        <a href="{{ route('front.home') }}"><img height="60" width="120" src="{{ asset(siteInfo()->logo) }}" class="img-fluid  "
                                alt="logo"></a>
                    </div>

                    <div class="input-block">
                        <div class="input-box">
                            <form class="big-deal-form" action="{{ route('front.product.search') }}">
                                <div class="input-group ">
                                    <input type="text" class="form-control" placeholder="Search a Product"
                                        name="query">
                                    <div class="input-group-append">
                                        <button style="border: 2px solid black" type="submit" class="btn btn-normal"><i
                                                class="fa fa-search"></i>Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    @php $cart = session()->get('cart', []); @endphp

                    <div class="cart-block cart-hover-div " onclick="openCart()">
                        <div class="cart ">
                            @if ($cart !== null)
                                <span class="cart-product">{{ count($cart) }}</span>
                                <ul>
                                    <li class="mobile-cart  ">
                                        <a href="{{ route('front.checkout.index') }}">
                                            <i class="icon-shopping-cart "></i>
                                        </a>
                                    </li>
                                </ul>
                            @else
                                <span class="cart-product">0</span>
                                <ul>
                                    <li class="mobile-cart ">
                                        <i class="icon-shopping-cart"></i>
                                    </li>
                                </ul>
                            @endif
                        </div>
                        <div class="cart-item">
                            <h5>shopping</h5>
                            <h5>cart</h5>
                        </div>
                    </div>



                    <div class="menu-nav">
                        <span class="toggle-nav">
                            <i class="fa fa-bars "></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="category-header-2">
        <div class="custom-container">
            <div class="row">
                <div class="col">
                    <div class="navbar-menu">
                        <div class="category-left">
                            <div class="nav-block">
                                <div class="nav-left">
                                    <nav class="navbar" data-toggle="collapse"
                                        data-target="#navbarToggleExternalContent">
                                        <button class="navbar-toggler" type="button">
                                            <span class="navbar-icon"><i class="fa fa-arrow-down"></i></span>
                                        </button>
                                        <h5 class="mb-0  text-white title-font">Shop by category</h5>
                                    </nav>
                                    <div class="collapse  nav-desk" id="navbarToggleExternalContent">
                                        <ul class="nav-cat title-font">

                                            @foreach ($feateuredCategories as $item)
                                                <li> <img style="width: 50px; height: 50px;"
                                                        src="{{ asset('uploads/custom-images2/' . $item->category->image) }}"
                                                        alt="category-product"> <a
                                                        href="{{ route('front.subcategory', [
                                                            'type' => 'subcategory',
                                                            'slug' => $item->category->slug,
                                                        ]) }}">{{ $item->category->name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-block">
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2"
                                                    aria-hidden="true"></i></div>
                                        </li>


                                        <li>
                                            <a href="{{ route('front.home') }}" class="dark-menu-item">Home</a>

                                        </li>

                                        @foreach ($custom_pages as $pages)
                                            <li>
                                                <a class="dark-menu-item"
                                                    href="{{ route('front.customPages', $pages->slug) }}">{{ $pages->page_name }}</a>
                                            </li>
                                        @endforeach


                                        {{-- <li>
                                            <a href="#" class="dark-menu-item">Coming Soon</a>
                                        </li> --}}

                                        <!--blog-meu start-->

                                        <li>
                                            <a href="{{ route('front.blog.index') }}" class="dark-menu-item">Blog</a>

                                        </li>

                                        <!--blog-meu end-->

                                        {{-- <li>
                                            <a href="#" class="dark-menu-item">Contact</a>
                                        </li> --}}
                                    </ul>
                                </nav>
                            </div>
                            <div class="icon-block">
                                <ul>
                                    @if (Auth::check())
                                        {{-- show a nav with user icon with a dropdown menu --}}
                                        <li class="mobile-user onhover-dropdown">
                                            <a style="cursor: pointer"><i class="icon-user"></i></a>
                                            <ul class="onhover-show-div">
                                                {{-- // show user name and email with align center and color --}}
                                                <li style="text-align: center;"><a style="color: orange"
                                                        href="">{{ Auth::user()->name }}</a></li>
                                                <li style="text-align: center;"><a style="color: orange"
                                                        href="">{{ Auth::user()->email }}</a></li>


                                                {{-- <li ><a href="">{{ Auth::user()->name }}</a></li>
                                        <li><a href="">{{ Auth::user()->email }}</a></li> --}}

                                                <li class="border-top border-bottom"><a
                                                        href="{{ route('front.profile') }}">Profile</a></li>
                                                {{-- <li class="border-bottom"><a href="{{ route("front.dashboard") }}">Dashboard</a></li> --}}
                                                <li class="border-bottom"><a href="{{ route("front.order.index") }}">Order</a></li>
                                                {{-- <li class="border-bottom"><a href="{{ route('front.wishlist.index') }}">Wishlist</a></li> --}}
                                                <li class="border-bottom"><a
                                                        href="{{ route('front.logout') }}">Logout</a></li>

                                            </ul>
                                        </li>
                                    @else
                                        <li class="mobile-user onhover-dropdown" onclick="openAccount()"><a
                                                style="cursor: pointer"><i class="icon-user"></i></a>
                                    @endif
                                    {{-- @php
                                        $wishlists = \App\Models\Wishlist::where('user_id', Auth::id())->get();
                                    @endphp --}}
                                    {{-- <li class="mobile-wishlist" onclick="openWishlist()"> --}}
                                    {{-- <li class="mobile-wishlist">
                                        <a href="{{ $wishlists->count() > 0 ? route('front.wishlist.index') : '' }}" ><i class="icon-heart"></i>
                                            <div class="cart-item">
                                                <div>{{ count($wishlists) }} item<span>wishlist</span></div>
                                            </div>
                                        </a>
                                    </li> --}}
                                    <li class="mobile-search"><a href="#"><i class="icon-search"></i></a>
                                        <div class ="search-overlay">
                                            <div>
                                                <span class="close-mobile-search">×</span>
                                                <div class="overlay-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <form>
                                                                    <div class="form-group"><input type="text"
                                                                            class="form-control"
                                                                            id="exampleInputPassword1"
                                                                            placeholder="Search a Product"></div>
                                                                    <button type="submit" class="btn btn-primary"><i
                                                                            class="fa fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mobile-setting mobile-setting-hover" onclick="openSetting()"><a
                                            href="#"><i class="icon-settings"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @php $footer = DB::table('footers')->first(); @endphp




                        <div class="category-right">
                            <div class="contact-block">
                                <div>
                                    <i class="fa fa-volume-control-phone"></i>
                                    <span>call us<span>{{ $footer->phone }}</span></span>
                                </div>
                            </div>
                            {{-- <div class="btn-group">
                                <div class="gift-block" data-toggle="dropdown">
                                    <div class="grif-icon">
                                        <i class="icon-gift"></i>
                                    </div>
                                    <div class="gift-offer">
                                        <p>gift box</p>
                                        <span>Festivel Offer</span>
                                    </div>
                                </div>
                                <div class="dropdown-menu gift-dropdown">
                                    <div class="media">
                                        <div class="mr-3">
                                            <img src="../assets/images/icon/1.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Billion Days</h5>
                                            <p><img src="../assets/images/icon/currency.png" class="cash"
                                                    alt="curancy"> Flat Rs. 270 Rewards</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="mr-3">
                                            <img src="../assets/images/icon/2.png" alt="Generic placeholder image"
                                                class="gift-bloc">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Fashion Discount</h5>
                                            <p><img src="../assets/images/icon/fire.png" class="fire"
                                                    alt="fire">Extra 10% off (upto Rs. 10,000*) </p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="mr-3">
                                            <img src="../assets/images/icon/3.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">75% off Store</h5>
                                            <p>No coupon code is required.</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="mr-3">
                                            <img src="../assets/images/icon/6.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Upto 50% off</h5>
                                            <p>Buy popular phones under Rs.20.</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="mr-3">
                                            <img src="../assets/images/icon/5.png" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Beauty store</h5>
                                            <p><img src="../assets/images/icon/currency.png" class="cash"
                                                    alt="curancy"> Flat Rs. 270 Rewards</p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
