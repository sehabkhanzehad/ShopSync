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
                                <li><a>order-history</a></li>
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
                                <th scope="col">Order Id</th>
                                <th scope="col">Order Time</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Status</th>
                                <th scope="col">View</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($orders as $order)
                                <tr>
                                    <td><h4 class="price">{{ $order->order_id }}</h4></td>
                                    <td><h4 class="price">{{ \Carbon\Carbon::parse($order->created_at)->format('j M Y / H:i:s') }}</h4></td>
                                    <td> <h4 class="price">ট {{ $order->total_amount }}</h4></td>

                                    <td> @php $s = $order->order_status; @endphp
                                        @if ($s == 0)
                                        <span class="badge badge-warning"><h4 class="price">Pending</h4></span>
                                        @elseif($s == 1)
                                        <span class="badge badge-success">In Progress</span>
                                        @elseif($s == 2)
                                        <span class="badge badge-success">Delivered</span>
                                        @elseif($s == 3)
                                        <span class="badge badge-success">Completed</span>
                                        @elseif($s == 4)
                                        <span class="badge badge-danger">Declined</span>
                                        @endif
                                    </td>
                                    <td> <a href="{{ route('front.order.show', [$order->id]) }}" class="btn btn-primary text-white">View Details</a></td>
                                </tr>
                            @empty
                                <div>
                                    <strong class="text-danger text-center">No orders are available!</strong>
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- <div class="row cart-buttons">
                <div class="col-12 pull-right"><a href="#" class="btn btn-normal btn-sm">show all orders</a></div>
            </div> --}}
        </div>
    </section>
    <!--section end-->
@endsection
