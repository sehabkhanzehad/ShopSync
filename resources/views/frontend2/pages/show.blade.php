@extends('frontend2.layouts.common-master')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>product</h2>
                            <ul>
                                <li><a href="{{ route('front.home') }}">home</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a href="{{ route('front.product.show', $product->id) }}">product</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- section start -->
    <section class="section-big-pt-space bg-light">
        <div class="collection-wrapper">
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-5">

                        <div class="product-slick no-arrow">

                            <div><img id="showImage" src="{{ asset('uploads/custom-images/' . $product->thumb_image) }}"
                                    alt="" class="img-fluid"></div>

                        </div>

                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-nav">

                                    <div><img src="{{ asset('uploads/custom-images/' . $product->thumb_image) }}"
                                            alt="" class="getSrc1 img-fluid  image_zoom_cls-0"></div>

                                    @forelse($product->gallery as $key => $img_gals)
                                        <div><img id="getSrc" src="{{ asset($img_gals->image) }}" alt=""
                                                class=" img-fluid image_zoom_cls-1"></div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-lg-7 rtl-text">
                        <div class="product-right">
                            <h2>{{ $product->name }}</h2>
                            <input type="hidden" name="pro_img" id="pro_img">
                            <input type="hidden" name="type" id="type" value="{{ $product->type }}">
                            @if (!empty($product->offer_price))
                                @if ($product->offer_price > 0 && $product->price > 0)
                                    <h4><del>{{ $product->price }}
                                            tk</del><span>{{ $product->price - $product->offer_price }} tk
                                            discount.</span>
                                    </h4>
                                    <input type="hidden" id="retrieve_price" value="{{ $product->price }}">
                                    @if ($product->type != 'single')
                                        <input type="hidden" id="retrieve_discount">
                                    @else
                                        <input type="hidden" id="retrieve_discount"
                                            value="{{ $product->price - $product->offer_price }}">
                                    @endif
                                @endif
                                <h3><span class="current-price-product">{{ $product->offer_price }}</span> tk</h3>
                            @else
                                <h3>ট<span class="current-price-product">{{ $product->price }}</span></h3>
                            @endif

                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="product_name" value="{{ $product->name }}">
                            <input type="hidden" name="category_id" value="{{ $product->category_id }}">
                            @if ($product->offer_price != '0')
                                <input type="hidden" name="price" id="price_val" value="{{ $product->offer_price }}">
                            @else
                                <input type="hidden" name="price" id="price_val" value="{{ $product->price }}">
                            @endif





                            {{-- <h4><del>$459.00</del><span>55% off</span></h4>
                        <h3>$32.96</h3> --}}


                            {{-- <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul> --}}











                            <div class="product-description border-product">

                                {{-- <h6 class="product-title size-text">select size <span><a href="" data-toggle="modal"
                                            data-target="#sizemodal">size chart</a></span></h6>

                                <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Sheer Straight Kurta</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body"><img src="../assets/images/size-chart.jpg"
                                                    alt="" class="img-fluid "></div>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- <div class="size-box">
                                        <ul>
                                            <li class="active"><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                        </ul>
                                    </div> --}}


                                @if ($product->type == 'variable')
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
                                @endif

                                @if (!empty($product->prod_color == 'varcolor'))
                                    @if ($product->type == 'variable')
                                        <h6 id="select_color">Select Color : </h6>
                                    @else
                                    @endif

                                    <div class="colors" id="colors">
                                        @foreach ($product->colorVariations as $v)
                                            @if (!empty($v->color->code))
                                                <div class="color" style="background: {{ $v->color->code }}"
                                                    data-proid="{{ $v->product_id }}" data-colorid="{{ $v->color_id }}"
                                                    data-varcolor="{{ $v->color->name }}" value="{{ $v->id }}"
                                                    data-variationColorId="{{ $v->color_id }}">
                                                    <input type="hidden" id="color_val" name="color_id">
                                                    <!--<img src="{{ asset($v->var_images) }}" width="50px" height="50px" /> -->
                                                    <input type="hidden" id="color_value" name="variationColor_id">
                                                    <input type="hidden" id="variation_color_id"
                                                        name="variation_color_id">
                                                </div>
                                            @else
                                                Color Not Available
                                            @endif
                                        @endforeach
                                    </div>
                                @else
                                    <input type="hidden" id="color_value" name="variationColor_id" value="default">
                                    <input type="hidden" id="variation_color_id" name="variation_color_id"
                                        value="1">
                                @endif



                                <h6 class="product-title">quantity</h6>
                                <div class="qty-box">

                                    <div class="input-group">

                                        <span class="input-group-prepend">
                                            <button type="button" class="btn quantity-left-minus" data-type="minus"
                                                data-field=""><i class="ti-angle-left"></i></button>
                                        </span>

                                        <input type="text" min="1" name="quantity" id="quantity"
                                            class="form-control input-number" value="1">

                                        <span class="input-group-prepend">
                                            <button type="button" class="btn quantity-right-plus" data-type="plus"
                                                data-field=""><i class="ti-angle-right"></i></button>
                                        </span>
                                    </div>


                                </div>
                            </div>




                            <div class="product-buttons">
                                <a data-id="{{ $product->id }}" data-url="{{ route('front.cart.store') }}"
                                    class="btn btn-normal add-to-cart bold add_cart">add to cart</a>

                                {{-- <a href="#"class="btn btn-normal">add to cart</a> --}}
                                <a data-id="{{ $product->id }}" data-url="{{ route('front.cart.store') }}"
                                    class="btn btn-normal buy-now">buy now</a>
                            </div>

                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>{!! $product->long_description !!}</p>
                            </div>

                            {{-- <div class="border-product">
                                <div class="product-icon">
                                    <ul class="product-social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                    <form class="d-inline-block">
                                        <button class="wishlist-btn"><i class="fa fa-heart"></i><span
                                                class="title-font">Add
                                                To WishList</span></button>
                                    </form>
                                </div>
                            </div> --}}
                            {{-- <div class="border-product ">
                                <h6 class="product-title">Time Reminder</h6>
                                <div class="timer">
                                    <p id="demo"><span>25 <span class="padding-l">:</span> <span
                                                class="timer-cal">Days</span> </span><span>22 <span
                                                class="padding-l">:</span> <span class="timer-cal">Hrs</span>
                                        </span><span>13 <span class="padding-l">:</span> <span
                                                class="timer-cal">Min</span> </span><span>57 <span
                                                class="timer-cal">Sec</span></span>
                                    </p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- product-tab starts -->
    <section class=" tab-product  tab-exes ">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 ">
                    <div class=" creative-card creative-inner">
                        <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-toggle="tab"
                                    href="#top-home" role="tab" aria-selected="true">Description</a>
                                <div class="material-border"></div>
                            </li>
                            {{-- <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab"
                                    href="#top-profile" role="tab" aria-selected="false">Details</a>
                                <div class="material-border"></div>
                            </li> --}}
                            <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab"
                                    href="#top-contact" role="tab" aria-selected="false">Video</a>
                                <div class="material-border"></div>
                            </li>
                            <li class="nav-item"><a class="nav-link" id="review-top-tab" data-toggle="tab"
                                    href="#top-review" role="tab" aria-selected="false">Write Review</a>
                                <div class="material-border"></div>
                            </li>
                        </ul>
                        <div class="tab-content nav-material" id="top-tabContent">
                            <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                                aria-labelledby="top-home-tab">
                                <p>{!! $product->long_description !!}</p>
                            </div>

                            {{-- <div class="tab-pane fade" id="top-profile" role="tabpanel"
                                aria-labelledby="profile-top-tab">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <div class="single-product-tables">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Febric</td>
                                                <td>Chiffon</td>
                                            </tr>
                                            <tr>
                                                <td>Color</td>
                                                <td>Red</td>
                                            </tr>
                                            <tr>
                                                <td>Material</td>
                                                <td>Crepe printed</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Length</td>
                                                <td>50 Inches</td>
                                            </tr>
                                            <tr>
                                                <td>Size</td>
                                                <td>S, M, L .XXL</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                             --}}
                            <div class="tab-pane fade" id="top-contact" role="tabpanel"
                                aria-labelledby="contact-top-tab">
                                <div class="mt-4 text-center">
                                    <iframe width="560" height="315" src=" {!! $product->video_link !!}"
                                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                                @auth
                                    <form action="{{ route('front.product.product-reviews.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <div class="form-group">
                                            <label for="rating">Rating:</label>
                                            <select name="rating" id="rating" class="form-control">
                                                <option value="1">1 Star</option>
                                                <option value="2">2 Star</option>
                                                <option value="3">3 Star</option>
                                                <option value="4">4 Star</option>
                                                <option value="5">5 Star</option>
                                                <!-- Add more options for ratings -->
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="review">Review:</label>
                                            <textarea name="review" id="review" rows="4" class="form-control"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-normal">Submit Review</button>
                                    </form>
                                @else
                                    <p>Please <a href="{{ url('login-user') }}" class="btn btn-normal">login</a> to submit a
                                        review.</p>
                                @endauth
                                <style>
                                    .fa-solid {
                                        color: #F2C94C;
                                    }

                                    p.rev {
                                        font-size: 17px;
                                    }

                                    p.rev_user {
                                        font-size: 25px;
                                    }
                                </style>
                                @forelse($reviews as $key=>$rev)
                                    <br />
                                    <div class="container card">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="rev_user" style="font-weight:bold;">
                                                    <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o="
                                                        alt="Avater" width="70px" height="70px" />
                                                    {{ $rev->user->name }}
                                                </p>
                                            </div>
                                            <div class="col-md-6" style="text-align: right;">
                                                <p style="margin-left:8%;font-weight:bolder;margin-top: 15px;">
                                                    @if ($rev->rating == 1)
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    @elseif($rev->rating == 2)
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    @elseif($rev->rating == 3)
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    @elseif($rev->rating == 4)
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    @else
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    @endif
                                                    ({{ $rev->rating }}/5)
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="price"
                                                style="margin-left: 7%; margin-top: -2%; font-weight: bold;">
                                                {{ $rev->review }}</p>
                                        </div>
                                        <br><br>
                                    </div>
                                @empty
                                    <p> No reviews. </p>
                                @endforelse
                            </div>
                            {{-- <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                                <form class="theme-form">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="media">
                                                <label>Rating</label>
                                                <div class="media-body ml-3">
                                                    <div class="rating three-star"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Enter Your name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email"
                                                placeholder="Email" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="review">Review Title</label>
                                            <input type="text" class="form-control" id="review"
                                                placeholder="Enter your Review Subjects" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="review">Review Title</label>
                                            <textarea class="form-control" placeholder="Wrire Your Testimonial Here" id="exampleFormControlTextarea1"
                                                rows="6"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-normal" type="submit">Submit YOur Review</button>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-tab ends -->

    <!-- related products -->
    <section class="section-big-py-space  ratio_asos bg-light">
        <div class="custom-container">
            <div class="row">
                <div class="col-12 product-related">
                    <h2>related products</h2>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 product">
                    <div class="product-slide no-arrow">

                        @forelse($relatedProducts as $key => $product)
                            <div>
                                <div class="product-box">
                                    <div class="product-imgbox">
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
                                                        {{ \Illuminate\Support\Str::limit($product->name, 35) }}</h6>
                                                </a>
                                            </div>
                                            <div class="detail-right">

                                                @if (empty($product->offer_price))
                                                    <div class="price">
                                                        <div class="price">{{ $product->price }} Tk</div>
                                                    </div>
                                                @else
                                                    <div class="check-price">{{ $product->price }} Tk</div>

                                                    <div class="price">
                                                        <div class="price">{{ $product->offer_price }} Tk</div>
                                                    </div>
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
                                            <a style="cursor: pointer" id="" class="quickView"
                                                title="Quick View" data-product_id="{{ $product->id }}"> <i
                                                    class="ti-search" aria-hidden="true"></i>
                                            </a>
                                            {{-- <a href="compare.html" title="Compare">
                                                <i class="fa fa-exchange" aria-hidden="true"></i>
                                            </a> --}}
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
    <!-- related products -->
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            let defaultSize = $('#sizes .size.active');
            if (defaultSize.length === 0) {
                defaultSize = $('#sizes .size').first();
            }
            // $('#sizes .size').removeClass('active');
            // defaultSize.addClass('active');
            defaultSize.find('a').trigger('click');
        });
    </script>

    <script>
        $("#getSrc").click(function() {
            let image = $(this).attr('src');
            $("#showImage").attr('src', image);
        });
        $(".getSrc1").click(function() {
            let image = $(this).attr('src');
            $("#showImage").attr('src', image);

        });
    </script>
@endsection


@push('js')
    <script>
        $(function() {

            $(document).on('click', '.buy-now', function(e) {

                let variation_id = $('#size_variation_id').val();
                let variation_size = $('#size_value').val();
                let variation_size_id = $('input[name="variation_size_id"]').val();
                let variation_color = $('#color_value').val();
                let variation_color_id = $('input[name="variation_color_id"]').val();
                let variation_price = $('#pro_price').val();
                var quantity = $('#quantity').val();
                let image = $('input#pro_img').val();
                let pro_type = $('input#type').val();


                let proName = $('input[name="product_name"]').val();
                let proId = $('input[name="product_id"]').val();
                let catId = $('input[name="category_id"]').val();

                // alert(variation_id);

                window.dataLayer = window.dataLayer || [];

                dataLayer.push({
                    ecommerce: null
                });
                dataLayer.push({
                    event: "add_to_cart",
                    ecommerce: {
                        currency: "BDT",
                        value: variation_price,
                        items: [{
                            item_id: proId,
                            item_name: proName,
                            item_category: catId,
                            price: variation_price,
                            quantity: quantity
                        }]
                    }
                });


                let id = $(this).data('id');
                let url = $(this).data('url');

                addToCart(url, id, variation_size, variation_color, variation_id, variation_price, quantity,
                    variation_size_id, variation_color_id, image, pro_type, type = "");
            });


            function addToCart(url, id, varSize = "", varColor = "", variation_id = "", variation_price = "",
                quantity, variation_size_id, variation_color_id, image = "", pro_type, type = "") {

                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                showLoader();
                $.ajax({
                    type: "POST",
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        id,
                        varSize,
                        varColor,
                        variation_id,
                        variation_price,
                        quantity,
                        variation_size_id,
                        variation_color_id,
                        image,
                        pro_type
                    },
                    success: function(res) {

                        if (res.status) {
                            // toastr.success(res.msg);
                            // alert('Product added to cart');
                            hideLoader();
                            successToast(res.msg);
                            // set timeout to show success message
                            setTimeout(function() {
                                document.location.href = "{{ route('front.checkout.index') }}";
                            }, 1000);

                        } else {
                            // Check if the response contains validation errors
                            if (res.errors) {
                                for (var field in res.errors) {
                                    if (res.errors.hasOwnProperty(field)) {
                                        for (var i = 0; i < res.errors[field].length; i++) {
                                            // toastr.error(res.errors[field][i]);
                                            alert(res.errors[field][i]);
                                        }
                                    }
                                }
                            } else {
                                // toastr.error(res.msg ||'An error occurred while processing your request.');
                                alert("Error2");
                            }
                        }

                    },
                    error: function(xhr, status, error) {
                        // toastr.error('An error occurred while processing your request.');
                        alert("An error occurred while processing your request.");
                    }
                });
            }

            // ... other functions ...


        });
    </script>
    <script>
        $(function() {

            $(document).on('click', '.add-to-cart', function(e) {

                let variation_id = $('#size_variation_id').val();
                let variation_size = $('#size_value').val();
                let variation_size_id = $('input[name="variation_size_id"]').val();
                let variation_color = $('#color_value').val();
                let variation_color_id = $('input[name="variation_color_id"]').val();
                let variation_price = $('#pro_price').val();
                var quantity = $('#quantity').val();
                let image = $('input#pro_img').val();
                let pro_type = $('input#type').val();


                let proName = $('input[name="product_name"]').val();
                let proId = $('input[name="product_id"]').val();
                let catId = $('input[name="category_id"]').val();

                // alert(variation_id);

                window.dataLayer = window.dataLayer || [];

                dataLayer.push({
                    ecommerce: null
                });
                dataLayer.push({
                    event: "add_to_cart",
                    ecommerce: {
                        currency: "BDT",
                        value: variation_price,
                        items: [{
                            item_id: proId,
                            item_name: proName,
                            item_category: catId,
                            price: variation_price,
                            quantity: quantity
                        }]
                    }
                });


                let id = $(this).data('id');
                let url = $(this).data('url');

                addToCart(url, id, variation_size, variation_color, variation_id, variation_price, quantity,
                    variation_size_id, variation_color_id, image, pro_type, type = "");
            });


            function addToCart(url, id, varSize = "", varColor = "", variation_id = "", variation_price = "",
                quantity, variation_size_id, variation_color_id, image = "", pro_type, type = "") {

                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                showLoader();
                $.ajax({
                    type: "POST",
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        id,
                        varSize,
                        varColor,
                        variation_id,
                        variation_price,
                        quantity,
                        variation_size_id,
                        variation_color_id,
                        image,
                        pro_type
                    },
                    success: function(res) {

                        if (res.status) {
                            // toastr.success(res.msg);
                            // alert('Product added to cart');
                            hideLoader();
                            successToast(res.msg);
                            // set timeout to show success message
                            setTimeout(function() {
                                if (type) {

                                    if (res.url !== '') {
                                        document.location.href = res.url;
                                    } else {
                                        alert('no');
                                        // Handle specific case
                                    }
                                } else {
                                    window.location.reload();
                                }
                            }, 1000);

                        } else {
                            // Check if the response contains validation errors
                            if (res.errors) {
                                for (var field in res.errors) {
                                    if (res.errors.hasOwnProperty(field)) {
                                        for (var i = 0; i < res.errors[field].length; i++) {
                                            // toastr.error(res.errors[field][i]);
                                            alert(res.errors[field][i]);
                                        }
                                    }
                                }
                            } else {
                                // toastr.error(res.msg ||'An error occurred while processing your request.');
                                alert("Error2");
                            }
                        }

                    },
                    error: function(xhr, status, error) {
                        // toastr.error('An error occurred while processing your request.');
                        alert("An error occurred while processing your request.");
                    }
                });
            }

            // ... other functions ...


        });
    </script>
@endpush
