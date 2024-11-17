@extends("frontend2.layouts.common-master")
@section("content")

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>blog</h2>
                        <ul>
                            <li><a href="{{ route('front.home') }}">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="{{ route("front.blog.index") }}">blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- section start -->
<section class="section-big-py-space blog-page ratio2_3">
    <div class="custom-container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-7">
                @foreach ($blogs as $blog)
                <div class="row blog-media">
                    <div class="col-xl-6">
                        <div class="blog-left">
                            <a href="{{ route('front.blog.show', $blog->slug) }}"><img src="{{ asset($blog->image) }}" class="img-fluid  " alt=""></a>
                            <div class="date-label">
                        {{-- add date diffforhumans --}}
                        {{ $blog->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="blog-right">
                            <div>
                                 <a href="{{ route('front.blog.show', $blog->slug) }}"><h4>{{ $blog->title  }}</h4> </a>
                                <ul class="post-social">
                                    <li>Posted By : Admin</li>
                                    {{-- <li><i class="fa fa-heart"></i> 5 Hits</li> --}}
                                    <li><i class="fa fa-comments"></i> {{ $blog->comments->count() }}</li>
                                </ul>
                                <p>{{ $blog->seo_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="col-xl-3 col-lg-4 col-md-5 order-sec">
                <div class="blog-sidebar">
                    <div class="theme-card">
                        <h4>Recent Blog</h4>
                        <ul class="recent-blog">

                        @foreach ($recentBlogs as $blog)
                            <li>
                                <a href="{{ route('front.blog.show', $blog->slug) }}">
                                    <div class="media"> <img class="img-fluid " src="{{ asset($blog->image) }}" alt="Generic placeholder image">
                                        <div class="media-body align-self-center">
                                            <h6>{{ $blog->created_at->diffForHumans() }}</h6>
                                            <p><i class="fa fa-comments"></i> {{ $blog->comments->count() }}</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach

                        </ul>
                    </div>
                    @if ($popularBlogs->count() > 0)
                    <div class="theme-card">
                        <h4>Popular Blog</h4>
                        <ul class="popular-blog">
                            @foreach ($popularBlogs as $blog)
                            <li>
                                <div class="media">
                                    @php
                                        $date = $blog->blog->created_at;
                                        $day = $date->format('d');
                                        $month = $date->format('M');
                                    @endphp
                                    <div class="blog-date"><span>{{ $day }}</span><span>{{ $month }}</span></div>
                                    <div class="media-body align-self-center">
                                        <h6><a href="{{ route('front.blog.show', $blog->blog->slug) }}">{{ $blog->blog->title }}</a></h6>
                                        <p><i class="fa fa-comments"></i> {{ $blog->blog->comments->count() }}</p>
                                    </div>
                                </div>
                                <p style="text-align: justify">{{ $blog->blog->seo_description }}</p>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->
@endsection
