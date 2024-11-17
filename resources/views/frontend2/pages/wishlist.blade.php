@extends('frontend2.layouts.common-master')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>wishlist</h2>
                            <ul>
                                <li><a href="{{ route('front.home') }}">home</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a href="{{ route('front.wishlist.index') }}">wishlist</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!--section start-->
    <section class="wishlist-section section-big-py-space bg-light">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table cart-table table-responsive-xs">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">image</th>
                                <th scope="col">product name</th>
                                <th scope="col">price</th>
                                <th scope="col">availability</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        @foreach ($wishlists as $wishlist)
                            <tbody>
                                <tr>

                                    <td>
                                        <a href="#"><img
                                                src="{{ asset('uploads/custom-images2/' . $wishlist->product->thumb_image) }}"
                                                class="img-fluid" alt="product"></a>
                                    </td>
                                    <td><a href="#">{{ $wishlist->product->name }}</a>
                                        <div class="mobile-cart-content row">
                                            <div class="col-xs-3">
                                                <p>in stock</p>
                                            </div>
                                            <div class="col-xs-3">
                                                <h2 class="td-color">$63.00</h2>
                                            </div>
                                            <div class="col-xs-3">
                                                <h2 class="td-color"><a class="icon mr-1"><i class="ti-close"></i></a>
                                                    <a href="#" class="cart"><i class="ti-shopping-cart"></i></a>
                                                </h2>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h2>Tk {{ $wishlist->product->price }}</h2>
                                    </td>
                                    <td>
                                        <p>in stock</p>
                                    </td>
                                    <td><a style="cursor: pointer" data-product_id="{{ $wishlist->product_id }}" data-user_id="{{ $wishlist->user_id }}" class="wishDelete icon mr-3"><i
                                                class="ti-close"></i></a><a href="#" class="cart"><i
                                                class="ti-shopping-cart"></i></a></td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="row wishlist-buttons">
                <div class="col-12"><a href="#" class="btn btn-normal">continue shopping</a> <a href="#"
                        class="btn btn-normal">check out</a></div>
            </div>
        </div>
    </section>
    <!--section end-->
@endsection
@section('script')
    <script>
        $(document).on("click", ".wishDelete", async function() {
            let userId = $(this).data('user_id');
            let productId = $(this).data('product_id');
            showLoader();
            const respons = await axios.post("/wishlist/delete", {
                userId: userId,
                productId: productId,
            });
            hideLoader();
            if (respons.data.status == "success") {
                successToast(respons.data.message);
                setTimeout(() => {
                    window.location.reload();
                }, 1000);
            }
        });
    </script>
@endsection
