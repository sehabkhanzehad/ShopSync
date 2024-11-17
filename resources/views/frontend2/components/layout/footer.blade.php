@php
    $footer = DB::table('footers')->first();
    $sLinks = DB::table('footer_social_links')->get();
    $custom_pages = DB::table('custom_pages')->where('status', 1)->get();
    $paymentv = DB::table('banner_images')->where('id', 16)->first();
    $deliveryp = DB::table('banner_images')->where('id', 17)->first();
    $sLink =DB::table('footer_social_links')->where('id', 5)->first();
@endphp

<!--newsleatter start-->
<section>
    <div class="newsletter bg-transparent">
        <div class="news-leble">
            <svg viewBox="-28 0 480 480" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m320.007812 64v-16h40c4.417969 0 8-3.582031 8-8v-32c0-4.417969-3.582031-8-8-8h-80c-4.417968 0-8 3.582031-8 8v56h-152c-39.746093.042969-71.957031 32.253906-72 72v8h-40c-.976562.015625-1.941406.210938-2.847656.574219-.273437.125-.542968.261719-.800781.417969-.574219.292968-1.109375.652343-1.597656 1.070312-.257813.21875-.496094.457031-.714844.714844-.402344.46875-.746094.984375-1.03125 1.535156-.171875.292969-.324219.597656-.457031.910156-.046875.136719-.152344.25-.191406.394532-.179688.644531-.2773442 1.3125-.289063 1.984374 0 .132813-.078125.253907-.078125.398438v160c0 4.417969 3.582031 8 8 8h160.007812v152c0 4.417969 3.582032 8 8 8h80c4.417969 0 8-3.582031 8-8v-152h152c4.417969 0 8-3.582031 8-8v-240c0-4.417969-3.582031-8-8-8zm0-48h32v16h-32zm-36 139.351562c2.46875-1.425781 3.996094-4.058593 4-6.910156v-132.441406h16v132.441406c.007813 2.851563 1.53125 5.484375 4 6.910156 7.421876 4.222657 12.003907 12.109376 12 20.648438 0 13.253906-10.746093 24-24 24-13.253906 0-24-10.746094-24-24-.003906-8.539062 4.578126-16.425781 12-20.648438zm-220-19.351562c.035157-30.914062 25.085938-55.964844 56-56h16c30.914063.035156 55.964844 25.085938 56 56v8h-128zm126.398438 24-35.917969 24.863281c-.503906-.605469-.945312-1.261719-1.511719-1.832031-4.488281-4.515625-10.601562-7.050781-16.96875-7.03125h-2.742187c-6.371094-.011719-12.480469 2.519531-16.976563 7.03125l-5.65625 5.65625-5.65625-5.65625c-4.488281-4.515625-10.601562-7.050781-16.96875-7.03125h-2.742187c-6.371094-.011719-12.480469 2.519531-16.976563 7.03125-.191406.191406-.320312.425781-.503906.617188l-34.175781-23.648438zm-46.398438 40c.007813 2.121094-.839843 4.160156-2.34375 5.65625l-31.03125 31.03125-31.03125-31.03125c-2.289062-2.289062-2.972656-5.730469-1.734374-8.722656 1.242187-2.988282 4.160156-4.9375 7.398437-4.933594h2.742187c2.121094.007812 4.152344.847656 5.65625 2.34375l11.3125 11.3125c3.125 3.121094 8.1875 3.121094 11.3125 0l11.304688-11.304688c1.5-1.507812 3.542969-2.351562 5.671875-2.351562h2.742187c2.121094.007812 4.152344.847656 5.65625 2.34375 1.503907 1.496094 2.351563 3.535156 2.34375 5.65625zm-128-32.726562 45.390626 31.421874c-.417969 6.796876 2.089843 13.445313 6.890624 18.273438l36.6875 36.6875c3.125 3.121094 8.1875 3.121094 11.3125 0l36.6875-36.6875c4.367188-4.367188 6.871094-10.257812 6.976563-16.433594l32.054687-22.183594v93.648438h-176zm0 136.726562v-16h176v16zm200 160h-32v-144h32zm32 0h-16v-144h16zm160-160h-200v-16h200zm0-32h-200v-136c-.003906-21.769531-9.878906-42.363281-26.847656-56h90.847656v64.167969c-13.773437 10.332031-19.390624 28.316406-13.945312 44.648437 5.441406 16.335938 20.726562 27.351563 37.945312 27.351563s32.503907-11.015625 37.949219-27.351563c5.441407-16.332031-.175781-34.316406-13.949219-44.648437v-64.167969h88zm0 0" />
                <path
                    d="m289 231.566406c-7.398438-.914062-14.535156-3.3125-20.984375-7.054687-3.808594-2.050781-8.554687-.703125-10.71875 3.042969-2.164063 3.746093-.957031 8.53125 2.71875 10.804687 8.304687 4.8125 17.492187 7.902344 27.015625 9.082031.332031.042969.667969.066406 1 .0625 4.21875-.011718 7.699219-3.296875 7.960938-7.507812.257812-4.207032-2.792969-7.894532-6.976563-8.429688zm0 0" />
                <path
                    d="m352.007812 176c.0625 22.84375-13.804687 43.417969-35 51.9375-2.738281 1.007812-4.707031 3.429688-5.140624 6.3125-.4375 2.886719.734374 5.777344 3.054687 7.550781 2.316406 1.769531 5.417969 2.136719 8.085937.960938 21.660157-8.757813 37.726563-27.476563 43.09375-50.21875 5.367188-22.738281-.632812-46.667969-16.09375-64.183594-2.925781-3.3125-7.980468-3.628906-11.296874-.703125-3.3125 2.925781-3.628907 7.980469-.703126 11.296875 9.035157 10.222656 14.015626 23.402344 14 37.046875zm0 0" />
            </svg>
            <span class="news-text">
                our
                <span>newsletter</span>
            </span>
        </div>
        <div class="subscribe-block">
            <div class="input-group ">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-email"></i></span>
                </div>
                <input type="text" placeholder="ENTER YOUR EMAIL....">
            </div>
            <a class="btn-normal">subscribe</a>
        </div>
    </div>
