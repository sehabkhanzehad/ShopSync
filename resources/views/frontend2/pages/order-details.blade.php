@extends('frontend2.layouts.common-master')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>order-history</h2>
                            <ul>
                                <li><a href="{{ route('front.home') }}">home</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a>Order Details</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!--section start-->
    <section class="cart-section order-history section-big-py-space">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table cart-table table-responsive-xs">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">Product Image</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product Quantity</th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $totalAmount = 0; // Initialize totalAmount
                            @endphp
                            @forelse($order->orderProducts as $item)
                                <tr>
                                    <td><img height="100" src="{{ asset('uploads/custom-images2/' . $item->product->thumb_image) }}"
                                            alt="prduct" /></td>
                                    <td><h4 class="price">{{ $item->product->name }}</h4></td>
                                    <td><h4 class="price">{{ $item->qty }}</h4></td>
                                    <td><h4 class="price">{{ $item->unit_price }}</h4></td>
                                    <td><h4 class="price">{{ $item->unit_price * $item->qty }}</h4></td>
                                </tr>
                                @php
                                    $totalAmount += $item->unit_price * $item->qty; // Calculate totalAmount
                                @endphp
                            @empty
                                <tr>
                                    <td colspan="4">No Order found</td>
                                </tr>
                            @endforelse
                            <tr>
                                <td colspan="4"><strong><h4 class="price">Total Amount:</h4></strong></td>
                                <td>
                                    <div>
                                        <h4 class="price">
                                            {{ number_format($totalAmount, 2) }} ৳ <!-- Display total amount -->
                                        </h4>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--section end-->
@endsection
