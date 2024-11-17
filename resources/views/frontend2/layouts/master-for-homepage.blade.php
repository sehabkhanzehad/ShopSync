@php
    $trendingProduct = \App\Models\Product::orderBy('sold_qty', 'desc')->orderBy('created_at', 'desc')->first();
@endphp
<!DOCTYPE html>
<html lang="en">
@include('frontend2.components.layout.head')

<body class="bg-light ">
    <!-- progress bar -->
    <div id="loader" class="LoadingOverlay d-none">
        <div class="Line-Progress">
            <div class="indeterminate"></div>
        </div>
    </div>

    <!-- loader start -->
    <div class="loader-wrapper">
        <div>
            <img src="{{ asset('assets') }}/images/loader.gif" alt="loader">
        </div>
    </div>
    <!-- loader end -->

    <!--header start-->
    @include('frontend2.components.layout.header-for-homepage')
    <!--header end-->

    @yield('content')

    <!--footer start-->
    @include('frontend2.components.layout.footer')
    <!--footer end-->

    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top End -->

    <!-- Add to cart bar -->
    {{-- <div id="cart_side" class=" add_to_cart bottom ">
        <a href="javascript:void(0)" class="overlay" onclick="closeCart()"></a>
        <div class="cart-inner">
            <div class="cart_top">
                <h3>my cart</h3>
                <div class="close-cart">
                    <a href="javascript:void(0)" onclick="closeCart()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="cart_media">
                <ul class="cart_product">
                    <li>
                        <div class="media">
                            <a href="#">
                                <img alt="" class="mr-3"
                                    src="{{ asset('assets') }}/images/layout-1/product/1.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    <h4>item name</h4>
                                </a>
                                <h4>
                                    <span>1 x $ 299.00</span>
                                </h4>
                            </div>
                        </div>
                        <div class="close-circle">
                            <a href="#">
                                <i class="ti-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <a href="#">
                                <img alt="" class="mr-3"
                                    src="{{ asset('assets') }}/images/layout-1/product/2.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    <h4>item name</h4>
                                </a>
                                <h4>
                                    <span>1 x $ 299.00</span>
                                </h4>
                            </div>
                        </div>
                        <div class="close-circle">
                            <a href="#">
                                <i class="ti-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <a href="#"><img alt="" class="mr-3"
                                    src="{{ asset('assets') }}/images/layout-1/product/3.jpg"></a>
                            <div class="media-body">
                                <a href="#">
                                    <h4>item name</h4>
                                </a>
                                <h4><span>1 x $ 299.00</span></h4>
                            </div>
                        </div>
                        <div class="close-circle">
                            <a href="#">
                                <i class="ti-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="cart_total">
                    <li>
                        <div class="total">
                            <h5>subtotal : <span>$299.00</span></h5>
                        </div>
                    </li>
                    <li>
                        <div class="buttons">
                            <a href="cart.html" class="btn btn-normal btn-xs view-cart">view cart</a>
                            <a href="#" class="btn btn-normal btn-xs checkout">checkout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- Add to cart bar end-->


    <!--Newsletter modal popup start-->
    {{-- <div class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="news-latter">
                        <div class="modal-bg">
                            <div class="offer-content">
                                <div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">×</span></button>
                                    <h2>newsletter</h2>
                                    <p>Subscribe to our website mailling list <br> and get a Offer, Just for you!</p>
                                    <form
                                        action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda"
                                        class="auth-form needs-validation" method="post"
                                        id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                                        target="_blank">
                                        <div class="form-group mx-sm-3">
                                            <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL"
                                                placeholder="Enter your email" required="required">
                                            <button type="submit" class="btn btn-theme btn-normal btn-sm "
                                                id="mc-submit">subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--Newsletter Modal popup end-->


    <!-- Quick-view modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="quickViewModal" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img"><img id="quickViewImage" alt="quick" class="img-fluid ">
                            </div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2 id="productName"></h2>
                                <h3 id="productPrice"></h3>

                                {{-- <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul> --}}
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p id="ProductDetails"></p>
                                </div>

                                {{-- <div class="product-description border-product">
                                    <div class="size-box">
                                        <ul>
                                            <li class="active"><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                        </ul>
                                    </div>
                                    <h6 class="product-title">quantity</h6>
                                    <div class="qty-box">
                                        <div class="input-group"><span class="input-group-prepend"><button
                                                    type="button" class="btn quantity-left-minus" data-type="minus"
                                                    data-field=""><i class="ti-angle-left"></i></button> </span>
                                            <input type="text" name="quantity" class="form-control input-number"
                                                value="1"> <span class="input-group-prepend"><button
                                                    type="button" class="btn quantity-right-plus" data-type="plus"
                                                    data-field=""><i class="ti-angle-right"></i></button></span>
                                        </div>
                                    </div>
                                </div>
                                --}}
                                <div class="product-buttons">
                                    {{-- <a href="#" class="btn btn-normal">add to cart</a> --}}
                                    <a id="viewDetails" class="btn btn-normal">view detail</a>
                                </div>

                                {{-- <form action="{{ route('front.cart.store') }}" method="POST" class="cart_form_home">
                                    <div class="modal-body">
                                        <p id="test_for"></p>
                                        <p id="selected_color"></p>
                                        <div class="variable_info">

                                            <div class="size-box">
                                                <ul id="sizes" class="sizes">
                                                    @foreach ($product->variations as $v)
                                                        @if (!empty($v->size->title))
                                                            <span data-proid="{{ $v->product_id }}"
                                                                data-varprice="{{ $v->sell_price }}"
                                                                data-varsize="{{ $v->size->title }}"
                                                                value="{{ $v->id }}"
                                                                data-varSizeId="{{ $v->size_id }}">
                                                                @if ($v->size->title == 'free')
                                                                    <li class="size"><a>{{ $v->size->title }}</a>
                                                                    </li>
                                                                    <input type="hidden" id="size_value"
                                                                        name="variation_id">
                                                                    <input type="hidden" id="size_variation_id"
                                                                        name="size_variation_id">
                                                                    <input type="hidden" name="pro_price"
                                                                        id="pro_price">
                                                                    <input type="hidden" name="variation_size_id"
                                                                        id="variation_size_id">
                                                                @else
                                                                    <li class="size"><a>{{ $v->size->title }}</a>
                                                                    </li>
                                                                    <input type="hidden" id="size_value"
                                                                        name="variation_id">
                                                                    <input type="hidden" id="size_variation_id"
                                                                        name="size_variation_id">
                                                                    <input type="hidden" name="pro_price"
                                                                        id="pro_price">
                                                                    <input type="hidden" name="variation_size_id"
                                                                        id="variation_size_id">
                                                                @endif
                                                            </span>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>


                                            <div class="colors" id="colors">
                                                @if (!empty($product->prod_color == 'varcolor'))
                                                    @foreach ($product->colorVariations as $v)
                                                        @if (!empty($v->color->code))
                                                            <div class="color"
                                                                style="background: {{ $v->color->code }}"
                                                                data-proid="{{ $v->product_id }}"
                                                                data-colorid="{{ $v->color_id }}"
                                                                data-varcolor="{{ $v->color->name }}"
                                                                value="{{ $v->id }}"
                                                                data-variationColorId="{{ $v->color_id }}">
                                                                <input type="hidden" id="color_val" name="color_id">
                                                                <!--<img src="{{ asset($v->var_images) }}" width="50px" height="50px" /> -->
                                                                <input type="hidden" id="color_value"
                                                                    name="variationColor_id">
                                                                <input type="hidden" id="variation_color_id"
                                                                    name="variation_color_id">
                                                            </div>
                                                        @else
                                                            Color Not Available
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <input type="hidden" id="variation_color" name="variation_color"
                                                        value="default">
                                                    <input type="hidden" id="variation_color_id"
                                                        name="variation_color_id" value="1">
                                                @endif
                                            </div>
                                        </div>
                                        <input type="hidden" name="id">
                                        <input type="hidden" name="variation_id">
                                        <input type="hidden" name="variation_size">
                                        <input type="hidden" name="variation_size_id">
                                        <input type="hidden" name="variation_price">
                                        <input type="hidden" name="variation_color">
                                        <input type="hidden" name="variation_color_id">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="type" value="variable">
                                        <input type="hidden" name="pro_img">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">ক্লোজ</button>
                                        <button type="submit"
                                            class="btn btn-primary">{{ BanglaText('cart_add') }}</button>
                                        <button type="button"
                                            class="btn btn-primary do_order">{{ BanglaText('order') }}</button>
                                    </div>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick-view modal popup end-->

    <!-- Wishlist modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="wishlistModal" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img"><img id="wishlistImage" alt="quick" class="img-fluid ">
                            </div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2 id="wishProductName"></h2>
                                <h3 id="wishProductPrice"></h3>

                                {{-- <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul> --}}
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p id="wishProductDetails"></p>
                                </div>
                                <span id="wishProductStock"></span>
                                {{-- @if ($product->type == 'variable')
                                <h6 id="select_size">Select Size : </h6>
                                @endif

                                @if ($product->type == 'variable')

                                    @if (count($product->variations))
                                        <div class="size-box">
                                            <ul id="sizes" class="sizes">
                                                @foreach ($product->variations as $v)
                                                    @if (!empty($v->size->title))
                                                        <span data-proid="{{ $v->product_id }}"
                                                            data-varprice="{{ $v->sell_price }}"
                                                            data-varsize="{{ $v->size->title }}"
                                                            value="{{ $v->id }}"
                                                            data-varSizeId="{{ $v->size_id }}">
                                                            @if ($v->size->title == 'free')
                                                                <li class="size"><a>{{ $v->size->title }}</a></li>
                                                                <input type="hidden" id="size_value" name="variation_id">

                                                                <input type="hidden" id="size_variation_id"
                                                                    name="size_variation_id">

                                                                <input type="hidden" name="pro_price" id="pro_price">
                                                                <input type="hidden" name="variation_size_id"
                                                                    id="variation_size_id">
                                                            @else
                                                                <li class="size"><a>{{ $v->size->title }}</a></li>
                                                                <input type="hidden" id="size_value" name="variation_id">
                                                                <input type="hidden" id="size_variation_id"
                                                                    name="size_variation_id">
                                                                <input type="hidden" name="pro_price" id="pro_price">
                                                                <input type="hidden" name="variation_size_id"
                                                                    id="variation_size_id">
                                                            @endif
                                                        </span>
                                                    @else
                                                        Size Not Available
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    @else
                                        <input type="hidden" id="size_value" name="variation_id" value="free">
                                        <input type="hidden" name="variation_size_id" id="variation_size_id"
                                            value="1">
                                    @endif
                                @else
                                    <input type="hidden" id="size_value" name="variation_id" value="free">
                                    <input type="hidden" name="variation_size_id" id="variation_size_id"
                                        value="1">
                                @endif --}}

                                {{-- <div class="product-description border-product">
                                    <div class="size-box">
                                        <ul>
                                            <li class="active"><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                        </ul>
                                    </div>
                                   <h6 class="product-title">quantity</h6>
                                       <div class="qty-box">
                                        <div class="input-group"><span class="input-group-prepend"><button
                                                    type="button" class="btn quantity-left-minus" data-type="minus"
                                                    data-field=""><i class="ti-angle-left"></i></button> </span>
                                            <input type="text" name="quantity" class="form-control input-number"
                                                value="1"> <span class="input-group-prepend"><button
                                                    type="button" class="btn quantity-right-plus" data-type="plus"
                                                    data-field=""><i class="ti-angle-right"></i></button></span>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="product-buttons">
                                    <a id="addWishList" class="addWishList btn btn-normal">add to wishlist</a>
                                    <a id="wishViewDetails" class="btn btn-normal">view detail</a>
                                    <input type="hidden" id="wishProductId">
                                    @if (Auth::check())
                                        <input type="hidden" data-user_id = "{{ Auth::user()->id }}"
                                            value="{{ Auth::user()->id }}" name="" id="wishUserId">
                                    @else
                                        <input type="hidden" data-user_id = "0" value="0" name=""
                                            id="wishUserId">
                                    @endif
                                </div>

                                {{-- <form action="{{ route('front.cart.store') }}" method="POST" class="cart_form_home">
                                    <div class="modal-body">
                                        <p id="test_for"></p>
                                        <p id="selected_color"></p>
                                        <div class="variable_info">

                                            <div class="size-box">
                                                <ul id="sizes" class="sizes">
                                                    @foreach ($product->variations as $v)
                                                        @if (!empty($v->size->title))
                                                            <span data-proid="{{ $v->product_id }}"
                                                                data-varprice="{{ $v->sell_price }}"
                                                                data-varsize="{{ $v->size->title }}"
                                                                value="{{ $v->id }}"
                                                                data-varSizeId="{{ $v->size_id }}">
                                                                @if ($v->size->title == 'free')
                                                                    <li class="size"><a>{{ $v->size->title }}</a>
                                                                    </li>
                                                                    <input type="hidden" id="size_value"
                                                                        name="variation_id">
                                                                    <input type="hidden" id="size_variation_id"
                                                                        name="size_variation_id">
                                                                    <input type="hidden" name="pro_price"
                                                                        id="pro_price">
                                                                    <input type="hidden" name="variation_size_id"
                                                                        id="variation_size_id">
                                                                @else
                                                                    <li class="size"><a>{{ $v->size->title }}</a>
                                                                    </li>
                                                                    <input type="hidden" id="size_value"
                                                                        name="variation_id">
                                                                    <input type="hidden" id="size_variation_id"
                                                                        name="size_variation_id">
                                                                    <input type="hidden" name="pro_price"
                                                                        id="pro_price">
                                                                    <input type="hidden" name="variation_size_id"
                                                                        id="variation_size_id">
                                                                @endif
                                                            </span>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>


                                            <div class="colors" id="colors">
                                                @if (!empty($product->prod_color == 'varcolor'))
                                                    @foreach ($product->colorVariations as $v)
                                                        @if (!empty($v->color->code))
                                                            <div class="color"
                                                                style="background: {{ $v->color->code }}"
                                                                data-proid="{{ $v->product_id }}"
                                                                data-colorid="{{ $v->color_id }}"
                                                                data-varcolor="{{ $v->color->name }}"
                                                                value="{{ $v->id }}"
                                                                data-variationColorId="{{ $v->color_id }}">
                                                                <input type="hidden" id="color_val" name="color_id">
                                                                <!--<img src="{{ asset($v->var_images) }}" width="50px" height="50px" /> -->
                                                                <input type="hidden" id="color_value"
                                                                    name="variationColor_id">
                                                                <input type="hidden" id="variation_color_id"
                                                                    name="variation_color_id">
                                                            </div>
                                                        @else
                                                            Color Not Available
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <input type="hidden" id="variation_color" name="variation_color"
                                                        value="default">
                                                    <input type="hidden" id="variation_color_id"
                                                        name="variation_color_id" value="1">
                                                @endif
                                            </div>
                                        </div>
                                        <input type="hidden" name="id">
                                        <input type="hidden" name="variation_id">
                                        <input type="hidden" name="variation_size">
                                        <input type="hidden" name="variation_size_id">
                                        <input type="hidden" name="variation_price">
                                        <input type="hidden" name="variation_color">
                                        <input type="hidden" name="variation_color_id">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="type" value="variable">
                                        <input type="hidden" name="pro_img">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">ক্লোজ</button>
                                        <button type="submit"
                                            class="btn btn-primary">{{ BanglaText('cart_add') }}</button>
                                        <button type="button"
                                            class="btn btn-primary do_order">{{ BanglaText('order') }}</button>
                                    </div>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wishlist modal popup end-->


    <!-- My account bar start-->
    <div id="myAccount" class="add_to_cart right account-bar">
        <a href="javascript:void(0)" class="overlay" onclick="closeAccount()"></a>
        <div class="cart-inner">
            <div class="cart_top">
                <h3>my account</h3>
                <div class="close-cart">
                    <a href="javascript:void(0)" onclick="closeAccount()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <form class="theme-form">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="userEmail" name="email" required
                        placeholder="Email or mobile">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" id="userPassword"
                        placeholder="Enter your password" required>
                </div>

                {{-- <div class="form-group">
                    <input type="checkbox" for="rem" name="remember" id="remember" class=""> &nbsp; <span id = "rem">Remember me</span>
                </div> --}}

                <div class="form-group">
                    <button onclick="login()" class="btn btn-rounded btn-block" type="button">Login</button>
                </div>
                <div>
                    <h5 class="forget-class"><a href="" class="d-block">forget password?</a>
                    </h5>
                    <h6 class="forget-class"><a href="{{ route('front.user-reg') }}" class="d-block">new to
                            store? Signup now</a>
                    </h6>
                </div>
            </form>
        </div>
    </div>
    <!-- Add to account bar end-->


    <!-- Add to wishlist bar -->
    <div id="wishlist_side" class="add_to_cart right">
        <a href="javascript:void(0)" class="overlay" onclick="closeWishlist()"></a>
        <div class="cart-inner">
            <div class="cart_top">
                <h3>my wishlist</h3>
                <div class="close-cart">
                    <a href="javascript:void(0)" onclick="closeWishlist()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="cart_media">
                <ul class="cart_product">
                    <li>
                        <div class="media">
                            <a href="#">
                                <img alt="" class="mr-3"
                                    src="{{ asset('assets') }}/images/layout-1/media-banner/1.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    <h4>item name</h4>
                                </a>
                                <h4>
                                    <span>sm</span>
                                    <span>, blue</span>
                                </h4>
                                <h4>
                                    <span>$ 299.00</span>
                                </h4>
                            </div>
                        </div>
                        <div class="close-circle">
                            <a href="#">
                                <i class="ti-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <a href="#">
                                <img alt="" class="mr-3"
                                    src="{{ asset('assets') }}/images/layout-1/media-banner/2.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    <h4>item name</h4>
                                </a>
                                <h4>
                                    <span>sm</span>
                                    <span>, blue</span>
                                </h4>
                                <h4>
                                    <span>$ 299.00</span>
                                </h4>
                            </div>
                        </div>
                        <div class="close-circle">
                            <a href="#">
                                <i class="ti-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <a href="#"><img alt="" class="mr-3"
                                    src="{{ asset('assets') }}/images/layout-1/media-banner/3.jpg"></a>
                            <div class="media-body">
                                <a href="#">
                                    <h4>item name</h4>
                                </a>
                                <h4>
                                    <span>sm</span>
                                    <span>, blue</span>
                                </h4>
                                <h4><span>$ 299.00</span></h4>
                            </div>
                        </div>
                        <div class="close-circle">
                            <a href="#">
                                <i class="ti-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="cart_total">
                    <li>
                        <div class="total">
                            <h5>subtotal : <span>$299.00</span></h5>
                        </div>
                    </li>
                    <li>
                        <div class="buttons">
                            <a href="wishlist.html" class="btn btn-normal btn-block  view-cart">view wislist</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Add to wishlist bar end-->

    <!-- add to  setting bar  start-->
    <div id="mySetting" class="add_to_cart right">
        <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
        <div class="cart-inner">
            <div class="cart_top">
                <h3>my setting</h3>
                <div class="close-cart">
                    <a href="javascript:void(0)" onclick="closeSetting()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="setting-block">
                <div>
                    <h5>language</h5>
                    <ul>
                        <li><a href="#">english</a></li>
                        <li><a href="#">french</a></li>
                    </ul>
                    <h5>currency</h5>
                    <ul>
                        <li><a href="#">uro</a></li>
                        <li><a href="#">rupees</a></li>
                        <li><a href="#">pound</a></li>
                        <li><a href="#">doller</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Add to setting bar end-->


    <!-- notification product -->
    <div class="product-notification" id="dismiss">
        <span onclick="dismiss();" class="close" aria-hidden="true">×</span>
        <a href="{{ route('front.product.show', [$trendingProduct->id]) }}">
            <div class="media">
                <img class="mr-2" src="{{ asset('uploads/custom-images2/' . $trendingProduct->thumb_image) }}"
                    alt="Generic placeholder image">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">Latest trending</h5>{{ $trendingProduct->name }}
                    <br>
                    @if (empty($trendingProduct->offer_price))
                        <div class="price">
                            <div class="price">
                                ৳ {{ $trendingProduct->price }}
                            </div>
                        </div>
                    @else
                        <div class="check-price">
                            ৳ {{ $trendingProduct->price }}
                        </div>
                        <div class="price">
                            <div class="price">
                                ৳ {{ $trendingProduct->offer_price }}
                            </div>
                        </div>
                    @endif
                </div>


            </div>
        </a>
    </div>
    <!-- notification product -->

    <!-- latest jquery-->
    {{-- <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script> --}}
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>


    <!-- script -->
    <script src="{{ asset('assets/js/include/config.js') }}"></script>
    <script src="{{ asset('assets/js/include/axios.min.js') }}"></script>
    <script src="{{ asset('assets/js/include/toastify-js.js') }}"></script>
    <script src="{{ asset('assets/js/include/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    @stack('js')


    <script>
        $("#checkout-form").on("submit", function(e) {
            e.preventDefault();

            var form = $(this);
            var url = form.attr("action");

            $.ajax({
                url: url,
                type: "POST",
                data: form.serialize(),
                success: function(response) {
                    if (response.status) {
                        // Clear the cart or perform other actions

                        // Show success message
                        showToasterMessage(response.msg, "success");

                        // Redirect to a specific URL if needed
                        window.location.href = response.url;
                    } else {
                        // Show error message
                        showToasterMessage(response.msg, "error");
                    }
                },
                error: function(error) {
                    // Show error message
                    showToasterMessage("An error occurred. Please try again later.", "error");
                }
            });
        });
    </script>



    <script type="text/javascript">
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            // ... other AJAX settings ...
        });
    </script>

    <script>
        $(document).on('click', '.remove-item', function(e) {
            e.preventDefault();

            let id = $(this).data('id');
            let url = '{{ route('front.cart.destroy', ['id' => ':id']) }}'; // Adjust the route name as needed

            url = url.replace(':id', id); // Replace the placeholder with the actual id

            $.ajax({
                type: 'GET', // Use GET or POST based on your route definition
                url: url,
                success: function(res) {
                    if (res.status) {
                        toastr.success(res.msg);
                        window.location.reload(); // Refresh the page or update the cart UI
                    } else {
                        // toastr.error(res.msg);
                        errorToast(res.msg);
                    }
                },
                error: function(xhr, status, error) {
                    // toastr.error('An error occurred while processing your request.');
                    errorToast('An error occurred while processing your request.');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {

            $(document).on('click', '.inc', function(e) {
                e.preventDefault();
                let id = $(this).data('id');
                let exist_qty = $(this).data('exist_qty');
                let quantityInput = $('.quantity-value[data-id="' + id + '"]');
                let newQuantity = parseInt(quantityInput.val()) + 1;
                if (exist_qty < newQuantity) {
                    // toastr.error('Stock Not Available!!!');
                    errorToast('Stock Not Available!!!');
                    return false;
                } else {
                    quantityInput.val(newQuantity);
                    updateSubtotal(id, newQuantity);
                }
            });

            $(document).on('click', '.dec', function(e) {
                e.preventDefault();
                let id = $(this).data('id');
                let quantityInput = $('.quantity-value[data-id="' + id + '"]');
                let newQuantity = parseInt(quantityInput.val()) - 1;
                if (newQuantity >= 1) {
                    quantityInput.val(newQuantity);
                    updateSubtotal(id, newQuantity);
                }
            });

            $(document).on('click', '.remove-item', function(e) {
                e.preventDefault();
                let id = $(this).data('id');
                $(this).closest('tr').remove();
                updateSubtotal(id, 0);
            });

            // Add event listener for the "Update" button
            $(document).on('click', '.update-cart', function(e) {
                e.preventDefault();
                let id = $(this).data('id');
                let quantityInput = $('.quantity-value[data-id="' + id + '"]');
                let newQuantity = parseInt(quantityInput.val());

                $.ajax({
                    type: 'POST',
                    url: '{{ route('front.cart.update', ['id' => '__id__']) }}'.replace('__id__',
                        id),
                    data: {
                        _token: '{{ csrf_token() }}',
                        quantity: newQuantity
                    },
                    success: function(response) {
                        // Update subtotal
                        let subtotal = response.totalAmount.toFixed(2);
                        $('#subtotal-' + id).text(subtotal);

                        // Update total amount
                        $('#total-amount').text(response.totalAmount.toFixed(2));
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        // Handle error response, if needed
                    }
                });
            });

            function updateSubtotal(id, quantity) {
                let price = parseFloat($('#subtotal-' + id).data('price'));
                let subtotal = price * quantity;
                $('#subtotal-' + id).text(subtotal.toFixed(2));
                updateCart(id, quantity);
            }

            function updateTotalAmount() {
                let totalAmount = 0;
                $('.subtotal').each(function() {
                    totalAmount += parseFloat($(this).text());
                });
                $('#total-amount').text(totalAmount.toFixed(2));
            }

            function updateCart(id, quantity) {
                $.ajax({
                    type: 'POST',
                    url: '{{ route('front.cart.update', ['id' => '__id__']) }}'.replace('__id__', id),
                    data: {
                        _token: '{{ csrf_token() }}',
                        quantity: quantity
                    },
                    success: function(response) {
                        window.location.reload();
                        // Handle success response, if needed
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        // Handle error response, if needed
                    }
                });
            }
        });
    </script>




    @yield('script')

    <!-- slick js-->
    <script src="{{ asset('assets/js/slick.js') }}"></script>

    <!-- popper js-->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>

    <!-- Timer js-->
    <script src="{{ asset('assets/js/menu.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap-notify.min.js') }}"></script>

    <!-- Theme js-->
    <script src="{{ asset('assets/js/slider-animat-three.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/modal.js') }}"></script>
</body>

</html>