</section>
<!--newsleatter end-->

<!--contact banner start-->
<section class="contact-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="contact-banner-contain">
                    <div class="contact-banner-img"><img src="{{ asset('assets') }}/images/layout-1/call-img.png"
                            alt="call-banner"></div>
                    <div>
                        <h3>if you have any question please call us</h3>
                    </div>
                    <div>
                        <h2>{{ $footer->phone }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact banner end-->

<footer>
    <div class="app-link-block">
        <div class="container">
            <div class="row">
                <div class="app-link-bloc-contain">
                    <div class="app-item-group">
                        <div class="app-item">
                            <img src="{{ asset('assets') }}/images/layout-1/app/1.png" class="img-fluid  "
                                alt="app-banner">
                        </div>
                        <div class="app-item">
                            <img src="{{ asset('assets') }}/images/layout-1/app/2.png" class="img-fluid  "
                                alt="app-banner">
                        </div>
                    </div>
                    <div class="app-item-group ">
                        <div class="sosiyal-block">
                            <h6>follow us</h6>
                            <ul class="sosiyal">
                                @foreach ($sLinks as $link)
                                    <li><a href="{{ $link->link }}"><i class="fa-brands {{ $link->icon }}"></i></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-1 section-mb-space">
        <div class="container">
            <div class="logo-contain">
                <div class="row">
                    <div class="col-lg-3 col-md-12 ">
                        <div class="logo-block">
                            <a href="{{ route('front.home') }}">
                                <img width="120" height="60" src="{{ asset(siteInfo()->logo) }}" class="img-fluid  " alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 pr-lg-0">
                        <div class="logo-detail">
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-1 section-mb-space">
        <div class="container">
            <div class="footer-box">
                <div class="row">
                    <div class="col-md-8 pr-md-0">
                        <div class="footer-link">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="footer-sub-box account">
                                        <div class="footer-title">
                                            <h5>Pages</h5>
                                        </div>
                                        <div class="footer-contant">
                                            <ul>
                                                @foreach ($custom_pages as $pages)
                                                    <li><a
                                                            href="{{ route('front.customPages', $pages->slug) }}">{{ $pages->page_name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="footer-sub-box account">
                                        <div class="footer-title">
                                            <h5>Delivery Partner</h5>
                                        </div>
                                        <div class="payment-card-bottom">
                                            <img src="{{ asset($deliveryp->image) }}" style="width:35%; height:auto"
                                                class="img-fluid" alt="pay">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="footer-sub-box account">
                                        <div class="footer-title">
                                            <h5>Live Chat</h5>
                                        </div>

                                        <div class="payment-card-bottom">
                                            <a href="{{$sLink->link}}" target="_blank" class="fixed-cart-bottom">
                                                <img src="{{ asset('frontend/images/download.png') }}" style="height: 50px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  pl-md-0">
                        <div class="footer-sub-box footer-contant-box">
                            <div>
                                <div class="footer-title">
                                    <h5>contact us</h5>
                                </div>
                                <div class="footer-contant">
                                    <ul class="contact-list">
                                        <li><i class="fa fa-map-marker"></i>{{ $footer->address }}</span></li>
                                        <li><i class="fa fa-phone"></i>phone: <span>{{ $footer->phone }}</span></li>
                                        <li><i class="fa fa-envelope-o"></i>email: {{ $footer->email }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-1 section-mb-space">
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-8 col-sm-12">
                        <div class="footer-end">
                            <p><span>{{ $footer->copyright }} <a target="_blank" href="https://rndglobalnest.com">RND
                                        Global Nest</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-4 col-sm-12">
                        <div class="payment-card-bottom">
                            <img src="{{ asset($paymentv->image) }}" style="width:40%; height:auto" class="img-fluid"
                                alt="pay">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
