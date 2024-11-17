@extends('frontend2.layouts.common-master')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>Profile</h2>
                            <ul>
                                <li><a href="{{ route('front.home') }}">home</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a href="{{ route('front.profile') }}">Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- section start -->
    <section class="section-big-py-space bg-light">
        <div class="container">
            <div class="row">

                {{-- <div class="col-lg-3">
                <div class="account-sidebar"><a class="popup-btn">my account</a></div>
                <div class="dashboard-left">
                    <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                    <div class="block-content ">
                        <ul>
                            <li class="active"><a href="{{ route("front.dashboard") }}">Account Info</a></li>
                            <li><a href="#">My Orders</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li class="last"><a href="">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}

                <div class="col-lg-9 m-auto">
                    <div class="dashboard-right">
                        <div class="dashboard">
                            <div class="page-title">
                                <h2>Welcome {{ $user->name }} !</h2>
                            </div>


                            <div class="box-account box-info">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="box">
                                            <div class="box-title">
                                                <h3>Contact Information</h3><a href="#">Edit</a>
                                            </div>
                                            <div class="box-content">
                                                <h6>{{ $user->name }}</h6>
                                                <h6>{{ $user->phone }}</h6>
                                                <h6>{{ $user->email }}</h6>
                                                <h6><a href="">Change Password</a></h6>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div>
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Address</h3><a href="#">Edit Addresses</a>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h6>Area:  {{ $user->address }}</h6>
                                                    </div>
                                                </div>
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h6>Zip Code:  {{ $user->zip_code }}</h6>
                                                    </div>
                                                </div>
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h6>City:  {{ $user->city }}</h6>
                                                    </div>
                                                </div>
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h6>Country:  Bangladesh</h6>
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
    <!-- section end -->
@endsection
