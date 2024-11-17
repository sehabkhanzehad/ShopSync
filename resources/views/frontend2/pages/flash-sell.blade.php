@extends('frontend2.layouts.common-master')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>Flash Sell</h2>
                            <ul>
                                <li><a href="{{ route('front.home') }}">home</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a href="{{ route('front.flash-sell') }}">Flash Sell</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->




    <!--no slider start-->
    <section class="section-big-py-space ratio_asos bg-light">
        <div class="custom-container">
            <div class="row">
                <div class="col">
                    <div class="no-slider row product">
                        @forelse($flashSell  as $key => $product)
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <a href="{{ route('front.product.show', [$product->product->id]) }}">

                                        <div class="product-front">
                                            <img src="{{ asset('uploads/custom-images2/' . $product->product->thumb_image) }}"
                                                class="img-fluid" alt="product">
                                        </div>
                                        <div class="product-back">
                                            <img src="{{ asset('uploads/custom-images2/' . $product->product->thumb_image) }}"
                                                class="img-fluid" alt="product">
                                        </div>
                                    </a>
                                    <div class="product-icon">
                                        {{-- <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                            <i class="ti-bag"></i>
                                        </button> --}}
                                        <a style="cursor: pointer" class="openWishlist"
                                            data-wish_pro_id="{{ $product->product->id }}" title="Add to Wishlist">
                                            <i class="ti-heart" aria-hidden="true"></i>
                                        </a>
                                        <a style="cursor: pointer" id="" class="quickView" title="Quick View"
                                            data-product_id="{{ $product->product->id }}"> <i class="ti-search"
                                                aria-hidden="true"></i>
                                        </a>

                                        {{-- <a href="compare.html" title="Compare">
                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                        </a> --}}
                                    </div>

                                    @if ($product->product->is_free_shipping > 0)
                                        <div class="new-label">
                                            <div>{{ BanglaText('free') }}</div>
                                        </div>
                                    @endif

                                    @if ($product->product->offer_price > 0)
                                        <div class="on-sale">
                                            {{ BanglaText('offer') }}
                                        </div>
                                    @endif


                                </div>
                                <div class="product-detail">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="{{ route('front.product.show', [$product->product->id]) }}">
                                                <h6 class="price-title">
                                                    {{ \Illuminate\Support\Str::limit($product->product->name, 30) }}
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            @if (empty($product->product->offer_price))
                                                <div class="price">

                                                    <div class="price">৳{{ $product->product->price }}</div>
                                                </div>
                                            @else
                                                <div class="check-price">৳{{ $product->product->price }}</div>
                                                <div class="price">

                                                    <div class="price">৳{{ $product->product->offer_price }}</div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product">
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{ asset('uploads/custom-images2/' . $product->product->thumb_image) }}"
                                                    class="img-fluid  " alt="product">
                                            </div>
                                        </div>
                                        <div class="product-detail detail-center ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="">
                                                        <h6 class="price-title">

                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    @if (empty($product->product->offer_price))
                                                        <div class="price">৳{{ $product->product->price }}</div>
                                                    @else
                                                        <div class="check-price">৳{{ $product->product->price }}</div>
                                                        <div class="price">৳{{ $product->product->offer_price }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="icon-detail">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag"></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view"
                                                    title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        @empty
                            <strong class="text-center text-danger">No products are available</strong>
                        @endforelse


                        {{-- <div class="product-box">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <img src="../assets/images/layout-1/product/2.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-back">
                                    <img src="../assets/images/layout-1/product/a2.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-icon">
                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                        <i class="ti-bag"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </a>

                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="detail-title">
                                    <div class="detail-left">
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="">
                                            <h6 class="price-title">
                                                reader will be distracted.
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="detail-right">
                                        <div class="check-price">
                                            $ 56.21
                                        </div>
                                        <div class="price">
                                            <div class="price">
                                                $ 24.05
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <img src="../assets/images/layout-1/product/3.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-back">
                                    <img src="../assets/images/layout-1/product/a3.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-icon">
                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                        <i class="ti-bag"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </a>

                                </div>
                                <div class="new-label">
                                    <div>new</div>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="detail-title">
                                    <div class="detail-left">
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="">
                                            <h6 class="price-title">
                                                reader will be distracted.
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="detail-right">
                                        <div class="check-price">
                                            $ 56.21
                                        </div>
                                        <div class="price">
                                            <div class="price">
                                                $ 24.05
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <img src="../assets/images/layout-1/product/4.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-back">
                                    <img src="../assets/images/layout-1/product/a4.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-icon">
                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                        <i class="ti-bag"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </a>

                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="detail-title">
                                    <div class="detail-left">
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="">
                                            <h6 class="price-title">
                                                reader will be distracted.
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="detail-right">
                                        <div class="check-price">
                                            $ 56.21
                                        </div>
                                        <div class="price">
                                            <div class="price">
                                                $ 24.05
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <img src="../assets/images/layout-1/product/5.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-back">
                                    <img src="../assets/images/layout-1/product/a5.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-icon">
                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                        <i class="ti-bag"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </a>

                                </div>
                                <div class="new-label">
                                    <div>new</div>
                                </div>
                                <div class="on-sale">
                                    on sale
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="detail-title">
                                    <div class="detail-left">
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="">
                                            <h6 class="price-title">
                                                reader will be distracted.
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="detail-right">
                                        <div class="check-price">
                                            $ 56.21
                                        </div>
                                        <div class="price">
                                            <div class="price">
                                                $ 24.05
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <img src="../assets/images/layout-1/product/1.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-back">
                                    <img src="../assets/images/layout-1/product/a1.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-icon">
                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                        <i class="ti-bag"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="new-label">
                                    <div>new</div>
                                </div>
                                <div class="on-sale">
                                    on sale
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="detail-title">
                                    <div class="detail-left">
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="">
                                            <h6 class="price-title">
                                                reader will be distracted.
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="detail-right">
                                        <div class="check-price">
                                            $ 56.21
                                        </div>
                                        <div class="price">
                                            <div class="price">
                                                $ 24.05
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <img src="../assets/images/layout-1/product/2.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-back">
                                    <img src="../assets/images/layout-1/product/a2.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-icon">
                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                        <i class="ti-bag"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </a>

                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="detail-title">
                                    <div class="detail-left">
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="">
                                            <h6 class="price-title">
                                                reader will be distracted.
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="detail-right">
                                        <div class="check-price">
                                            $ 56.21
                                        </div>
                                        <div class="price">
                                            <div class="price">
                                                $ 24.05
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <img src="../assets/images/layout-1/product/3.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-back">
                                    <img src="../assets/images/layout-1/product/a3.jpg" class="img-fluid" alt="product">
                                </div>
                                <div class="product-icon">
                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                        <i class="ti-bag"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </a>

                                </div>
                                <div class="new-label">
                                    <div>new</div>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="detail-title">
                                    <div class="detail-left">
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="">
                                            <h6 class="price-title">
                                                reader will be distracted.
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="detail-right">
                                        <div class="check-price">
                                            $ 56.21
                                        </div>
                                        <div class="price">
                                            <div class="price">
                                                $ 24.05
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--no slider end-->
@endsection
