@extends('frontend.app')
@section('title', 'Home')
@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')


    <div class="main-wrapper" style="margin-top: 25px;">
        <!-- Banner Section Start  -->
        <div class="w-100">
            <style>
                .p-4 {
                    padding: 0.3rem !important;
                }

                @media (min-width: 1024px) {
                    .prodCatcus {
                        background: #F85606;
                        color: #ffffff;
                        border-radius: 0px;
                        border-top-right-radius: 70px;
                        width: 16%;
                        padding: 0px;
                        margin: 0px;
                    }

                    .carousel-item img {
                        height: 400px;
                    }

                    /*.product-item {*/
                    /*    width: 205px !important;*/
                    /*}*/
                    .select2-container--default .select2-selection--single {
                        height: 40px;
                    }

                    .select2-container--default .select2-selection--single .select2-selection__rendered {
                        line-height: 40px;
                        font-size: 13px;
                    }

                    .select2-container--default .select2-selection--single .select2-selection__arrow {
                        top: 7px;
                    }

                    .select2-container {
                        width: 100% !important;
                    }

                    .prd_img {
                        margin-bottom: -20px !important;
                    }
                }

                @media only screen and (min-width: 328px) and (max-width: 470px) {

                    .product-box .product-item .label_product {
                        width: 45% !important;
                    }

                    .product-box .product-item .label_product span {
                        font-size: 11px !important;
                        margin-top: 4px;
                    }
                }

                @media only screen and (min-width: 588px) and (max-width: 670px) {

                    .product-box .product-item .label_product {
                        width: 45% !important;
                    }

                    .product-box .product-item .label_product span {
                        font-size: 11px !important;
                        margin-top: 4px;
                    }
                }

                @media only screen and (min-width: 250px) and (max-width: 319px) {
                    .prodCatcus {
                        background: #F85606;
                        color: #ffffff;
                        border-radius: 0px;
                        border-top-right-radius: 70px;
                        width: 24%;
                        padding: 0px;
                        margin: 0px;
                    }

                    .col-lg-3 {
                        width: 100% !important;
                        margin-left: 0% !important;
                    }

                    .col-lg-9 {
                        padding-right: 0px !important;
                    }

                    .select2-container {
                        width: 70% !important;
                    }

                    .left_side_img img {
                        height: auto !important;
                    }

                    .left_side_img {
                        display: none
                    }

                    .prd_img {
                        margin-bottom: -20px !important;
                    }

                }

                @media only screen and (min-width: 367px) and (max-width: 385px) {
                    .semi {
                        font-size: 13px !important;
                    }
                }

                @media only screen and (min-width: 320px) and (max-width: 360px) {
                    .feature-cat .category img {
                        height: 75px !important;
                        width: 253px !important;
                        border-radius: 8px;
                    }

                    /*    .p-4 {*/
                    /*    padding: 0.3rem !important;*/
                    /*}*/

                }

                @media only screen and (min-width: 361px) and (max-width: 375px) {

                    .feature-cat .category img {
                        height: 84px !important;
                        width: 253px !important;
                        border-radius: 8px;
                    }


                    #banner-slider .carousel-inner img {
                        height: 180px !important;
                    }

                    .feature-cat .category p {
                        min-height: 30px !important;
                        margin-bottom: 0px !important;
                    }

                    .feature-cat .p-4 {
                        /*padding: 0.5rem !important;*/
                    }

                    .category {
                        height: 100% !important;
                    }

                    .product_content a {
                        padding-top: 6% !important;
                        font-size: 12px !important;
                    }

                    .prodCatcus {
                        background: #F85606;
                        color: #ffffff;
                        border-radius: 0px;
                        border-top-right-radius: 70px;
                        width: 56%;
                        padding: 0px;
                        margin: 0px;
                    }

                    .col-lg-3 {
                        width: 100% !important;
                        margin-left: 0% !important;
                    }

                    .col-lg-9 {
                        padding-right: 0px !important;
                    }

                    .select2-container {
                        width: 70% !important;
                    }

                    .left_side_img img {
                        height: auto !important;
                    }

                    .primcusImg {
                        /*margin-left: 15% !important;*/
                    }

                    .seccusImg {
                        /*margin-left: 15% !important;*/
                    }

                    .product_content {
                        margin-top: 0% !important;
                    }

                    .bg-orange {
                        width: 40% !important;
                        height: 33px !important;
                        font-size: 14px !important;
                    }

                    .slick-next .slick-arrow {
                        margin-top: -14px !important;
                    }

                    header img {
                        height: 70px;
                        width: 220px;
                        padding-left: 0;
                    }

                    .left_side_img {
                        display: none
                    }

                }

                @media only screen and (min-width: 376px) and (max-width: 575px) {

                    .feature-cat .category img {
                        height: 100px !important;
                        width: 253px !important;
                        border-radius: 8px;
                    }


                    #banner-slider .carousel-inner img {
                        height: 230px !important;
                    }

                    .feature-cat .category p {
                        min-height: 30px !important;
                        /*margin-bottom: 0px !important;*/
                    }

                    .feature-cat .p-4 {
                        /*padding: 0.5rem !important;*/
                    }

                    .category {
                        height: 100% !important;
                    }

                    .prodCatcus {
                        background: #F85606;
                        color: #ffffff;
                        border-radius: 0px;
                        border-top-right-radius: 70px;
                        width: 56%;
                        padding: 0px;
                        margin: 0px;
                    }

                    .col-lg-3 {
                        width: 100% !important;
                        margin-left: 0% !important;
                    }

                    .col-lg-9 {
                        padding-right: 0px !important;
                    }

                    .select2-container {
                        width: 70% !important;
                    }

                    .left_side_img img {
                        height: auto !important;
                    }

                    .prd_prc_bx {
                        margin-top: 1%;
                    }

                    .left_side_img {
                        display: none
                    }

                    .prd_img {
                        margin-bottom: -20px !important;
                    }

                    .primcusImg {
                        margin-left: 0%;
                    }

                    .product_content a {
                        padding-top: 3% !important;
                        font-size: 12px !important;
                    }

                }

                @media only screen and (min-width: 376px) and (max-width: 379px) {

                    .primcusImg {
                        /*margin-left: 15%;*/
                    }
                }

                @media only screen and (min-width: 768px) and (max-width: 992px) {

                    .primcusImg {
                        /*margin-left: 15%;*/
                    }

                    .left_side_img img {
                        display: none !important;
                    }
                }

                @media only screen and (min-width: 576px) and (max-width: 579px) {
                    .left_side_img img {
                        display: none;
                    }
                }

                @media only screen and (min-width: 580px) and (max-width: 768px) {
                    .left_side_img img {
                        display: none;
                    }
                }

                @media only screen and (min-width: 576px) and (max-width: 991px) {
                    .prodCatcus {
                        background: #F85606;
                        color: #ffffff;
                        border-radius: 0px;
                        border-top-right-radius: 70px;
                        width: 24%;
                        padding: 0px;
                        margin: 0px;
                    }

                    .col-lg-3 {
                        width: 100% !important;
                        margin-left: 0% !important;
                    }

                    .col-lg-9 {
                        padding-right: 0px !important;
                    }

                    .select2-container {
                        width: 60% !important;
                    }

                    .left_side_img img {
                        height: auto !important;
                    }

                    .prd_img {
                        margin-bottom: -20px !important;
                    }

                }

                @media only screen and (min-width: 992px) and (max-width: 1348px) {
                    .prodCatcus {
                        background: #F85606;
                        color: #ffffff;
                        border-radius: 0px;
                        border-top-right-radius: 70px;
                        width: 24%;
                        padding: 0px;
                        margin: 0px;
                    }

                    .col-lg-3 {
                        width: 24% !important;
                        margin-left: 1% !important;
                    }

                    .col-lg-9 {
                        width: 75% !important;
                        padding-right: 0px !important;
                    }
                }

                @media only screen and (min-width: 1401px) and (max-width: 1500px) {}

                @media only screen and (min-width: 378px) and (max-width: 412px) {
                    .bg-orange {
                        font-size: 8px !important;
                    }

                    .prd_prc_bx {
                        padding-bottom: 6px !important;
                        /*margin-top:10% !important;*/
                    }


                }

                .product-item {
                    transition: box-shadow 0.5s !important;
                }

                .product-item:hover {
                    box-shadow: 0px 2px 13px -3px gray !important;
                }

                .category {
                    /*box-shadow: 0px 2px 13px -3px gray !important;*/
                }

                .owl-dot .active {
                    visibility: hidden;
                }

                .owl-dot {
                    visibility: hidden;
                }

                .sizes .size.active {
                    background: #1F8B40;
                    color: white;
                    font-weight: bold;
                }

                .sizes .size {
                    padding: 5px;
                    margin: 5px;
                    border: 1px solid #FE9017;
                    width: auto;
                    text-align: center;
                    cursor: pointer;
                    min-width: 45px;
                    display: inline-block;
                }

                .colors .color {
                    padding: 5px;
                    margin: 5px;
                    border: 1px solid #FE9017;
                    width: auto;
                    text-align: center;
                    cursor: pointer;
                    display: inline-block;
                    height: 35px;
                    width: 35px;
                }

                .colors .color.active {
                    background: #0d6efd;
                    color: white;
                    font-weight: bold;
                    padding: 6px;
                    border: 4px solid white;
                    outline: 2px solid red;
                }

                .category {
                    background: #97bdf2;
                }

                .category:hover {
                    background: linear-gradient(90deg, #002f6c, #00c8ff) !important;
                }

                .category:hover p {
                    color: #fff;
                }

                .category p {
                    color: #000;
                }
            </style>
            <div class="row w-100 ms-0" style="width: 96% !important;margin: 0 auto !important;">
                <div class="col-lg-9 col-12 h-100" style="padding-left: 0px;">
                    <div id="banner-slider" class="carousel slide" data-bs-ride="true">
                        @if (!empty($slider))
                            <div class="carousel-indicators">
                                @foreach ($slider as $index => $sl)
                                    <button type="button" data-bs-target="#banner-slider"
                                        data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"
                                        aria-label="Slide 1"></button>
                                @endforeach
                            </div>
                            <div class="carousel-inner">
                                @foreach ($slider as $index => $sl)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <img src="{{ asset($sl->image) }}" class="d-block w-100" alt="Slider Image">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#banner-slider"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#banner-slider"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        @else
                            <strong class="text-center text-danger">No Sliders are Available</strong>
                        @endif
                    </div>
                </div>
                <div class="col-lg-3 col-12 p-0" style="flex: 0 0 auto;width: 24%;margin-left: 1%;">
                    <div class="banner_sidebar">

                        <div class="col-12 left_side_img" style="box-shadow: 0px 0px 5px rgba(0, 113, 220, 0.15);">
                            <a href="{{ $about->title_three }}"><img src="{{ asset($about->video_background) }}"
                                    style="height: 395px;" alt="" class="img-fluid w-100"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="slider-bottom   mt-4 border-1 rounded-5 bg-white text-center ">
                    <p class="">
                        <marquee style="margin-top: 6px;font-size: 14px;" behavior="" direction="">
                            {{ $about->description_three }}</marquee>
                    </p>
                </div>
            </div>


        </div>
        <!-- Banner Section End  -->
        <!-- Categories Start -->

        @if ($feateuredCategories->count())
            <section class="my-lg-5" style="margin-top: 0px !important;">
                <div class="container-fluid p-0" style="">
                    <div class="text-center">
                        <h2 style="margin:0px"><strong>Featured Category</strong></h2>
                    </div>
                    <div class="container-fluid p-3 py-3 bg-white">
                        <div class="container-fluid p-1 bg-muted">
                            <div class="row feature-cat px-3">
                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        @forelse($feateuredCategories as $key => $item)
                                            <div class="col-lg-2 col-lg-feaCat col-md-2 col-sm-4  col-4 my-1 p-1">
                                                <a
                                                    href="{{ route('front.subcategory', [
                                                        'type' => 'subcategory',
                                                        'slug' => $item->category->slug,
                                                    ]) }}">
                                                    <div class="category text-center p-4 rounded-3">
                                                        @if (!empty($item->category->slug))
                                                            <img src="{{ asset('uploads/custom-images2/' . $item->category->image) }}"
                                                                alt="" class="img-fluid">
                                                            <p class="pt-3 mb-0 font-14 bold">{{ $item->category->name }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                </a>
                                            </div>
                                        @empty
                                            <strong>No Categories are Available!</strong>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @else
        @endif
        <!-- Categories End -->

        <!-- Product Sliders Start  -->

        <!--Top Brands Start-->
        @if ($brands->count())
            <section class="brands mt-lg-5 mt-3 mb-5">
                <div class="container" style="max-width: 1315px !important">
                    <div class="title-curve-box">
                        <div class="title-curve">
                            <h4 class="title text-light bold">Top Brands</h4>
                        </div>
                    </div>
                    <div class="shadow">
                        <div class="brand-slider">
                            @forelse($brands as $key => $brand)
                                <div class="single_brand ">
                                    @if (!empty($brand->slug))
                                        <a href="{{ url('/brand-product/' . $brand->slug) }}"><img
                                                src="{{ $brand->logo }}" alt="" class="img-fluid"></a>
                                    @endif
                                </div>
                            @empty
                                <div align="center">
                                    <strong class="text-center text-danger">No Brands are available</strong>
                                </div>
                            @endforelse


                        </div>
                    </div>
                </div>
            </section>
        @else
        @endif
        <!--Top Brands End-->

        <!--Flash Shell start-->
        @if ($flashSell->count())
            <!--background:  linear-gradient(120deg, #2e4f84 -20%, #080522 100%) !important;-->
            <div class="bg-gradient container-fluid"
                style="background: linear-gradient(90deg, #002f6c, #00c8ff) !important;">
                <div class="col-12 product-header">
                    <div class="section_title text-light"">
                        <a href="{{ route('front.flash-sell') }}" style="color: #218A41;">
                            <h4 class="p-1 m-0 prodCatcus" style="text-align:center">Flash Sell</h4>
                        </a>
                        <!--<a href="{{ route('front.flash-sell') }}" -->
                        <!--   style="float: right; -->
           <!--          text-decoration: none; -->
           <!--          background-color: #F85606; -->
           <!--          color: white; -->
           <!--          padding: 5px 10px; -->
           <!--          border-radius: 0px 22px; -->
           <!--          display: inline-block; -->
           <!--          margin-top: -35px;">-->
                        <!--     See More-->
                        <!-- </a>       -->
                    </div>
                </div>
            </div>
        @else
        @endif

        @if (count($flashSell))
            <div class="container-fluid p-0">
                <div class="product-box">
                    <div class="owl-carousel product_slider_sell">
                        @forelse($flashSell as $key => $sale)
                            <div class="product-item" style="">
                                <div class="product_thumb bg-white prd_img" style="">
                                    @if (!empty($sale->product->id))
                                        <a class="primary_img "
                                            href="{{ route('front.product.show', [$sale->product->id]) }}"><img
                                                src="{{ asset('uploads/custom-images2/' . $sale->product->thumb_image) }}"
                                                class="primcusImg" alt=""></a>
                                        <a class="secondary_img "
                                            href="{{ route('front.product.show', [$sale->product->id]) }}"><img
                                                src="{{ asset('uploads/custom-images2/' . $sale->product->thumb_image) }}"
                                                class="seccusImg" alt=""></a>
                                    @endif

                                    @if ($sale->product->offer_price > 0)
                                        <div class="label_product" style="width: 102px;">
                                            <span class="label_sale"
                                                style="padding-top: 2px;">{{ BanglaText('offer') }}</span>
                                        </div>
                                    @endif
                                    @if ($sale->product->is_free_shipping > 0)
                                        <div class="label_product"
                                            style="width: 102px; background:#3276B1; left: 0%; border-radius: 5px 30px 30px 5px">
                                            <span class="label_sale"
                                                style="padding-top: 2px;">{{ BanglaText('free') }}</span>
                                        </div>
                                    @endif

                                </div>
                                <div class="product_content" style="border-top:3px solid #EDEDEF; margin-top: 10%;">
                                    <h4 class="ps-1" style="height: 40px;text-align: center;">
                                        @if (!empty($sale->product->id))
                                            <a href="{{ route('front.product.show', [$sale->product->id]) }}"
                                                class="font-14" style="font-size:14px">
                                                {{ \Illuminate\Support\Str::limit($sale->product->name, 35) }}
                                            </a>
                                        @endif
                                    </h4>
                                    <div class="subText"
                                        data-reactid=".1n7kkwy0qp6.b.2.0.0.0.0.2.5.1.0:$14822_Grocery.0.2.3">
                                        <!--@if ($sale->product->qty > 0)
    -->
                                        <!--<span>{{ $sale->product->weight }} {{ $sale->product->measure }}</span>-->
                                    <!--@else-->
                                        <!--<strong class="text-danger">Stock not available!</strong>-->
                                        <!--
    @endif-->
                                    </div>
                                    <div class="price_box ps-1 justify-content-center prd_prc_bx"
                                        style="padding-bottom: 6px;">
                                        @if (empty($sale->product->offer_price))
                                            <span class="current_price">{{ $sale->product->price }} Tk</span>
                                        @else
                                            <span class="current_price">{{ $sale->product->offer_price }} Tk</span>
                                            <span class="old_price">{{ $sale->product->price }} Tk</span>
                                        @endif
                                    </div>
                                    <div class="rounded-0 bg-muted p-2 d-flex justify-content-between">
                                        @if ($sale->product->type == 'variable' || $sale->product->prod_color == 'varcolor')
                                            <a href="{{ route('front.product.show', [$sale->product->id]) }}"
                                                style="color: white; font-size: 16px;background: linear-gradient(90deg, #002f6c, #00c8ff) !important; border: solid;width: 100%;padding-top: 4%;"
                                                class="btn btn-sm btn-warning semi ">
                                                <i class="fas fa-shopping-cart"></i> &ensp; {{ BanglaText('order') }}
                                            </a>
                                        @else
                                            <a href="{{ route('front.check.single', ['product_id' => $sale->product->id]) }}"
                                                style="color: white; font-size: 16px;background: linear-gradient(90deg, #002f6c, #00c8ff) !important; border: solid;width: 100%;padding-top: 4%;"
                                                class="btn btn-sm btn-warning semi buy-now"
                                                data-price="{{ $sale->product->price }}"
                                                data-offerprice="{{ $sale->product->offer_price }}"
                                                data-url="{{ route('front.cart.store') }}">
                                                <i class="fas fa-shopping-cart"></i> &ensp; {{ BanglaText('order') }}

                                            </a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        @empty
                            <div align="center">
                                <strong class="text-center text-danger">No products are available</strong>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        @else
        @endif

        <!--Flash Shell End-->





        <!-- Product Sliders Start  -->


        @if (count($popularProducts))

            @foreach ($popularProducts as $categoryId => $products)
                <div class="bg-gradient container-fluid"
                    style="background: linear-gradient(90deg, #002f6c, #00c8ff) !important;">
                    <div class="col-12 product-header">
                        <div class="section_title text-light">
                            @if (!empty($products->first()->category->slug))
                                <a href="{{ url('shop', $products->first()->category->slug) }}" style="color: #218A41;">
                                    <h4 class="p-1 m-0 prodCatcus" style="text-align:center"><span style="width: auto;">
                                            {{ $products->first()->category->name }}</span></h4>
                                </a>
                                                            {{-- <!--<a href="{{ url('shop', $products->first()->category->slug) }}" -->
                                                            <!--      style="float: right; -->
                                    <!--             text-decoration: none; -->
                                    <!--             background-color: #F85606; -->
                                    <!--             color: white; -->
                                    <!--             padding: 5px 10px; -->
                                    <!--             border-radius: 0px 22px; -->
                                    <!--             display: inline-block; -->
                                    <!--             margin-top: -35px;">-->
                                                            <!--        See More-->
                                                            <!--    </a>   --> --}}
                            @endif
                        </div>
                    </div>
                </div>
                @if (!empty($products->first()->category->slug))
                    <div class="container-fluid p-0">
                        <div class="product-box">
                            <div class="owl-carousel slider_product">
                                @foreach ($products as $key => $product)
                                    <div class="product-item" style="">
                                        <div class="product_thumb bg-white prd_img" style="">
                                            @if (!empty($product->thumb_image))
                                                <a class="primary_img "
                                                    href="{{ route('front.product.show', [$product->id]) }}"><img
                                                        src="{{ asset('uploads/custom-images2/' . $product->thumb_image) }}"
                                                        class="primcusImg" alt=""></a>
                                                <a class="secondary_img "
                                                    href="{{ route('front.product.show', [$product->id]) }}"><img
                                                        src="{{ asset('uploads/custom-images2/' . $product->thumb_image) }}"
                                                        class="seccusImg" alt=""></a>
                                            @endif

                                            @if ($product->offer_price > 0)
                                                <div class="label_product" style="width: 102px;">
                                                    <span class="label_sale" style="padding-top: 2px;">মেগা অফার</span>
                                                </div>
                                            @endif
                                            @if ($product->is_free_shipping > 0)
                                                <div class="label_product"
                                                    style="width: 102px; background:#3276B1; left: 0%; border-radius: 5px 30px 30px 5px">
                                                    <span class="label_sale" style="padding-top: 2px;">ফ্রি শিপিং</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="product_content "
                                            style="border-top:3px solid #EDEDEF; margin-top: 10% ">
                                            <h4 class="ps-1" style="height: 35px;text-align: center;">
                                                @if (!empty($product->id))
                                                    <a href="{{ route('front.product.show', [$product->id]) }}"
                                                        id="product_show" data-productid="{{ $product->id }}"
                                                        data-categoryid="{{ $product->category_id }}"
                                                        data-productname="{{ $product->name }}" class="font-14 pro_name"
                                                        style="font-size:14px">
                                                        {{ \Illuminate\Support\Str::limit($product->name, 35) }}
                                                    </a>
                                                @endif
                                            </h4>
                                            <div class="subText"
                                                data-reactid=".1n7kkwy0qp6.b.2.0.0.0.0.2.5.1.0:$14822_Grocery.0.2.3">

                                            </div>
                                            <div class="price_box ps-1 justify-content-center prd_prc_bx" style="">
                                                @if (empty($product->offer_price))
                                                    @if (!empty($product->price))
                                                        <span class="current_price">{{ $product->price }} Tk</span>
                                                    @endif
                                                @else
                                                    <span class="current_price">{{ $product->offer_price }} Tk</span>
                                                    <span class="old_price">{{ $product->price }} Tk</span>
                                                @endif
                                            </div>
                                            <div class="rounded-0 bg-muted p-2 d-flex justify-content-between">
                                                @if ($product->type == 'variable' || $product->prod_color == 'varcolor')
                                                    @if (!empty($product->id))
                                                        <a type="button" href="{{ route('front.showProModal') }}"
                                                            style="color: white; font-size: 16px;background: linear-gradient(90deg, #002f6c, #00c8ff) !important;border: solid;width: 100%;padding-top: 4%;"
                                                            class="btn productModal"
                                                            data-productid="{{ $product->id }}">
                                                            <i class="fas fa-shopping-cart"></i> &ensp;
                                                            {{ BanglaText('order') }}
                                                        </a>
                                                    @endif
                                                @else
                                                    @if (!empty($product->id))
                                                        <a href="{{ route('front.check.single', ['product_id' => $product->id]) }}"
                                                            style="color: white; font-size: 16px;background: linear-gradient(90deg, #002f6c, #00c8ff) !important;border: solid;width: 100%;padding-top: 4%;"
                                                            class="btn btn-sm btn-warning semi buy-now"
                                                            data-price="{{ $product->price }}"
                                                            data-offerprice="{{ $product->offer_price }}"
                                                            data-url="{{ route('front.cart.store') }}">
                                                            <i class="fas fa-shopping-cart"></i> &ensp;
                                                            {{ BanglaText('order') }}
                                                        </a>
                                                    @endif
                                                @endif


                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @else
                @endif
            @endforeach
        @else
        @endif

        <div class="row pt-4 service-support-box" style="margin-left:3%; margin-right:3%">

            @foreach ($home_bottom_settings as $item)
                <div class="col-lg-3 col-md-6 col-12 border-end mb-3">
                    <div class="support service-support-single d-flex align-items-center ps-4">
                        <img class="pe-2 img-fluid" src="{{ asset('uploads/home-bottom-icon/' . $item->icon) }}"
                            style="margin:0px" alt="">
                        <!-- <p><span>Free Shipping &amp; Returns</span> <br>For all order over 5 items</p>p -->
                        <div class="" style="margin: 5px;padding: 0px;">
                            <h6 style="margin:0px"><strong>{{ $item->title }}</strong></h6>
                            <p class="font-13 m-0">
                                {{ $item->description }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 free-content">
                        <div>

                            <p>{!! $about->about_us !!}</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>


    <style>
        div#popUpForm {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #000000a8;
            display: none;
            height: 100%;
            z-index: 9999;
        }

        #popContainer {
            width: 460px;
            text-align: center;
            margin: 0 auto;
            height: auto;
            margin-top: 0;
            z-index: 99999;
            /*top: 23%;*/
            position: relative;
            border-radius: 20px;
        }

        .popupGrid {
            width: 100%;
            height: 100%;
            display: grid;
            place-content: center;
        }

        #close {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .offerBox {
            width: 100%;
            height: 100%;
            display: grid;
            place-items: center;
            position: fixed;
            top: 0;
            left: 0;
        }

        .offerBox .modal-overlay {
            background-color: #20202073;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }

        .offerBox .content {
            z-index: 999999;
            position: relative;
        }

        .offerBox .content .close {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        @media(max-width: 575px) {
            #popContainer {
                width: 100%;
            }
        }

        @media(min-width: 575px) {
            #popContainer {
                width: 420px;
            }

            #popContainer img {
                max-width: 400px;
            }
        }

        @media(min-width: 775px) {
            #popContainer img {
                max-width: 600px;
            }

            #popContainer {
                width: 620px;
            }
        }

        .owl-nav {
            position: absolute;
            top: 50%;
            width: 100%;
        }

        .owl-nav button {
            position: absolute;
            top: -40px;
            width: 40px;
            height: 40px;
            border: none;
            font-size: 25px;
            font-weight: bold;
        }

        .owl-nav button.owl-prev {
            left: 10px;
        }

        .owl-nav button.owl-next {
            right: 20px;
        }

        .product-item .product_content .button {
            height: 40px;
            width: 100%;
            text-align: center;
            overflow: hidden;
            /* background-color: #ff7400 !important; */
            cursor: pointer;
        }

        .product-item .product_content button {
            position: relative;
            height: 40px;
            line-height: 20px;
            padding: 0 18px;
            display: block;
            border-radius: 0px;
            font-weight: 700;
            font-size: 14px;
            color: var(--color-white);
            background-color: #fe045b;
            transition: .3s;
            box-shadow: 0 16px 32px 0 rgb(0 0 0 / 6%);
            position: relative;
            z-index: 1;
        }

        .product-item .product_content .button p {
            height: 40px;
            width: 100%;
            text-align: center;
            padding-top: 9px;
            font-size: 13px;
            transition: 0.5s;
            color: #00276C;
        }

        .product-item .product_content .button:hover p {
            height: 55px;
            text-align: center;
            padding-top: 10px;
            font-size: 13px;
            margin-top: -68px;
            transition: 0.5s;
        }

        .product-item .product_content .button span {
            height: 40px;
            width: 100%;
            text-align: center;
            padding-top: 10px;
            font-size: 15px;
            transition: 0.5s;
            color: white;
            padding: 20px;
        }

        .product-item .product_content .button:hover span {
            height: 40px;
            text-align: center;
            padding-top: 10px;
            font-size: 15px;
            margin-top: -40px;
            transition: 0.5s;
        }
    </style>

