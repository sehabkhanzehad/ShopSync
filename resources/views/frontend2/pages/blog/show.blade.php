@extends('frontend2.layouts.common-master')
@section('content')

    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>blog detail</h2>
                            <ul>
                                <li><a href="{{ route('front.home') }}">Home</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a href="{{ route('front.blog.index') }}">Blog</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a href="{{ route('front.blog.show', $blog->slug) }}">blog-detail</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!--section start-->
    <section class="blog-detail-page section-big-py-space ratio2_3">
        <div class="container">
            <div class="row section-big-pb-space">
                <div class="col-sm-12 blog-detail">
                    <div class="creative-card">
                        <img src="{{ asset($blog->image) }}" class="img-fluid w-100 " alt="blog">
                        <h3>{{ $blog->title }}</h3>
                        <ul class="post-social">
                            <li>{{ $blog->created_at->diffForHumans() }}</li>
                            <li>Posted By : Admin</li>
                            {{-- <li><i class="fa fa-heart"></i> 5 Hits</li> --}}
                            <li><i class="fa fa-comments"></i>{{ $blog->comments->count() }}</li>
                        </ul>
                        {{-- html code show like {{ !! $blog->description !! }} --}}
                        <p>{!! $blog->description !!}</p>
                    </div>
                </div>
            </div>

            {{-- <div class="row section-big-pb-space blog-advance ">
                <div class="col-lg-6 ">
                    <div class="creative-card">
                        <img src="../assets/images/blog/1.jpg" class="img-fluid " alt="blog">
                        <ul>
                            <li>Donec ut metus sit amet elit consectetur vel turpis.</li>
                            <li>Aenean in mi eu elit mollis tincidunt.</li>
                            <li>Etiam blandit metus vitae purus lacinia ultricies.</li>
                            <li>Nunc quis nulla sagittis, tempus metus.</li>
                            <li>In scelerisque libero ut mi ornare, neque pulvinar.</li>
                            <li>Morbi molestie lacus blandit interdum sodales.</li>
                            <li>Curabitur eleifend velit molestie eleifend interdum.</li>
                            <li>Vestibulum fringilla tortor et lorem sagittis,</li>
                            <li>In scelerisque libero ut mi ornare, neque pulvinar.</li>
                            <li>Morbi molestie lacus blandit interdum sodales.</li>
                            <li>Curabitur eleifend velit molestie eleifend interdum.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="creative-card">
                        <img src="../assets/images/blog/2.jpg" class="img-fluid  " alt="blog">
                        <p>Nulla quam turpis, commodo et placerat eu, mollis ut odio. Donec pellentesque egestas consequat.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc at
                            urna dolor. Mauris odio nisi, rhoncus ac justo eget, lacinia iaculis lectus. </p>
                        <p class="mt-2">Nulla quam turpis, commodo et placerat eu, mollis ut odio. Donec pellentesque
                            egestas consequat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                            cubilia Curae; Nunc at urna dolor. Mauris odio nisi, rhoncus ac justo eget, lacinia iaculis
                            lectus. rhoncus ac justo eget, lacinia iaculis lectus.</p>
                        <p class="mt-2">Nulla quam turpis, commodo et placerat eu, mollis ut odio. Donec pellentesque
                            egestas consequat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
                    </div>
                </div>
            </div> --}}
            @if ($blog->comments->count() > 0)
                <div class="row section-big-pb-space">
                    <div class="col-sm-12 ">
                        <div class="creative-card">
                            <ul class="comment-section">

                                @foreach ($blog->comments as $comment)
                                    <li class="media">
                                        <div class="media"><img
                                                src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o="
                                                alt="Generic placeholder image">

                                            <div class="media-body">
                                                <h6>{{ $comment->name }}<span>( {{ $comment->created_at->diffForHumans() }}
                                                        )</span></h6>
                                                <p>{{ $comment->comment }}</p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <div class=" row blog-contact">
                <div class="col-sm-12  ">
                    <div class="creative-card">
                        <h2>Leave Your Comment</h2>
                        <form class="theme-form">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Your name"
                                        required="">
                                    <input type="hidden" id="blog_id" value="{{ $blog->id }}">
                                </div>
                                <div class="col-md-12">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email"
                                        required="">
                                </div>
                                <div class="col-md-12">
                                    <label for="exampleFormControlTextarea1">Comment</label>
                                    <textarea class="form-control" placeholder="Write Your Comment" id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <a class="btn btn-normal" onclick="comment()">Post Comment</a>
                                </div>
                            </div>
                        </form>
                    </div>
















                    
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->
@endsection

@section('script')
    <script>
        async function comment() {
            const blog_id = document.getElementById("blog_id").value
            const name = document.getElementById("name").value
            const email = document.getElementById("email").value
            const comment = document.getElementById("exampleFormControlTextarea1").value

            if (name == "" && email == "" && comment == "") {
                errorToast("All fields are required");
            } else if (name == "") {
                errorToast("Name is required");
            } else if (email == "") {
                errorToast("Email is required");
            } else if (comment == "") {
                errorToast("Comment is required");
            } else {
                showLoader();
                let response = await axios.post('/blog/comment', {
                    blog_id: blog_id,
                    name: name,
                    email: email,
                    comment: comment
                });
                hideLoader();
                if (response.data.status == "success") {
                    successToast(response.data.message);
                    setTimeout(() => {
                        location.reload();
                    }, 1000);
                } else {
                    errorToast(response.data.message);
                }
            }

        }
    </script>
@endsection
{{-- let response = await axios.post("/login", {
    email: email,
    password: password,
});
hideLoader(); --}}
