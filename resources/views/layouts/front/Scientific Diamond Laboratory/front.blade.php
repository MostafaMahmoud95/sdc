<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link rel='stylesheet prefetch'
          href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
          integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css"
          integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css'>
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css'>
    @if(App::isLocale('en'))
        <link rel="stylesheet" href="{{asset('assets/css/style-english.css')}}">

    @else
        <link rel="stylesheet" href="{{asset('assets/css/style-arabic.css')}}">

    @endif


</head>
<body>
<!-- START OF HEADER -->

<div class="header">
    <div class="first-header">
        <div class="container">
            <div class="background-logo-2030-2" style="position: fixed;">
                <img src="{{asset('assets/img/vision2030.png')}}" alt="">
            </div>
            <div class="language-switch-2">
                @if(App::isLocale('en'))
                    <a href="{{url('setlang/ar')}}" class="language-active-arabic"
                       style="font-family: 'Tajawal', sans-serif;">عربى</a>
                @else
                    <a href="{{url('setlang/en')}}" class="language-active-english"
                       style="font-size: 12px; font-family: 'Open Sans', sans-serif;">EN</a>
                @endif
            </div>
            <?php
            $settings = \App\Setting::Where('department_id', 2)->first();
            ?>
            <div class="social-media-icons social-media-icons2">
                <a href="{{$settings->facebook}}"><i class="fab fa-facebook-f"></i></a>
                <a href="{{$settings->twitter}}"><i class="fab fa-twitter"></i></a>
                <a href="{{$settings->googleplus}}"><i class="fab fa-google-plus-g"></i></a>
                <a href="{{$settings->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                <a href="{{$settings->youtube}}"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link  {{(\App\Http\Controllers\Frontend\ScientificDiamondCompany\HomePageController::CurrentPage("sdclab/contact"))? 'active-page': ''}} " href="{{url('sdclab/contact')}}">{{trans('sdc.contact')}}</a>

                    </li>
                    <li class="nav-item">
                          <a class="nav-link  {{(\App\Http\Controllers\Frontend\ScientificDiamondCompany\HomePageController::CurrentPage("sdclab/partners"))? 'active-page': ''}} " href="{{url('sdclab/partners')}}">{{trans('sdc.partners')}}</a>

                    </li>
                    <li class="nav-item">
                         <a class="nav-link  {{(\App\Http\Controllers\Frontend\ScientificDiamondCompany\HomePageController::CurrentPage("sdclab/customers"))? 'active-page': ''}} " href="{{url('sdclab/customers')}}">{{trans('sdc.customers')}}</a>

                    </li>
                    <li class="nav-item">
                      <a class="nav-link  {{(\App\Http\Controllers\Frontend\ScientificDiamondCompany\HomePageController::CurrentPage("sdclab/jobs"))? 'active-page': ''}} " href="{{url('sdclab/jobs')}}">{{trans('sdc.jobs')}}</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{(\App\Http\Controllers\Frontend\ScientificDiamondCompany\HomePageController::CurrentPage("sdclab/news"))? 'active-page': ''}} " href="{{url('sdclab/news')}}">{{trans('sdc.news')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{(\App\Http\Controllers\Frontend\ScientificDiamondCompany\HomePageController::CurrentPage("sdclab/products"))? 'active-page': ''}} " href="{{url('sdclab/products')}}">{{trans('sdc.products')}}</a>

                    </li>
                    <li class="nav-item">
                       <a class="nav-link  {{(\App\Http\Controllers\Frontend\ScientificDiamondCompany\HomePageController::CurrentPage("sdclab/services"))? 'active-page': ''}} " href="{{url('sdclab/services')}}">{{trans('sdc.services')}}</a>

                    </li>
                    <li class="nav-item">
                       <a class="nav-link  {{(\App\Http\Controllers\Frontend\ScientificDiamondCompany\HomePageController::CurrentPage("sdclab/about"))? 'active-page': ''}} " href="{{url('sdclab/about')}}">{{trans('sdc.about')}}</a>

              
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link  {{(\App\Http\Controllers\Frontend\ScientificDiamondCompany\HomePageController::CurrentPage("sdclab"))? 'active-page': ''}} " href="{{url('sdclab')}}">{{trans('sdc.home')}}</a>
                    </li>
                </ul>
            </div>
            <div class="background-main-logo" style="position: fixed;">
                <img src="{{asset('assets/img/main-logo.png')}}" alt="">
            </div>

        </div>
    </nav>
</div>    <!-- END OF HEADER -->


<div class="home-page-content">
    @yield('content')
</div>


<!-- START OF FOOTER -->

