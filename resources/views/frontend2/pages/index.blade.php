@extends('frontend2.layouts.master-for-homepage')
@section('content')
    <!--slider start-->
    <section class="theme-slider section-pt-space">
        <div class="custom-container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 offset-xl-2 px-abjust">
                    <div class="slide-1 no-arrow">
                        @foreach ($slider as $index => $sl)
                            <div>
                                <div class="slider-banner">
                                    <div class="slider-img">
                                        <ul class="layout2-slide-1">
                                            <li id="img-1"><img src="{{ asset($sl->image) }}" class="img-fluid"
                                                    alt="slider"></li>
                                        </ul>
                                    </div>
                                    <div class="slider-banner-contain">
                                        <div>
                                            <h4>the best</h4>
                                            <h1>Dresses</h1>
                                            {{-- <h2>minimum 30% off</h2> --}}
                                            <a href="{{ route('front.home') }}" class="btn btn-rounded">
                                                Shop Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-xl-2 col-sm-3 pl-0 offer-banner">
                    <div class="offer-banner-img">
                        <img src="{{ asset('assets') }}/images/layout-1/offer-banner.png" alt="offer-banner"
                            class="img-fluid  ">
                    </div>
                    <div class="banner-contain">
                        <div>
                            <h5>Special Offer for you</h5>
                            <div class="discount-offer">
                                <h1>50%</h1><sup>off</sup>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider end-->

    <!--collection banner start-->
    <section class="collection-banner section-pt-space">
        <div class="custom-container">
            <div class="row collection collection-layout1">

                <div class="col-md-4 offset-xl-2 p-r-md-0">
                    <div class="collection-banner-main p-left">
                        <div class="collection-img">
                            <img src="{{ asset($collectionBanners[0]->image) }}" class="img-fluid bg-img  " alt="banner">
                        </div>
                        <div class="collection-banner-contain">
                            <div>
                                <h3>{{ $collectionBanners[0]->brand }}</h3>
                                <h4>{{ $collectionBanners[0]->title }}</h4>
                                <div class="shop">
                                    <a href="{{ $collectionBanners[0]->url }}">
                                        shop now
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-4">
                    <div class="collection-banner-main p-left">
                        <div class="collection-img">
                            <img src="{{ asset($collectionBanners[1]->image) }}" class="img-fluid bg-img  " alt="banner">
                        </div>
                        <div class="collection-banner-contain">
                            <div>
                                <h3>{{ $collectionBanners[1]->brand }}</h3>
                                <h4>{{ $collectionBanners[1]->title }}</h4>
                                <div class="shop">
                                    <a href="{{ $collectionBanners[1]->url }}">
                                        shop now
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2  pl-md-0">
                    <div class="collection-banner-main p-top banner-6">
                        <div class="collection-img">
                            <img src="{{ asset($collectionBanners[2]->image) }}" class="img-fluid bg-img  " alt="banner">
                        </div>
                        <div class="collection-banner-contain">
                            <div>
                                <h6>10% off</h6>
                                <h4>{{ $collectionBanners[2]->title }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--collection banner end-->

    <!--top brand panel start-->
    <!--title start-->
    <div class="title1 section-my-space">
        <h4>Tob Brands</h4>
    </div>
    <!--title end-->

    <section class="rounded-category">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="slide-6 no-arrow">

                        @forelse($brands as $key => $brand)
                            <div>
                                <div class="category-contain">
                                    {{-- <a href="{{ url('/brand-product/' . $brand->slug) }}"> --}}
                                    <div style="border: none !important" class="img-wrapper">
                                        <img src="{{ $brand->logo }}" alt="category" class="img-fluid">
                                    </div>
                                    {{-- </a> --}}
                                </div>
                            </div>
                        @empty
                            <strong class="text-center text-danger">No Brands are available</strong>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--top brand panel end-->


    <!--featured category start-->
    <!--title start-->
    <div class="title1 section-my-space">
        <h4>Featured Category</h4>
    </div>
    <!--title end-->

    <section class="rounded-category">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="slide-6 no-arrow">
                        @forelse($feateuredCategories as $key => $item)
                            <div>
                                <div class="category-contain">
                                    <a
                                        href="{{ route('front.subcategory', [
                                            'type' => 'subcategory',
                                            'slug' => $item->category->slug,
                                        ]) }}">

                                        @if (!empty($item->category->slug))
                                            <div class="img-wrapper">
                                                <img src="{{ asset('uploads/custom-images2/' . $item->category->image) }}"
                                                    alt="category" class="img-fluid">
                                            </div>
                                            <div>
                                                <div class="btn-rounded">
                                                    {{ $item->category->name }}r
                                                </div>
                                            </div>
                                        @endif
                                    </a>
                                </div>
                            </div>
                        @empty
                            <strong>No Categories are Available!</strong>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--featured categor end-->

    <!--media banner start-->
    <section class=" b-g-white section-big-pt-space">
        <div class="container">
            <div class="row hot-1">
                <div class="col-lg-3 col-sm-6  col-12  ">
                    <div class="slide-1   no-arrow">
                        @foreach ($onSale->chunk(2) as $chunk)
                            <div>
                                <div class="media-banner">
                                    <div class="media-banner-box">
                                        <div class="media-heading">
                                            <h5>on sale</h5>
                                        </div>
                                    </div>
                                    @foreach ($chunk as $sale)
                                        <div class="media-banner-box">
                                            <a href="{{ route('front.product.show', [$sale->id]) }}">
                                                <div class="media">
                                                    <img height="108" width="84"
                                                        src="{{ asset('uploads/custom-images2/' . $sale->thumb_image) }}"
                                                        class="img-fluid  " alt="banner">
                                                    <div class="media-body">
                                                        <div class="media-contant">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <p>{{ $sale->name }}</p>

                                                                @if (empty($sale->offer_price))
                                                                    <h6>৳ {{ $sale->price }}</h6>
                                                                @else
                                                                    <h6> ৳ {{ $sale->offer_price }}</h6>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                    <div class="media-banner-box">
                                        <div class="media-view">
                                            <h5>Click to buy now</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6  col-12">
                    <div style="background-image: url({{ asset($collectionBanners[3]->image) }});"
                        class="Jewellery-banner">
                        <a>{{ $collectionBanners[3]->discount_text }}</a>
                        <a href="{{ $collectionBanners[3]->url }}">
                            <h6>{{ $collectionBanners[3]->brand }}</h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7  col-sm-12 col-12  ">
                    <div class="hot-deal">
                        <div class="hot-deal-box">
                            <div class="slide-1">
                                @foreach ($hotDeals as $sl => $hotDeal)
                                    <div>
                                        <div class="hot-deal-contain1 hot-deal-banner-1">
                                            <div class="hot-deal-heading">
                                                <h5>today’s hot deal</h5>
                                            </div>
                                            <div class="row hot-deal-subcontain">
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <div class="hotdeal-right-slick-1 no-arrow">
                                                        <a href="{{ route('front.product.show', [$hotDeal->id]) }}">
                                                            <div class="right-slick-img"><img
                                                                    src="{{ asset('uploads/custom-images2/' . $hotDeal->thumb_image) }}"
                                                                    alt="hot-deal" class="img-fluid  "></div>
                                                        </a>

                                                        @foreach ($hotDeal->gallery as $gal)
                                                            <a href="{{ route('front.product.show', [$hotDeal->id]) }}">
                                                                <div class="right-slick-img"><img
                                                                        src="{{ asset($gal->image) }}" alt="hot-deal"
                                                                        class="img-fluid  "></div>
                                                            </a>
                                                        @endforeach

                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6">
                                                    <div class="hot-deal-center">
                                                        <div>
                                                            <div class="mb-1">
                                                                <p
                                                                    style="font-weight: bold; margin-bottom: 0; margin-top: 0;">
                                                                    Total Sale:
                                                                    {{ $hotDeal->sold_qty }}</p>
                                                            </div>
                                                            <div class="rating mt-1 mb-1">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="{{ route('front.product.show', [$hotDeal->id]) }}">
                                                                <h5 class="mb-3">{{ $hotDeal->name }}</h5>
                                                            </a>
                                                            <div>
                                                                {{-- <p>{!! $hotDeal->long_description !!}</p> --}}
                                                                @if (empty($hotDeal->offer_price))
                                                                    <div class="price">
                                                                        <div class="price">
                                                                            ৳ {{ $hotDeal->price }}
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <div class="price">
                                                                        <span>
                                                                            ৳ {{ $hotDeal->offer_price }}
                                                                        </span>
                                                                        <span style="color: gray; !important"><del>৳
                                                                                {{ $hotDeal->price }}</del></span>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-sm-2 p-l-md-0">
                                                    <div class="hotdeal-right-nav-1">
                                                        <div><img
                                                                src="{{ asset('uploads/custom-images2/' . $hotDeal->thumb_image) }}"
                                                                alt="hot-deal" class="img-fluid  "></div>
                                                        @foreach ($hotDeal->gallery as $key => $img_gals)
                                                            <div><img src="{{ asset($img_gals->image) }}" alt="hot-deal"
                                                                    class="img-fluid  "></div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--media banner end-->

    <!--discount banner start-->
    <section class="discount-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="discount-banner-contain">
                        <h2>Special discout Offer for you</h2>
                        <h1>every <span> discount </span> we <span> offer is the best in market!</span></h1>
                        <div class="rounded-contain">
                            <div class="rounded-subcontain">
                                don't just scroll, your friends have already started buying!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--discount banner end-->

    <!--collection banner start-->
    <section class="collection-banner section-pt-space">
        <div class="container-fluid">
            <div class="row collection2">

                <div class="col-md-4">
                    <div class="collection-banner-main p-left">
                        <div class="collection-img">
                            <img src="{{ asset($collectionBanners[4]->image) }}" class="img-fluid bg-img "
                                alt="banner">
                        </div>
                        <div class="collection-banner-contain">
                            <div>
                                <h3>{{ $collectionBanners[4]->brand }}</h3>
                                <h4>{{ $collectionBanners[4]->title }}</h4>
                                <div class="shop">
                                    <a href="{{ $collectionBanners[4]->url }}">
                                        shop now
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="collection-banner-main p-left">
                        <div class="collection-img">
                            <img src="{{ $collectionBanners[5]->image }}" class="img-fluid bg-img " alt="banner">
                        </div>
                        <div class="collection-banner-contain">
                            <div>
                                <h3>{{ $collectionBanners[5]->brand }}</h3>
                                <h4>{{ $collectionBanners[5]->title }}</h4>
                                <div class="shop">
                                    <a href="{{ $collectionBanners[5]->url }}">
                                        shop now
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="collection-banner-main p-left">
                        <div class="collection-img">
                            <img src="{{ asset($collectionBanners[6]->image) }}" class="img-fluid bg-img  "
                                alt="banner">
                        </div>
                        <div class="collection-banner-contain">
                            <div>
                                <h3>{{ $collectionBanners[6]->brand }}</h3>
                                <h4>{{ $collectionBanners[6]->title }}</h4>
                                <div class="shop">
                                    <a href="{{ $collectionBanners[6]->url }}">
                                        shop now
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--collection banner end-->

    <!--Flash Sell start-->
    <!--title start-->
    <div class="title1 section-my-space">
        <h4><a href="{{ route('front.flash-sell') }}" style="color:orange; text-decoration: underline">Flash Sell</a>
        </h4>
    </div>
    <!--title end-->
    <!--product start-->
    <section class="product section-big-pb-space">
        <div class="custom-container">
            <div class="row ">
                <div class="col pr-0">
                    <div class="product-slide-6 no-arrow mb--10">
                        @forelse($flashSell as $key => $sale)
                            <div>
                                <div class="product-box">
                                    <div class="product-imgbox">
                                        @if (!empty($sale->product->id))
                                            <a href="{{ route('front.product.show', [$sale->product->id]) }}">
                                                <div class="product-front">
                                                    <img src="{{ asset('uploads/custom-images2/' . $sale->product->thumb_image) }}"
                                                        class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="{{ asset('uploads/custom-images2/' . $sale->product->thumb_image) }}"
                                                        class="img-fluid  " alt="product">
                                                </div>
                                            </a>
                                        @endif
                                        <div class="product-icon">
                                            {{-- <button onclick="openCart()" type="button">
                                                <i class="ti-bag"></i>
                                            </button> --}}
                                            <a style="cursor: pointer" class="openWishlist"
                                                data-wish_pro_id="{{ $sale->product->id }}" title="Add to Wishlist">
                                                <i class="ti-heart" aria-hidden="true"></i>
                                            </a>
                                            <a style="cursor: pointer" id="" class="quickView"
                                                title="Quick View" data-product_id="{{ $sale->product->id }}"> <i
                                                    class="ti-search" aria-hidden="true"></i>
                                            </a>
                                            {{-- <a href="compare.html" title="Compare">
                                                <i class="fa fa-exchange" aria-hidden="true"></i>
                                            </a> --}}
                                        </div>

                                        @if ($sale->product->is_free_shipping > 0)
                                            <div class="new-label">
                                                <div>{{ BanglaText('free') }}</div>
                                            </div>
                                        @endif

                                        @if ($sale->product->offer_price > 0)
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
                                                @if (!empty($sale->product->id))
                                                    <a href="{{ route('front.product.show', [$sale->product->id]) }}">
                                                        <h6 class="price-title">
                                                            {{ \Illuminate\Support\Str::limit($sale->product->name, 30) }}
                                                        </h6>
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="detail-right">
                                                @if (empty($sale->product->offer_price))
                                                    <div class="price">
                                                        <div class="price">
                                                            ৳ {{ $sale->product->price }}
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="check-price">
                                                        ৳ {{ $sale->product->price }}
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            ৳ {{ $sale->product->offer_price }}
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <strong class="text-center text-danger">No products are available</strong>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product end-->
    <!--Flash Sell end-->

    <!--services start-->
    <section class="services">
        <div class="container">
            <div class="row service-block">
                <div class="col-lg-3 col-md-6  col-sm-12">
                    <div class="media">
                        <svg height="679pt" viewBox="0 -117 679.99892 679" width="679pt"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m12.347656 378.382812h37.390625c4.371094 37.714844 36.316407 66.164063 74.277344 66.164063 37.96875 0 69.90625-28.449219 74.28125-66.164063h241.789063c4.382812 37.714844 36.316406 66.164063 74.277343 66.164063 37.96875 0 69.902344-28.449219 74.285157-66.164063h78.890624c6.882813 0 12.460938-5.578124 12.460938-12.460937v-352.957031c0-6.882813-5.578125-12.464844-12.460938-12.464844h-432.476562c-6.875 0-12.457031 5.582031-12.457031 12.464844v69.914062h-105.570313c-4.074218.011719-7.890625 2.007813-10.21875 5.363282l-68.171875 97.582031-26.667969 37.390625-9.722656 13.835937c-1.457031 2.082031-2.2421872 4.558594-2.24999975 7.101563v121.398437c-.09765625 3.34375 1.15624975 6.589844 3.47656275 9.003907 2.320312 2.417968 5.519531 3.796874 8.867187 3.828124zm111.417969 37.386719c-27.527344 0-49.851563-22.320312-49.851563-49.847656 0-27.535156 22.324219-49.855469 49.851563-49.855469 27.535156 0 49.855469 22.320313 49.855469 49.855469 0 27.632813-22.21875 50.132813-49.855469 50.472656zm390.347656 0c-27.53125 0-49.855469-22.320312-49.855469-49.847656 0-27.535156 22.324219-49.855469 49.855469-49.855469 27.539063 0 49.855469 22.320313 49.855469 49.855469.003906 27.632813-22.21875 50.132813-49.855469 50.472656zm140.710938-390.34375v223.34375h-338.375c-6.882813 0-12.464844 5.578125-12.464844 12.460938 0 6.882812 5.582031 12.464843 12.464844 12.464843h338.375v79.761719h-66.421875c-4.382813-37.710937-36.320313-66.15625-74.289063-66.15625-37.960937 0-69.898437 28.445313-74.277343 66.15625h-192.308594v-271.324219h89.980468c6.882813 0 12.464844-5.582031 12.464844-12.464843 0-6.882813-5.582031-12.464844-12.464844-12.464844h-89.980468v-31.777344zm-531.304688 82.382813h99.703125v245.648437h-24.925781c-4.375-37.710937-36.3125-66.15625-74.28125-66.15625-37.960937 0-69.90625 28.445313-74.277344 66.15625h-24.929687v-105.316406l3.738281-5.359375h152.054687c6.882813 0 12.460938-5.574219 12.460938-12.457031v-92.226563c0-6.882812-5.578125-12.464844-12.460938-12.464844h-69.796874zm-30.160156 43h74.777344v67.296875h-122.265625zm0 0" />
                        </svg>
                        <div class="media-body">
                            <h5>free shipping</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  col-sm-12">
                    <div class="media">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 417.12 417.12"
                            style="enable-background:new 0 0 417.12 417.12;" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M409.12,200.741c-4.418,0-8,3.582-8,8c-0.06,106.525-86.464,192.831-192.988,192.772
                                                                                                            C101.607,401.453,15.3,315.049,15.36,208.524C15.42,102,101.824,15.693,208.348,15.753c51.36,0.029,100.587,20.54,136.772,56.988
                                                                                                            l-17.84-0.72c-4.418,0-8,3.582-8,8s3.582,8,8,8l36.72,1.52c1.013,0.003,2.018-0.188,2.96-0.56l0.88-0.56
                                                                                                            c1.381-0.859,2.534-2.039,3.36-3.44c0.034-0.426,0.034-0.854,0-1.28c0.183-0.492,0.317-1.001,0.4-1.52l3.2-36.72
                                                                                                            c0.376-4.418-2.902-8.304-7.32-8.68s-8.304,2.902-8.68,7.32l-1.6,18.16c-80.799-82.092-212.848-83.14-294.939-2.341
                                                                                                            s-83.14,212.848-2.341,294.939s212.848,83.14,294.939,2.341c39.786-39.159,62.212-92.635,62.261-148.459
                                                                                                            C417.12,204.323,413.538,200.741,409.12,200.741z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M200.4,256.341c-3.716-2.516-8.162-3.726-12.64-3.44h-56c1.564-2.442,3.302-4.768,5.2-6.96
                                                                                                c6.727-7.402,14.088-14.201,22-20.32c10.667-8.747,18.293-15.147,22.88-19.2c5.252-4.976,9.752-10.689,13.36-16.96
                                                                                                c4.377-7.234,6.649-15.545,6.56-24c-0.009-11.177-4.27-21.931-11.92-30.08c-3.725-3.941-8.181-7.12-13.12-9.36
                                                                                                c-8.709-3.645-18.08-5.443-27.52-5.28c-8.048-0.163-16.055,1.194-23.6,4c-6.2,2.328-11.862,5.894-16.64,10.48
                                                                                                c-4.219,4.117-7.565,9.042-9.84,14.48c-2.098,4.853-3.213,10.074-3.28,15.36c-0.192,3.547,1.081,7.018,3.52,9.6
                                                                                                c2.345,2.352,5.56,3.626,8.88,3.52c3.499,0.231,6.903-1.19,9.2-3.84c2.503-3.303,4.424-7.01,5.68-10.96
                                                                                                c0.939-3.008,2.144-5.926,3.6-8.72c4.562-7.738,12.94-12.416,21.92-12.24c4.114,0.077,8.149,1.147,11.76,3.12
                                                                                                c3.625,1.82,6.693,4.583,8.88,8c2.194,3.673,3.329,7.882,3.28,12.16c-0.067,4.437-1.105,8.806-3.04,12.8
                                                                                                c-2.129,4.829-5.019,9.286-8.56,13.2c-4.419,4.617-9.298,8.772-14.56,12.4c-5.616,4.247-10.96,8.843-16,13.76
                                                                                                c-7.787,7.04-16.453,15.467-26,25.28c-2.638,2.966-4.773,6.344-6.32,10c-1.632,3.159-2.612,6.614-2.88,10.16
                                                                                                c-0.018,3.939,1.605,7.707,4.48,10.4c3.393,3.096,7.896,4.684,12.48,4.4h78.4c3.842,0.312,7.641-0.993,10.48-3.6
                                                                                                c2.291-2.379,3.53-5.579,3.44-8.88C204.691,262.051,203.173,258.598,200.4,256.341z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M333.76,222.901c-4.254-1.637-8.809-2.346-13.36-2.08h-4.56v-82.48c0-12.373-5.333-18.56-16-18.56
                                                                                                            c-3.185-0.052-6.261,1.155-8.56,3.36c-3.331,3.343-6.382,6.956-9.12,10.8l-56.48,75.6l-3.92,5.2c-1.067,1.44-2.107,2.907-3.12,4.4
                                                                                                            c-0.916,1.374-1.668,2.851-2.24,4.4c-0.475,1.308-0.718,2.689-0.72,4.08c-0.237,4.699,1.607,9.263,5.04,12.48
                                                                                                            c4.323,3.358,9.742,4.984,15.2,4.56h53.52v20.08c-0.273,4.252,1.006,8.459,3.6,11.84c5.276,5.346,13.887,5.403,19.233,0.127
                                                                                                            c0.043-0.042,0.085-0.084,0.127-0.127c2.587-3.384,3.866-7.589,3.6-11.84v-20h6.48c4.242,0.298,8.476-0.677,12.16-2.8
                                                                                                            c2.877-2.141,4.425-5.63,4.08-9.2C339.301,228.744,337.319,224.811,333.76,222.901z M289.36,220.581h-45.84l45.84-61.92V220.581z" />
                                </g>
                            </g>
                        </svg>
                        <div class="media-body">
                            <h5>24X7 SERVICE</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  col-sm-12 ">
                    <div class="media">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 295.82 295.82"
                            xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 295.82 295.82">
                            <g>
                                <g>
                                    <path
                                        d="m269.719,43.503h-243.617c-13.921,0-26.102,12.181-26.102,26.102v156.611c0,13.921 12.181,26.102 26.102,26.102h243.617c13.921,0 26.102-12.181 26.102-26.102v-156.611c-0.001-13.921-12.182-26.102-26.102-26.102zm-243.617,17.401h243.617c5.22,0 8.701,3.48 8.701,8.701v13.921h-261.019v-13.921c-1.06581e-14-5.22 3.481-8.701 8.701-8.701zm252.317,40.023v13.921h-261.018v-13.921h261.018zm-8.7,133.989h-243.617c-5.22,0-8.701-3.48-8.701-8.701v-93.966h261.018v93.966c0,5.221-3.48,8.701-8.7,8.701z" />
                                    <path
                                        d="m45.243,172.272h45.243c5.22,0 8.701-3.48 8.701-8.701 0-5.22-3.48-8.701-8.701-8.701h-45.243c-5.22,0-8.701,3.48-8.701,8.701 0.001,5.221 3.481,8.701 8.701,8.701z" />
                                    <path
                                        d="m151.391,191.413h-106.148c-5.22,0-8.701,3.48-8.701,8.701s3.48,8.701 8.701,8.701h106.147c3.48,0 8.701-3.48 8.701-8.701s-3.48-8.701-8.7-8.701z" />
                                </g>
                            </g>
                        </svg>
                        <div class="media-body">
                            <h5>EASY RETURN</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  col-sm-12 ">
                    <div class="media">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 448 448"
                            style="enable-background:new 0 0 448 448;" xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path
                                            d="M384,172.4C384,83.6,312.4,12,224,12S64,83.6,64,172c0,0,0,0,0,0.4C28.4,174.4,0,204,0,240v8c0,37.6,30.4,68,68,68h3.6
                                                                                                            l28.4,45.2c20,32,54,50.8,91.6,50.8h5.6c3.6,13.6,16,24,30.8,24c17.6,0,32-14.4,32-32c0-17.6-14.4-32-32-32
                                                                                                            c-14.8,0-27.2,10.4-30.8,24h-5.6c-32,0-61.2-16.4-78-43.6L90.4,316H96c8.8,0,16-7.2,16-16V188c0-8.8-7.2-16-16-16H80
                                                                                                            c0-79.6,64.4-144,144-144s144,64.4,144,144h-16c-8.8,0-16,7.2-16,16v112c0,8.8,7.2,16,16,16h28c37.6,0,68-30.4,68-68v-8
                                                                                                            C448,204,419.6,174.4,384,172.4z M228,388c8.8,0,16,7.2,16,16s-7.2,16-16,16s-16-7.2-16-16S219.2,388,228,388z M96,188v112H68
                                                                                                            c-28.8,0-52-23.2-52-52v-8c0-28.8,23.2-52,52-52H96z M432,248c0,28.8-23.2,52-52,52h-28V188h28c28.8,0,52,23.2,52,52V248z" />
                                        <path
                                            d="M290.4,72.4c-0.8-0.4-2-1.2-3.2-2c-1.2-0.8-2.4-1.6-3.2-2c-3.6-2.4-8.8-1.2-10.8,2.8S272,79.6,276,82
                                                                                                            c0.8,0.4,2,1.2,3.2,2s2.4,1.6,3.6,2c1.2,0.8,2.8,1.2,4,1.2c2.8,0,5.2-1.2,6.8-4C295.6,79.6,294.4,74.8,290.4,72.4z" />
                                        <path
                                            d="M224,52c-34,0-66,14.8-88,40.4c-2.8,3.2-2.4,8.4,0.8,11.2c1.6,1.2,3.2,2,5.2,2c2.4,0,4.4-0.8,6-2.8
                                                                                                                c19.2-22,46.8-34.8,76-34.8c7.2,0,14.4,0.8,21.6,2.4c4.4,0.8,8.4-2,9.6-6s-2-8.4-6-9.6C240.8,52.8,232.4,52,224,52z" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <div class="media-body">
                            <h5>ONLINE PAYMENT</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services end-->

    {{-- @if (count($popularProducts))
    @foreach ($popularProducts as $categoryId => $products)

    <!--title start-->
        @if (!empty($products->first()->category->slug))
            <div class="title1 section-my-space">
                <h4><a href="{{ url('shop', $products->first()->category->slug) }}" style="color:orange; text-decoration: underline">{{ $products->first()->category->name }}</a></h4>
            </div>
        @endif
    <!--title end-->
    <!--product start-->

    @if (!empty($products->first()->category->slug))

    <section class="product section-big-pb-space">
        <div class="custom-container">
            <div class="row ">
                <div class="col pr-0">
                    <div class="product-slide-6 no-arrow mb--10">

                        @forelse ($products as $key => $product)
                            <div>
                                <div class="product-box">
                                    <div class="product-imgbox">
                                        @if (!empty($product->id))
                                        <a href="{{ route('front.product.show', [$product->id]) }}">

                                            <div class="product-front">
                                                <img src="{{ asset('uploads/custom-images2/' . $product->thumb_image) }}"
                                                    class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{ asset('uploads/custom-images2/' . $product->thumb_image) }}"
                                                    class="img-fluid  " alt="product">
                                            </div>
                                        </a>
                                        @endif
                                        <div class="product-icon">
                                            <button onclick="openCart()" type="button">
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

                                        @if ($product->is_free_shipping > 0)
                                         <div class="new-label">
                                            <div>ফ্রি শিপিং</div>
                                          </div>
                                         @endif

                                        @if ($product->offer_price > 0)
                                        <div class="on-sale">মেগা অফার</div>

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
                                                @if (!empty($product->id))
                                                <a href="{{ route('front.product.show', [$product->id]) }}">
                                                    <h6 class="price-title">{{ \Illuminate\Support\Str::limit($product->name, 30) }}</h6>
                                                </a>
                                                @endif
                                            </div>
                                            <div class="detail-right">
                                                @if (empty($product->offer_price))
                                                    <div class="price">
                                                        <div class="price">
                                                            ৳ {{ $product->price }}
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="check-price">
                                                        ৳ {{ $product->price }}
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            ৳ {{ $product->offer_price }}
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <strong class="text-center text-danger">No products are available</strong>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    @endif

    <!--product end-->
    @endforeach

    @else
    @endif --}}





    <!-- media tab start -->
    {{-- <section class="section-big-pb-space ratio_40 pb-10">
        <!--tab product-->
        <section class="section-py-space">
            <div class="tab-product-main">
                <div class="tab-prodcut-contain">
                    <ul class="tabs tab-title">
                        @foreach ($categories as $category)
                            <li class="{{ $loop->first ? 'current' : '' }}">
                                <a href="tab-{{ $category->id }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section> --}}
    <!--tab product-->
    {{-- <div class="custom-container product">
            <div class="row">
                <div class="col pr-0">
                    <div class="theme-tab product tab-abjust">
                        <div class="tab-content-cls">

                            @foreach ($categories as $category)
                                <div id="tab-{{ $category->id }}" class="tab-content {{ $loop->first ? 'active default' : '' }}">
                                    <div class="product-slide-6 product-m no-arrow">
                                        @foreach ($category->products as $product)
                                            <div>
                                                <div class="product-box">
                                                    <div class="product-imgbox">
                                                        <div class="product-front">
                                                            <img src="{{ asset('assets/images/products/' . $product->image_front) }}"
                                                                 class="img-fluid" alt="{{ $product->name }}">
                                                        </div>
                                                        <div class="product-back">
                                                            <img src="{{ asset('assets/images/products/' . $product->image_back) }}"
                                                                 class="img-fluid" alt="{{ $product->name }}">
                                                        </div>
                                                        <div class="product-icon">
                                                            <button onclick="openCart()" type="button">
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
                                                        @if ($product->is_new)
                                                            <div class="new-label">
                                                                <div>new</div>
                                                            </div>
                                                        @endif
                                                        @if ($product->is_on_sale)
                                                            <div class="on-sale">
                                                                on sale
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="product-detail">
                                                        <div class="detail-title">
                                                            <div class="detail-left">
                                                                <div class="rating-star">
                                                                    @for ($i = 1; $i <= 5; $i++)
                                                                        <i class="fa fa-star{{ $i <= $product->rating ? '' : '-o' }}"></i>
                                                                    @endfor
                                                                </div>
                                                                <a href="#">
                                                                    <h6 class="price-title">
                                                                        {{ $product->name }}
                                                                    </h6>
                                                                </a>
                                                            </div>
                                                            <div class="detail-right">
                                                                <div class="check-price">
                                                                    $ {{ number_format($product->original_price, 2) }}
                                                                </div>
                                                                <div class="price">
                                                                    <div class="price">
                                                                        $ {{ number_format($product->discounted_price, 2) }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
--}}


    <section class="section-big-pb-space ratio_40 pb-10">
        <!--tab product-->
        <section class="section-py-space">
            <div class="tab-product-main">
                <div class="tab-prodcut-contain">
                    <ul class="tabs tab-title">
                        @foreach ($popularProducts as $categoryId => $products)
                            <li class="{{ $loop->first ? 'current' : '' }}"><a
                                    href="tab-{{ $products->first()->category->id }}">{{ $products->first()->category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
        <!--tab product-->
        <div class="custom-container product">
            <div class="row">
                <div class="col pr-0">
                    <div class="theme-tab product tab-abjust">
                        <div class="tab-content-cls">

                            @foreach ($popularProducts as $categoryId => $products)
                                <div id="tab-{{ $products->first()->category->id }}"
                                    class="tab-content {{ $loop->first ? 'active default' : '' }}">
                                    <div class="product-slide-6 product-m no-arrow">
                                        @foreach ($products as $product)
                                            <div>
                                                <div class="product-box">
                                                    <div class="product-imgbox">
                                                        @if (!empty($product->id))
                                                            <a href="{{ route('front.product.show', [$product->id]) }}">

                                                                <div class="product-front">
                                                                    <img src="{{ asset('uploads/custom-images2/' . $product->thumb_image) }}"
                                                                        class="img-fluid  " alt="product">
                                                                </div>
                                                                <div class="product-back">
                                                                    <img src="{{ asset('uploads/custom-images2/' . $product->thumb_image) }}"
                                                                        class="img-fluid  " alt="product">
                                                                </div>
                                                            </a>
                                                        @endif
                                                        <div class="product-icon">
                                                            {{-- <button onclick="openCart()" type="button">
                                                        <i class="ti-bag"></i>
                                                    </button> --}}

                                                            <a style="cursor: pointer" class="openWishlist"
                                                                data-wish_pro_id="{{ $product->id }}"
                                                                title="Add to Wishlist">
                                                                <i class="ti-heart" aria-hidden="true"></i>
                                                            </a>
                                                            <a style="cursor: pointer" id="" class="quickView"
                                                                title="Quick View" data-product_id="{{ $product->id }}">
                                                                <i class="ti-search" aria-hidden="true"></i>
                                                            </a>
                                                            {{-- <a href="compare.html" title="Compare">
                                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                                    </a> --}}
                                                        </div>

                                                        @if ($product->is_free_shipping > 0)
                                                            <div class="new-label">
                                                                <div>ফ্রি শিপিং</div>
                                                            </div>
                                                        @endif

                                                        @if ($product->offer_price > 0)
                                                            <div class="on-sale">মেগা অফার</div>
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
                                                                @if (!empty($product->id))
                                                                    <a
                                                                        href="{{ route('front.product.show', [$product->id]) }}">
                                                                        <h6 class="price-title">
                                                                            {{ \Illuminate\Support\Str::limit($product->name, 30) }}
                                                                        </h6>
                                                                    </a>
                                                                @endif
                                                            </div>
                                                            <div class="detail-right">
                                                                @if (empty($product->offer_price))
                                                                    <div class="price">
                                                                        <div class="price">
                                                                            ৳ {{ $product->price }}
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <div class="check-price">
                                                                        ৳ {{ $product->price }}
                                                                    </div>
                                                                    <div class="price">
                                                                        <div class="price">
                                                                            ৳ {{ $product->offer_price }}
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="{{ asset('assets') }}/images/layout-1/product/1.jpg"
                                                        class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="{{ asset('assets') }}/images/layout-1/product/a1.jpg"
                                                        class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon">
                                                    <button onclick="openCart()" type="button">
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
                                    </div> --}}
                                        @endforeach

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- media tab end -->
    {{-- <div>
        <div class="product-box">
            <div class="product-imgbox">
                <div class="product-front">
                    <img src="{{ asset('assets') }}/images/layout-1/product/2.jpg"
                        class="img-fluid  " alt="product">
                </div>
                <div class="product-back">
                    <img src="{{ asset('assets') }}/images/layout-1/product/a2.jpg"
                        class="img-fluid  " alt="product">
                </div>
                <div class="product-icon">
                    <button onclick="openCart()" type="button">
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
    </div>
    <div>
        <div class="product-box">
            <div class="product-imgbox">
                <div class="product-front">
                    <img src="{{ asset('assets') }}/images/layout-1/product/3.jpg"
                        class="img-fluid  " alt="product">
                </div>
                <div class="product-back">
                    <img src="{{ asset('assets') }}/images/layout-1/product/a3.jpg"
                        class="img-fluid  " alt="product">
                </div>
                <div class="product-icon">
                    <button onclick="openCart()" type="button">
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
    </div>
    <div>
        <div class="product-box">
            <div class="product-imgbox">
                <div class="product-front">
                    <img src="{{ asset('assets') }}/images/layout-1/product/4.jpg"
                        class="img-fluid  " alt="product">
                </div>
                <div class="product-back">
                    <img src="{{ asset('assets') }}/images/layout-1/product/a4.jpg"
                        class="img-fluid  " alt="product">
                </div>
                <div class="product-icon">
                    <button onclick="openCart()" type="button">
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
    </div>
    <div>
        <div class="product-box">
            <div class="product-imgbox">
                <div class="product-front">
                    <img src="{{ asset('assets') }}/images/layout-1/product/5.jpg"
                        class="img-fluid  " alt="product">
                </div>
                <div class="product-back">
                    <img src="{{ asset('assets') }}/images/layout-1/product/a5.jpg"
                        class="img-fluid  " alt="product">
                </div>
                <div class="product-icon">
                    <button onclick="openCart()" type="button">
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
    </div>
    <div>
        <div class="product-box">
            <div class="product-imgbox">
                <div class="product-front">
                    <img src="{{ asset('assets') }}/images/layout-1/product/6.jpg"
                        class="img-fluid  " alt="product">
                </div>
                <div class="product-back">
                    <img src="{{ asset('assets') }}/images/layout-1/product/a6.jpg"
                        class="img-fluid  " alt="product">
                </div>
                <div class="product-icon">
                    <button onclick="openCart()" type="button">
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
    </div>
    <div>
        <div class="product-box">
            <div class="product-imgbox">
                <div class="product-front">
                    <img src="{{ asset('assets') }}/images/layout-1/product/7.jpg"
                        class="img-fluid" alt="product">
                </div>
                <div class="product-back">
                    <img src="{{ asset('assets') }}/images/layout-1/product/a7.jpg"
                        class="img-fluid  " alt="product">
                </div>
                <div class="product-icon">
                    <button onclick="openCart()" type="button">
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
    </div>
    <div>
        <div class="product-box">
            <div class="product-imgbox">
                <div class="product-front">
                    <img src="{{ asset('assets') }}/images/layout-1/product/8.jpg"
                        class="img-fluid" alt="product">
                </div>
                <div class="product-back">
                    <img src="{{ asset('assets') }}/images/layout-1/product/a8.jpg"
                        class="img-fluid  " alt="product">
                </div>
                <div class="product-icon">
                    <button onclick="openCart()" type="button">
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
    </div>

    <div id="tab-2" class="tab-content">
        <div class="product-slide-6 product-m no-arrow">
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/8.jpg"
                                class="img-fluid" alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a8.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/1.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a1.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/2.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a2.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/3.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a3.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/4.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a4.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/5.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a5.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/6.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a6.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/7.jpg"
                                class="img-fluid" alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a7.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
        </div>
    </div>
    <div id="tab-3" class="tab-content">
        <div class="product-slide-6 product-m no-arrow">
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/7.jpg"
                                class="img-fluid" alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a7.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/8.jpg"
                                class="img-fluid" alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a8.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/1.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a1.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/2.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a2.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/3.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a3.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/4.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a4.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/5.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a5.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/6.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a6.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
        </div>
    </div>
    <div id="tab-4" class="tab-content">
        <div class="product-slide-6 product-m no-arrow">
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/6.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a6.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/7.jpg"
                                class="img-fluid" alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a7.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/8.jpg"
                                class="img-fluid" alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a8.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/1.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a1.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/2.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a2.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/3.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a3.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/4.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a4.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/5.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a5.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
        </div>
    </div>
    <div id="tab-5" class="tab-content">
        <div class="product-slide-6 product-m no-arrow">
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/5.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a5.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/6.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a6.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/7.jpg"
                                class="img-fluid" alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a7.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/8.jpg"
                                class="img-fluid" alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a8.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/1.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a1.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/2.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a2.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/3.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a3.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/4.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a4.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
        </div>
    </div>
    <div id="tab-6" class="tab-content">
        <div class="product-slide-6 product-m no-arrow">
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/4.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a4.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/5.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a5.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/6.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a6.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/7.jpg"
                                class="img-fluid" alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a7.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/8.jpg"
                                class="img-fluid" alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a8.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/1.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a1.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/2.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a2.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
            <div>
                <div class="product-box">
                    <div class="product-imgbox">
                        <div class="product-front">
                            <img src="{{ asset('assets') }}/images/layout-1/product/3.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-back">
                            <img src="{{ asset('assets') }}/images/layout-1/product/a3.jpg"
                                class="img-fluid  " alt="product">
                        </div>
                        <div class="product-icon">
                            <button onclick="openCart()" type="button">
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
            </div>
        </div>
    </div>
 --}}

















    <!--deal banner start-->
    <section class="deal-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="deal-banner-containe">
                        <h2>
                            save up to 30% to 40% off
                        </h2>
                        <h1>
                            omg! just look at the great deals!
                        </h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 ">
                    <div class="deal-banner-containe">
                        <diV class="deal-btn">
                            <a href="{{ route('front.flash-sell') }}" class="btn-white">
                                View more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--deal banner end-->

    <!--media-banner start-->
    <section class="section-big-py-space b-g-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="media-slide no-arrow">
                        @foreach ($data as $section)
                            <div>
                                <div class="media-banner ">
                                    <div class="media-banner-box">
                                        <div class="media-heading">
                                            <h5>{{ $section['title'] }}</h5>
                                        </div>
                                    </div>
                                    @foreach ($section['products'] as $product)
                                        <div class="media-banner-box">
                                            <div class="media">
                                                <a href="{{ route('front.product.show', [$product->id]) }}"><img
                                                        height="108" width="84"
                                                        src="{{ asset('uploads/custom-images2/' . $product->thumb_image) }}"
                                                        class="img-fluid  " alt="banner"></a>
                                                {{-- <img src="{{ asset('assets') }}/images/layout-1/media-banner/1.jpg"
                                            class="img-fluid  " alt="banner"> --}}
                                                <div class="media-body">
                                                    <div class="media-contant">
                                                        <div>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="{{ route('front.product.show', [$product->id]) }}">
                                                                <p>{{ $product->name }}</p>
                                                            </a>
                                                            @if (empty($product->offer_price))
                                                                <h6>৳ {{ $product->price }}</h6>
                                                            @else
                                                                <h6> ৳ {{ $product->offer_price }}</h6>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="media-banner-box">
                                        <div class="media-view">
                                            <h5>Click to buy now</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- <div>
                            <div class="media-banner">
                                <div class="media-banner-box">
                                    <div class="media-heading">
                                        <h5>Feature products</h5>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <img src="{{ asset('assets') }}/images/layout-1/media-banner/3.jpg"
                                            class="img-fluid  " alt="banner">
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <p>
                                                        Generator
                                                        on Internet.
                                                    </p>
                                                    <h6>$153.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <img src="{{ asset('assets') }}/images/layout-1/media-banner/4.jpg"
                                            class="img-fluid  " alt="banner">
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <p>
                                                        Generator
                                                        on Internet.
                                                    </p>
                                                    <h6>$153.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media-view">
                                        <h5>View More</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="media-banner">
                                <div class="media-banner-box">
                                    <div class="media-heading">
                                        <h5>Best Sellers</h5>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <img src="{{ asset('assets') }}/images/layout-1/media-banner/1.jpg"
                                            class="img-fluid  " alt="banner">
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <p>
                                                        Generator
                                                        on Internet.
                                                    </p>
                                                    <h6>$153.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <img src="{{ asset('assets') }}/images/layout-1/media-banner/2.jpg"
                                            class="img-fluid  " alt="banner">
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <p>
                                                        Generator
                                                        on Internet.
                                                    </p>
                                                    <h6>$153.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media-view">
                                        <h5>View More</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="media-banner border-0">
                                <div class="media-banner-box">
                                    <div class="media-heading">
                                        <h5>50% off</h5>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <img src="{{ asset('assets') }}/images/layout-1/media-banner/3.jpg"
                                            class="img-fluid  " alt="banner">
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <p>
                                                        Generator
                                                        on Internet.
                                                    </p>
                                                    <h6>$153.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <img src="{{ asset('assets') }}/images/layout-1/media-banner/4.jpg"
                                            class="img-fluid  " alt="banner">
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <p>
                                                        Generator
                                                        on Internet.
                                                    </p>
                                                    <h6>$153.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media-view">
                                        <h5>View More</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="media-banner">
                                <div class="media-banner-box">
                                    <div class="media-heading">
                                        <h5>Best Sellers</h5>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <img src="{{ asset('assets') }}/images/layout-1/media-banner/1.jpg"
                                            class="img-fluid  " alt="banner">
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <p>
                                                        Generator
                                                        on Internet.
                                                    </p>
                                                    <h6>$153.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media">
                                        <img src="{{ asset('assets') }}/images/layout-1/media-banner/2.jpg"
                                            class="img-fluid  " alt="banner">
                                        <div class="media-body">
                                            <div class="media-contant">
                                                <div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <p>
                                                        Generator
                                                        on Internet.
                                                    </p>
                                                    <h6>$153.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-banner-box">
                                    <div class="media-view">
                                        <h5>View More</h5>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--media-banner end-->



    <!--blog start-->
    <section class="blog ">
        <!--title start-->
        <div class="title3">
            <h4>letest blog</h4>
        </div>
        <!--title end-->
        <div class="container">
            <div class="row">
                <div class="col pr-0">
                    <div class="blog-slide no-arrow">
                        @foreach ($latestBlogs as $blog)
                            <div>
                                <div class="blog-contain">
                                    <div class="blog-img">
                                        <img src="{{ $blog->image }}" alt="blog" class="img-fluid  w-100">
                                    </div>
                                    <div class="blog-details">
                                        <h4>{{ $blog->title }}</h4>
                                        <p style="text-align: justify">{{ substr($blog->seo_description, 0, 40) }}</p>
                                        <span><a href="{{ route('front.blog.show', $blog->slug) }}">read more</a></span>
                                    </div>
                                    <div class="blog-label">
                                        <p>{{ $blog->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog end-->

    <!--box categroy start-->
    {{-- <section class="box-category section-pt-space">
    <div class="container-fluid ">
        <div class="row">
            <div class="col pl-0">
                <div class="slide-10 no-arrow">
                    <div>
                        <a href="#">
                            <div class="box-category-contain">
                                <h4>10% off</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="box-category-contain">
                                <h4>under @99</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="box-category-contain">
                                <h4>free shipping</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="box-category-contain">
                                <h4>extra 10% off</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="box-category-contain">
                                <h4>$79 cashback</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="box-category-contain">
                                <h4>80% off</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="box-category-contain">
                                <h4>on sale</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="box-category-contain">
                                <h4>only $49</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="box-category-contain">
                                <h4>under @150</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="box-category-contain">
                                <h4>save money</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="box-category-contain">
                                <h4>80% off</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section> --}}
    <!--box category end-->

    {{-- <!--title start-->
    <div class="title1 section-my-space">
        <h4>Special Products</h4>
    </div>
    <!--title end-->


    <!--product start-->
    <section class="product section-big-pb-space">
        <div class="custom-container">
            <div class="row ">
                <div class="col pr-0">
                    <div class="product-slide-6 no-arrow mb--10">
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="{{ asset('assets') }}/images/layout-1/product/1.jpg"
                                            class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="{{ asset('assets') }}/images/layout-1/product/a1.jpg"
                                            class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-icon">
                                        <button onclick="openCart()" type="button">
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
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="{{ asset('assets') }}/images/layout-1/product/2.jpg"
                                            class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="{{ asset('assets') }}/images/layout-1/product/a2.jpg"
                                            class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-icon">
                                        <button onclick="openCart()" type="button">
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
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="{{ asset('assets') }}/images/layout-1/product/3.jpg"
                                            class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="{{ asset('assets') }}/images/layout-1/product/a3.jpg"
                                            class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-icon">
                                        <button onclick="openCart()" type="button">
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
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="{{ asset('assets') }}/images/layout-1/product/4.jpg"
                                            class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="{{ asset('assets') }}/images/layout-1/product/a4.jpg"
                                            class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-icon">
                                        <button onclick="openCart()" type="button">
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
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="{{ asset('assets') }}/images/layout-1/product/5.jpg"
                                            class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="{{ asset('assets') }}/images/layout-1/product/a5.jpg"
                                            class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-icon">
                                        <button onclick="openCart()" type="button">
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
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="{{ asset('assets') }}/images/layout-1/product/6.jpg"
                                            class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="{{ asset('assets') }}/images/layout-1/product/a6.jpg"
                                            class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-icon">
                                        <button onclick="openCart()" type="button">
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
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="{{ asset('assets') }}/images/layout-1/product/7.jpg"
                                            class="img-fluid" alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="{{ asset('assets') }}/images/layout-1/product/a7.jpg"
                                            class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-icon">
                                        <button onclick="openCart()" type="button">
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
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <img src="{{ asset('assets') }}/images/layout-1/product/7.jpg"
                                            class="img-fluid" alt="product">
                                    </div>
                                    <div class="product-back">
                                        <img src="{{ asset('assets') }}/images/layout-1/product/a7.jpg"
                                            class="img-fluid  " alt="product">
                                    </div>
                                    <div class="product-icon">
                                        <button onclick="openCart()" type="button">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product end--> --}}

    <!--testimonial start-->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-1 no-arrow">
                        @foreach ($testimonials as $testimonial)
                        <div>
                            <div class="testimonial-contain">
                                <div class="media">
                                    <div class="testimonial-img">
                                        <img src="{{ asset($testimonial->image) }}" class="img-fluid rounded-circle " alt="testimonial">
                                    </div>
                                    <div class="media-body">
                                        <h5>{{ $testimonial->name }}</h5>
                                        <p style="text-align: justify">{{  $testimonial->comment }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial end-->

    <!--instagram start-->
    {{-- <section class="instagram section-big-pt-space">
    <div class="container">
        <div class="row">
            <div class="col ">
                <div class="insta-contant no-arrow">
                    <div class="slide-7 no-arrow">
                        <div>
                            <div class="instagram-box">
                                <img src="{{ asset('assets') }}/images/insta/1.jpg" class="img-fluid  " alt="insta">
                                <div class="insta-cover">
                                    <i class="fa fa-instagram" ></i>
                                </div>
                            </div>
                            <div class="instagram-box">
                                <img src="{{ asset('assets') }}/images/insta/2.jpg" class="img-fluid  " alt="insta">
                                <div class="insta-cover">
                                    <i class="fa fa-instagram" ></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="instagram-box">
                                <img src="{{ asset('assets') }}/images/insta/3.jpg" class="img-fluid  " alt="insta">
                                <div class="insta-cover">
                                    <i class="fa fa-instagram" ></i>
                                </div>
                            </div>
                            <div class="instagram-box">
                                <img src="{{ asset('assets') }}/images/insta/4.jpg" class="img-fluid  " alt="insta">
                                <div class="insta-cover">
                                    <i class="fa fa-instagram" ></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="instagram-box">
                                <img src="{{ asset('assets') }}/images/insta/5.jpg" class="img-fluid  " alt="insta">
                                <div class="insta-cover">
                                    <i class="fa fa-instagram" ></i>
                                </div>
                            </div>
                            <div class="instagram-box">
                                <img src="{{ asset('assets') }}/images/insta/6.jpg" class="img-fluid  " alt="insta">
                                <div class="insta-cover">
                                    <i class="fa fa-instagram" ></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="instagram-box">
                                <img src="{{ asset('assets') }}/images/insta/7.jpg" class="img-fluid  " alt="insta">
                                <div class="insta-cover">
                                    <i class="fa fa-instagram" ></i>
                                </div>
                            </div>
                            <div class="instagram-box">
                                <img src="{{ asset('assets') }}/images/insta/8.jpg" class="img-fluid  " alt="insta">
                                <div class="insta-cover">
                                    <i class="fa fa-instagram" ></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="instagram-box">
                                <img src="{{ asset('assets') }}/images/insta/9.jpg" class="img-fluid  " alt="insta">
                                <div class="insta-cover">
                                    <i class="fa fa-instagram" ></i>
                                </div>
                            </div>
                            <div class="instagram-box">
                                <img src="{{ asset('assets') }}/images/insta/10.jpg" class="img-fluid  " alt="insta">
                                <div class="insta-cover">
                                    <i class="fa fa-instagram" ></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="instagram-box">
                                <img src="{{ asset('assets') }}/images/insta/11.jpg" class="img-fluid    " alt="insta">
                                <div class="insta-cover">
                                    <i class="fa fa-instagram" ></i>
                                </div>
                            </div>
                            <div class="instagram-box">
                                <img src="{{ asset('assets') }}/images/insta/12.jpg" class="img-fluid    " alt="insta">
                                <div class="insta-cover">
                                    <i class="fa fa-instagram" ></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="instagram-box">
                                <img src="{{ asset('assets') }}/images/insta/13.jpg" class="img-fluid    " alt="insta">
                                <div class="insta-cover">
                                    <i class="fa fa-instagram" ></i>
                                </div>
                            </div>
                            <div class="instagram-box">
                                <img src="{{ asset('assets') }}/images/insta/14.jpg" class="img-fluid    " alt="insta">
                                <div class="insta-cover">
                                    <i class="fa fa-instagram" ></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="instagram-box">
                                <img src="{{ asset('assets') }}/images/insta/2.jpg" class="img-fluid    " alt="insta">
                                <div class="insta-cover">
                                    <i class="fa fa-instagram" ></i>
                                </div>
                            </div>
                            <div class="instagram-box">
                                <img src="{{ asset('assets') }}/images/insta/6.jpg" class="img-fluid    " alt="insta">
                                <div class="insta-cover">
                                    <i class="fa fa-instagram" ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="insta-sub-contant">
                        <div class="insta-title">
                            <h4><span>#</span>INSTAGRAM</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    <!--instagram end-->
@endsection
