@extends("frontend2.layouts.common-master")

@section("content")
    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>Flash Sell</h2>
                            <ul>
                                <li><a href="{{ route("front.home") }}">home</a></li>
                                <li><i class="fa fa-angle-double-right"></i></li>
                                <li><a>{{$customPage->page_name}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->



<div class="container">
<p style="font-weight: bold; text-align:justify">{!!$customPage->description!!}</p>
</div>



@endsection
