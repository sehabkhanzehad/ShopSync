@extends('frontend2.layouts.common-master')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>search</h2>
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a href="#">search</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- product section start -->
    <section class="section-big-py-space ratio_asos bg-light">
        <div class="custom-container">
            <div class="row search-product related-pro1">
                @forelse($products  as $key => $product)
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="product">
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="{{ asset('uploads/custom-images2/' . $product->thumb_image) }}"
                                            class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="{{ asset('uploads/custom-images2/' . $product->thumb_image) }}"
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
                                            <a href="{{ route('front.product.show', [$product->id]) }}">
                                                <h6 class="price-title">
                                                    {{ \Illuminate\Support\Str::limit($product->name, 30) }}
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            @if (empty($product->offer_price))
                                                <div class="price">৳{{ $product->price }}</div>
                                            @else
                                                <div class="check-price">৳{{ $product->price }}</div>
                                                <div class="price">৳{{ $product->offer_price }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="icon-detail">
                                        {{-- <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                            <i class="ti-bag"></i>
                                        </button> --}}
                                        <a style="cursor: pointer" class="openWishlist"
                                            data-wish_pro_id="{{ $product->id }}" title="Add to Wishlist">
                                            <i class="ti-heart" aria-hidden="true"></i>
                                        </a>
                                        <a style="cursor: pointer" id="" class="quickView" title="Quick View"
                                            data-product_id="{{ $product->id }}"> <i class="ti-search"
                                                aria-hidden="true"></i>
                                        </a>
                                        {{-- <a href="compare.html" title="Compare">
                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                        </a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div align="center">
                        <strong class="text-center text-danger">No products are available</strong>
                    </div>
                @endforelse
                {{-- <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="product">
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="../assets/images/layout-2/product/2.jpg" class="img-fluid  "
                                            alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="../assets/images/layout-2/product/a2.jpg" class="img-fluid  "
                                            alt="product">
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
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="product">
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="../assets/images/layout-2/product/3.jpg" class="img-fluid  "
                                            alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="../assets/images/layout-2/product/a3.jpg" class="img-fluid  "
                                            alt="product">
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
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="product">
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="../assets/images/layout-2/product/4.jpg" class="img-fluid  "
                                            alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="../assets/images/layout-2/product/a4.jpg" class="img-fluid  "
                                            alt="product">
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
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="product">
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="../assets/images/layout-2/product/5.jpg" class="img-fluid  "
                                            alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="../assets/images/layout-2/product/a5.jpg" class="img-fluid  "
                                            alt="product">
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
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="product">
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="../assets/images/layout-2/product/6.jpg" class="img-fluid  "
                                            alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="../assets/images/layout-2/product/a6.jpg" class="img-fluid  "
                                            alt="product">
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
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="product">
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="../assets/images/layout-2/product/7.jpg" class="img-fluid  "
                                            alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="../assets/images/layout-2/product/a7.jpg" class="img-fluid  "
                                            alt="product">
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
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="product">
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="../assets/images/layout-2/product/8.jpg" class="img-fluid  "
                                            alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="../assets/images/layout-2/product/a8.jpg" class="img-fluid  "
                                            alt="product">
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
            </div>
        </div>
    </section>
    <!-- product section end -->
@endsection