<footer class="main-footer-2">
    <div class="main-first-footer">
    <div class="container">
        <div class="row main-footer-content2">
            <div class="col-lg-3 col-md-12 footer-align">
                <h5>{{trans('sdc.contact information')}}</h5>

                <div class="branches-info-2">
                    <h6>@if(App::isLocale('ar'))

                            {{$settings->address_ksa_ar}}
                        @else
                            {{$settings->address_ksa_en}}

                        @endif <i class="icon-location-pin"></i></h6>
                    <h6>{{$settings->phone_ksa}} <i class="icon-phone"></i></h6>
                    <h6>{{$settings->email_ksa}} <i class="icon-envelope"></i></h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 footer-align">
                <h5>{{trans('sdc.branches')}}</h5>
                <div class="branches-info-2">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h5 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                       aria-expanded="true" aria-controls="collapseOne">
                                        <i class="more-less fas fa-plus"></i>
                                        <h5>@if(App::isLocale('ar'))

                                                {{$settings->address_eg_ar}}
                                            @else
                                                {{$settings->address_eg_en}}

                                            @endif

                                            <i class="icon-location-pin"></i></h5>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <h6>{{$settings->phone_eg}} <i class="icon-phone"></i></h6>
                                    <h6> {{$settings->email_egy}} <i class="icon-envelope"></i></h6>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h5 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="more-less fas fa-plus"></i>
                                        <h5>@if(App::isLocale('ar'))

                                                {{$settings->address_uae_ar}}
                                            @else
                                                {{$settings->address_uae_en}}

                                            @endif<i class="icon-location-pin"></i></h5>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <h6>{{$settings->phone_uae}}<i class="icon-phone"></i></h6>
                                    <h6> {{$settings->email_uae}} <i class="icon-envelope"></i></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-12 footer-align">
                <div class="container">
                    <div class="main-footer-news2">
                        <h5>{{trans('sdc.latest news')}}</h5>
                        @php
                            $three_news = \App\News::OrderBy('id', 'desc')->Where('department_id', 2)->take(3)->get();

                        @endphp
                        @foreach($three_news as $one_news)
                            <div class="news-paragraph">
                                <a href="{{url('sdclab/news/'.$one_news->slug)}}"><img
                                            src="{{asset('news/Scientific Diamond Lab/'.$one_news->image)}}"
                                            alt=""></a>
                                <p>
                                    @if(App::isLocale('ar'))
                                        <a href="{{url('sdclab/news/'.$one_news->slug)}}">   {{str_limit($one_news->intro_ar,100)}} </a>
                                    @else
                                        <a href="{{url('sdclab/news/'.$one_news->slug)}}">{{str_limit($one_news->intro_en,100)}}</a>

                                    @endif

                                </p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 logo-footer footer-align">
                <div class="container">
                    <img src="{{asset('assets/img/logo.png')}}" alt="">
                    <p>  @if(App::isLocale('ar')) {{$settings->intro_ar}} @else {{$settings->intro_en}} @endif</p>
                    <div class="social-media-icons icons-footer2">
                        <a href="{{$settings->facebook}}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{$settings->twitter}}"><i class="fab fa-twitter"></i></a>
                        <a href="{{$settings->googleplus}}"><i class="fab fa-google-plus-g"></i></a>
                        <a href="{{$settings->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                        <a href="{{$settings->youtube}}"><i class="fab fa-youtube"></i></a>

                    </div>
                    <br><br>

                    <div class="language-switch-2">
                        @if(App::isLocale('en'))
                            <a href="{{url('setlang/ar')}}" class="language-active-arabic"
                               style="font-family: 'Tajawal', sans-serif;">عربى</a>
                        @else
                            <a href="{{url('setlang/en')}}" class="language-active-english"
                               style="font-size: 12px; font-family: 'Open Sans', sans-serif;">EN</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-second-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <ul class="footer-nav">
                        <li><a href="{{url('sdclab')}}">{{trans('sdc.home')}}</a></li>
                        <li><a href="{{url('sdclab/about')}}">{{trans('sdc.about')}}</a></li>
                        <li><a href="{{url('sdclab/services')}}">{{trans('sdc.our services')}}</a></li>
                        <li><a href="{{url('sdclab/products')}}">{{trans('sdc.our products')}}</a></li>
                        <li><a href="{{url('sdclab/news')}}">{{trans('sdc.news')}}</a></li>
                        <li><a href="{{url('sdclab/jobs')}}">{{trans('sdc.jobs')}}</a></li>
                        <li><a href="{{url('sdclab/customers')}}">{{trans('sdc.customers')}}</a></li>
                        <li><a href="{{url('sdclab/partners')}}">{{trans('sdc.partners')}}</a></li>
                        <li><a href="{{url('sdclab/contact')}}"> {{trans('sdc.contact')}}</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p id="main-footer2-copyrights">{{trans('sdc.copyrights')}}</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</footer>

<!-- END OF FOOTER -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>

<script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
        integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js"
        integrity="sha384-VspmFJ2uqRrKr3en+IG0cIq1Cl/v/PHneDw6SQZYgrcr8ZZmZoQ3zhuGfMnSR/F2"
        crossorigin="anonymous"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js'></script>


<script>
    function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('fa-plus fa-minus');
    }

    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);
    $("#accordion").accordion({
        heightStyle: "content",
        active: false,
        collapsible: true,
        header: "div.accordionheader"
    });


    $('.slider-nav').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerMode: true,
                }
            },
            {
                breakpoint: 1008,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                }
            }

        ]
    });
    $('.slider-nav-2').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerMode: true,
                }
            },
            {
                breakpoint: 1008,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                }

            }

        ]
    });

    $(window).on('resize orientationchange', function () {
        $('.slider-nav').slick('resize');
    });

@yield('script')


</script>

</body>
</html>