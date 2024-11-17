@extends("frontend2.layouts.common-master")
@section("content")
<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>login</h2>
                        <ul>
                            <li><a href="{{ route("front.home") }}">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="{{ route("front.user-log") }}">login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<section class="login-page section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-8 offset-xl-4 offset-lg-3 offset-md-2">
                <div class="theme-card">
                    <h3 class="text-center">Login</h3>
                    <form class="theme-form">

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="userEmail" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="review">Password</label>
                            <input type="password" name="password" class="form-control" id="userPassword" placeholder="Enter your password" required>
                        </div>

                        <button type="button" onclick="login()" class="btn btn-normal">Login</button>


                        <a class="float-right txt-default mt-2" href="" id="fgpwd">Forgot your password?</a>
                    </form>

                    <a href="{{ route("front.user-reg") }}" class="txt-default pt-3 d-block">Create an Account</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->
@endsection
