    @extends('frontend2.layouts.common-master')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>register</h2>
                            <ul>
                                <li><a href="{{ route('front.home') }}">home</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a href="{{ route('front.user-reg') }}">register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->
    <form>

    </form>
    <!--section start-->
    <section class="login-page section-big-py-space bg-light">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="theme-card">
                        <h3 class="text-center">Create account</h3>

                        <form class="theme-form" action="{{ route("front.register") }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="">Name</label>
                                    <input type="text" id="" name="name" required class="form-control"
                                        placeholder="Name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="">email</label>
                                    <input type="text" class="form-control" placeholder="Email" id=""
                                        name="email" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="">Phone</label>
                                    <input type="text" id="" class="form-control" name="phone"
                                        placeholder="+8801XXXXXXXXX" required>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="">Password</label>
                                    <input type="password" id="" name="password" required class="form-control"
                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                        placeholder="Password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="">Confirm Password</label>
                                    <input type="password" id="" name="password_confirmation"
                                        class="form-control"
                                        placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                        required>
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <button type="submit" class="btn btn-normal">Submit</button>
                                </div>
                            </div>

                            {{-- <div class="form-row">
                                <div class="col-md-12 ">
                                    <p>Have you already account? <a href="login.html" class="txt-default">click</a> here to
                                        &nbsp;<a href="login.html" class="txt-default">Login</a></p>
                                </div>
                            </div> --}}
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->
@endsection