@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


    <script>
        $(document).on('click', 'a.productModal', function(e) {
            e.preventDefault();
            let url = $(this).attr('href');
            let productId = $(this).data('productid');

            $.ajax({
                url: url,
                method: "GET",
                data: {
                    productId
                },
                success: function(res) {
                    $('div#commonModal').html(res.html).modal('show');
                }
            });
        });
    </script>


    <script>
        $(document).on('click', 'a#product_show', function(e) {
            e.preventDefault();

            let product_id = $(this).data('productid');
            let product_name = $(this).data('productname');
            let category_id = $(this).data('categoryid');
            let sell_price = $(this).closest('.product-item').find('.product_content span.current_price').text()
                .replace(/[^\d.]/g, '');
            let quantity = '1';

            window.dataLayer = window.dataLayer || [];
            dataLayer.push({
                event: "view_item",
                ecommerce: {
                    currency: "BDT",
                    value: sell_price,
                    items: [{
                        item_id: product_id,
                        item_name: product_name,
                        item_category: category_id,
                        price: sell_price,
                        quantity: quantity
                    }]
                }
            });

            let url = $(this).attr('href');
            if (url) {
                document.location.href = url;
            } else {

            }

        });
    </script>

    <script>
        $(document).ready(function() {
            $(document).on('submit', 'form.cart_form_home', function(e) {
                e.preventDefault();

                let url = $(this).attr('action');
                let method = $(this).attr('method');
                let id = $(this).find('input[name="id"]').val();
                let variation_id = $(this).find('input[name="variation_id"]').val();
                let varSize = $(this).find('input[name="variation_size"]').val();
                let variation_size_id = $(this).find('input[name="variation_size_id"]').val();
                let variation_price = $(this).find('input[name="variation_price"]').val();
                let varColor = $(this).find('input[name="variation_color"]').val();
                let variation_color_id = $(this).find('input[name="variation_color_id"]').val();
                let quantity = $(this).find('input[name="quantity"]').val();
                let type = $(this).find('input[name="type"]').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });

                $.ajax({
                    type: method,
                    url: url,
                    data: {
                        id,
                        variation_id,
                        varSize,
                        variation_size_id,
                        variation_price,
                        varColor,
                        variation_color_id,
                        quantity,
                        type
                    },
                    success: function(res) {
                        toastr.success(res.msg);
                        if (res.status) {
                            window.location.reload();
                        }
                    }
                });

            });

            $(document).on('click', 'button.do_order', function(e) {
                e.preventDefault();

                let url = $('form.cart_form_home').attr('action');
                let method = $('form.cart_form_home').attr('method');

                let id = $(this).closest('.modal').find('input[name="id"]').val();
                let variation_id = $(this).closest('.modal').find('input[name="variation_id"]').val();
                let varSize = $(this).closest('.modal').find('input[name="variation_size"]').val();
                let variation_size_id = $(this).closest('.modal').find('input[name="variation_size_id"]')
                    .val();
                let variation_price = $(this).closest('.modal').find('input[name="variation_price"]').val();
                let varColor = $(this).closest('.modal').find('input[name="variation_color"]').val();
                let variation_color_id = $(this).closest('.modal').find('input[name="variation_color_id"]')
                    .val();
                let quantity = $(this).closest('.modal').find('input[name="quantity"]').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });

                $.ajax({
                    url: url,
                    type: method,
                    data: {
                        id,
                        variation_id,
                        varSize,
                        variation_size_id,
                        variation_price,
                        varColor,
                        variation_color_id,
                        quantity
                    },
                    success: function(response) {
                        window.location.href = "{{ route('front.checkout.index') }}";
                    },
                    error: function(xhr, status, error) {
                        console.error('Error placing order:', error);
                    }
                });
            });


        });
    </script>

    <script>
        $(document).on('click', '#sizes .size', function() {

            $('#sizes .size').removeClass('active');
            $(this).addClass('active');

            let product_id = $(this).data('proid');
            let variation_id = $(this).attr('value');
            let variation_size = $(this).data('varsize');
            let variation_size_id = $(this).data('varsizeid');
            let variation_price = parseFloat($(this).data('varprice'));

            $(this).closest('.modal').find('#test_for').text('Select Size : ' + variation_size);
            $(this).closest('.modal').find('input[name="id"]').val(product_id);
            $(this).closest('.modal').find('input[name="variation_id"]').val(variation_id);
            $(this).closest('.modal').find('input[name="variation_size"]').val(variation_size);
            $(this).closest('.modal').find('input[name="variation_size_id"]').val(variation_size_id);
            $(this).closest('.modal').find('input[name="variation_price"]').val(variation_price);
        });
        $(document).on('click', '#colors .color', function() {

            $('#colors .color').removeClass('active');
            $(this).addClass('active');

            let product_id = $(this).data('proid');
            let variation_color = $(this).data('varcolor');
            let variation_color_id = $(this).data('colorid');
            let variation_size_id = $(this).closest('.modal').find('input[name="variation_size_id"]').val();

            $(this).closest('.modal').find('input[name="variation_color"]').val(variation_color);
            $(this).closest('.modal').find('input[name="variation_color_id"]').val(variation_color_id);

            $(this).closest('.modal').find('#selected_color').text('Select Color : ' + variation_color);

            $.ajax({
                type: 'get',
                url: '{{ route('front.product.get-variation_color') }}',
                data: {
                    product_id,
                    variation_size_id,
                    variation_color_id
                },
                success: function(res) {
                    //   alert(res.pro_img);

                    // $(this).closest('.modal').find('input[name="pro_img"]').val(res.pro_img);
                    // alert(variation_color);
                }
            });

        });
    </script>

    <script>
        $(document).ready(function() {
            // $('.buy-now').on('click', function (e) {
            //     e.preventDefault();

            //     var productId = $(this).attr('href').split('/').pop();
            //     var proQty = 1;
            //     var addToCartUrl = $(this).data('url');
            //     var csrfToken = $('meta[name="csrf-token"]').attr('content');
            //     var price=$(this).data('price');
            //     var offerprice=$(this).data('offerprice');
            //     var retrieve_discount=price-offerprice;

            //     // Include CSRF token in AJAX request headers
            //     $.ajaxSetup({
            //         headers: {
            //             'X-CSRF-TOKEN': csrfToken
            //         }
            //     });

            //     // Perform AJAX request to add the product to the cart
            //     $.post(addToCartUrl, { id: productId, quantity: proQty, retrieve_discount:retrieve_discount}, function (response) {
            //         // toastr.success(response.msg);
            //         if(response.status)
            //         {
            //             // Redirect to checkout page after adding to cart
            //             window.location.href = "{{ route('front.checkout.index') }}";
            //         } else
            //         {

            //         }

            //     });
            // });
        });
    </script>

    <script>
        $(function() {
            // Add CSS to initially hide the .offerBox
            function setCookie(name, value, minutes) {
                var expires = "";
                if (minutes) {
                    var date = new Date();
                    date.setTime(date.getTime() + (minutes * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/";
            }

            function getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1, c.length);
                    }
                    if (c.indexOf(nameEQ) == 0) {
                        return c.substring(nameEQ.length, c.length);
                    }
                }
                return null;
            }

            $(".modal-overlay").click(function() {
                $('.offerBox').hide();
                setCookie('offerBoxHidden', 'true', 5);
            })

            $(".offerBox .content .close").click(function() {
                $('.offerBox').hide();
                setCookie('offerBoxHidden', 'true', 5);
            })

            // Check if the offerBox should be hidden based on the cookie
            var offerBoxHidden = getCookie('offerBoxHidden');

            if (offerBoxHidden === 'true') {
                $('.offerBox').hide();
            }





            $(document).on('click', '.add-to-cart', function(e) {
                let id = $(this).data('id');
                let url = $(this).data('url');
                addToCart(url, id);
            });

            // ... other click event handlers ...

            function addToCart(url, id, variation = "", quantity = 1) {
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: "POST",
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        id,
                        quantity,
                        variation
                    },
                    success: function(res) {
                        if (res.status) {
                            //  toastr.success(res.msg);
                            window.location.reload();

                        } else {
                            toastr.error(res.msg);
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error('An error occurred while processing your request.');
                    }
                });
            }

            // ... other functions ...

        });
    </script>

    <script>
        $(document).ready(function() {
            $('.select2').select2({
                closeOnSelect: true
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.buy-now').on('click', function(e) {
                e.preventDefault();

                var productId = $(this).attr('href').split('/').pop();
                var proQty = 1;
                var addToCartUrl = $(this).data('url');
                var checkoutUrl = "{{ route('front.cart.index') }}";
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                var price = Number($(this).data('price'));
                var offerprice = Number($(this).data('offerprice'));
                var retrieve_discount = price - offerprice;

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });

                $.post(addToCartUrl, {
                    id: productId,
                    quantity: proQty,
                    retrieve_discount: retrieve_discount
                }, function(response) {
                    toastr.success(response.msg);
                    if (response.status) {
                        window.location.href = "{{ route('front.checkout.index') }}";
                    } else {

                    }

                });
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            $('.owl-carousel').show();
            $('.product_slider_sell').owlCarousel({
                items: 1,
                loop: true,

                rewind: false,
                responsive: {
                    0: {
                        items: 1,

                    },
                    320: {
                        items: 2,

                    },
                    500: {
                        items: 2,

                    },
                    600: {
                        items: 3
                    },
                    870: {
                        items: 4
                    },
                    1070: {
                        items: 5
                    },
                    1200: {
                        items: 5
                    },
                    1300: {
                        items: 5
                    },
                    1400: {
                        items: 6
                    }
                }
            });



            $('.slider_product').owlCarousel({
                items: 1,
                loop: true,

                rewind: false,
                responsive: {
                    0: {
                        items: 1,

                    },
                    320: {
                        items: 2,

                    },
                    500: {
                        items: 2,

                    },
                    600: {
                        items: 3
                    },
                    870: {
                        items: 4
                    },
                    1070: {
                        items: 5
                    },
                    1200: {
                        items: 5
                    },
                    1300: {
                        items: 5
                    },
                    1400: {
                        items: 6
                    }
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            var popUpForm = document.getElementById("popUpForm");

            var shouldShowPopup = localStorage.getItem("showPopup");
            var lastCloseTime = localStorage.getItem("lastCloseTime");

            if (!shouldShowPopup || (shouldShowPopup && lastCloseTime && Date.now() - lastCloseTime >= 5 * 60 *
                    1000)) {
                popUpForm.style.display = "block";
            }
            // setTimeout(function () {
            //         popUpForm.style.display = "none";
            //     }, 10000);
            document.querySelector('.popupGrid').addEventListener('click', function(event) {
                if (event.target.classList.contains('popupGrid')) {
                    popUpForm.style.display = "none";
                    localStorage.setItem("showPopup", false);
                    localStorage.setItem("lastCloseTime", Date.now());
                }
            });
            document.getElementById("close").addEventListener("click", function() {
                popUpForm.style.display = "none";
                localStorage.setItem("showPopup", false);
                localStorage.setItem("lastCloseTime", Date.now());
            });
        });
    </script>
@endpush
