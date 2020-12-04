<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
          integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css"
          integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

    <meta name="viewport" content="width=device-width">
    @if(App::isLocale('ar'))
        <link rel="stylesheet" href="{{asset('assets/css/style-arabic.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('assets/css/style-english.css')}}">

    @endif
</head>
<body>
<!-- START OF HOME HEADER-->
<div class="home-header">
    <div class="container">
        <div class="background-logo" style="position: fixed;">
            <img src="{{asset('assets/img/logo.png')}}" alt="">
        </div>
        <div class="background-logo-2030" style="position: fixed;">
            <img src="{{asset('assets/img/vision2030.png')}}" alt="">
        </div>
        <div class="language-switch">
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
<!-- END OF HOME HEADER-->


<!-- START OF PAGE CONTENT -->
<div class="page-content">
    <div class="home-content">
        <div class="container" style="position: relative;">
            <div class="main-home-content">
                <a href="{{url('sdclab')}}">
                    <div class='hex hex-border'>
                        <img src="{{asset('assets/img/logo3.png')}}" alt="">
                    </div>
                </a>
                <a href="{{url('sdc')}}">
                    <div class='hex hex-border'>
                        <img src="{{asset('assets/img/logo2.png')}}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- START OF SLIDER -->
    <div id="carouselExampleIndicators" class="carousel slide carousel-logo carousel-absolute" data-ride="carousel">
        <div class="carousel-inner">
            <?php

            $counter = 0;

            ?>
            @if($sliders)
                @foreach($sliders as $slider)
                    <?php $counter++; ?>
                    <div class="carousel-item  @if ($counter==1)  {{"active"}}@endif ">
                        <img class="d-block w-100" src="{{asset('sliders/Home/'.$slider->image)}}"
                             alt="First slide">
                    </div>
                @endforeach
            @endif
            {{--     <div class="carousel-item">
                     <img class="d-block w-100" src="{{asset('assets/img/img2.png')}}" alt="Second slide">
                 </div>--}}
        </div>
    </div>

    <!-- END OF SLIDER -->
    <!-- Start OF FOOTER -->
</div>
@php
    $settings=\App\Setting::where('department_id',0)->first();
@endphp
<footer>
    <div class="sec-footer" style="height: 100px; background: rgba(23, 64, 93, 0.5);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="carouselContent" class="carousel slide news-carousel" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <?php

                            $num_of_news = 0;

                            ?>
                            @if($news)
                                @foreach($news as $one_news)
                                    <?php $num_of_news++; ?>
                                    <div class="carousel-item  @if ($num_of_news==1)  {{"active"}}@endif text-center p-4">
                                        <p>
                                            @if(App::isLocale('en'))
                                                {{str_limit($one_news->intro_en,100)}}
                                            @else
                                                {{str_limit($one_news->intro_ar,100)}}
                                            @endif
                                            <a href="{{url('sdc/news/'.$one_news->slug)}}">{{trans('messages.read more')}}</a>.</p>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                    <div class="pentagon">
                        <div id="triangle"></div>
                        <div id="rectangle">
                            <h3>{{trans('messages.latest news')}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="second-pentagon">
                        <div id="triangle"></div>
                        <div id="rectangle">
                            <h3> {{trans('messages.intro')}}</h3>
                        </div>
                    </div>
                    <div id="welcome-about">
                        <p>    @if(App::isLocale('ar'))

                                {{str_limit($settings->intro_ar,100)}}
                            @else

                                {{str_limit($settings->intro_en,100)}}
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-footer" style="background: #17405d;">
        <div class="container">
            <div class="row">
                <div class="col-md-2 iso-social-media offset-english">
                    <div id="iso">
                        <img src="{{asset('assets/img/iso.png')}}" alt="">
                    </div>

                    <div class="social-media-icons">
                        <a href="{{$settings->facebook}}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{$settings->twitter}}"><i class="fab fa-twitter"></i></a>
                        <a href="{{$settings->googleplus}}"><i class="fab fa-google-plus-g"></i></a>
                        <a href="{{$settings->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                        <a href="{{$settings->youtube}}"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12 offset-arabic">
                    <div class="branches-info">
                        <h6>@if(App::isLocale('ar'))

                                {{$settings->address_eg_ar}}
                            @else
                                {{$settings->address_eg_en}}

                            @endif

                            <i class="icon-location-pin"></i></h6>
                        <h6>{{$settings->phone_eg}} <i class="icon-phone"></i></h6>
                        <h6> {{$settings->email_egy}} <i class="icon-envelope"></i></h6>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <div class="branches-info">
                        <h6>@if(App::isLocale('ar'))

                                {{$settings->address_uae_ar}}
                            @else
                                {{$settings->address_uae_en}}

                            @endif<i class="icon-location-pin"></i></h6>
                        <h6>{{$settings->phone_uae}}<i class="icon-phone"></i></h6>
                        <h6> {{$settings->email_uae}} <i class="icon-envelope"></i></h6>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <div class="branches-info">
                        <h6>@if(App::isLocale('ar'))

                                {{$settings->address_ksa_ar}}
                            @else
                                {{$settings->address_ksa_en}}

                            @endif <i class="icon-location-pin"></i></h6>
                        <h6>{{$settings->phone_ksa}} <i class="icon-phone"></i></h6>
                        <h6>{{$settings->email_ksa}} <i class="icon-envelope"></i></h6>
                    </div>
                </div>

            </div>
            <div class="row copyrights-footer">
                <p style="font-family: 'Tajawal', sans-serif; direction: ltr;">
                    {{trans('messages.copyrights')}}
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- END OF FOOTER -->

<!-- END OF PAGE CONTENT -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
        integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js"
        integrity="sha384-VspmFJ2uqRrKr3en+IG0cIq1Cl/v/PHneDw6SQZYgrcr8ZZmZoQ3zhuGfMnSR/F2"
        crossorigin="anonymous"></script>
<script src="{{asset('assets/js/script.js')}}">


</script>
</body>
</html>

