@extends('layouts.front.Scientific Diamond Company.front')
@section('title')
    @if(App::isLocale('ar'))
        شركة الماسه العلمية
    @else
        Scientific Diamond Company
    @endif
@endsection
@section('content')

    <div id="carouselExampleIndicators" class="carousel slide carousel-logo carousel-absolute" data-ride="carousel">
        {{--    <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>--}}
        <div class="carousel-inner">
            <?php

            $counter = 0;

            ?>
            @if($sliders)
                @foreach($sliders as $slider)
                    <?php $counter++; ?>
                    <div class="carousel-item carousel-item-home @if ($counter==1)  {{"active"}}@endif "
                         style="background-image: url('{{'sliders/Scientific Diamond Company/'.$slider->image}}'); background-position-y: 80px; ">
                        <div class="row">
                            <div class="container">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"></div>
                                {{--
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 carousel-item-content" style="z-index: 10; margin-top: 30%; float: right;">
                                                                    <h2>لوريم إيبسوم</h2>
                                                                    <p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس
                                                                        المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار
                                                                        للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة</p>
                                                                    <a href="#" class="more-button-carousel">{{trans('sdc.more')}}</a>
                                                                </div>
                                --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <?php
    $settings = \App\Setting::Where('department_id', 1)->first();
    ?>
    <section style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="container accordion-container">
                    {{--   <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                           <img src="{{asset('assets/img/section2-img.png')}}" alt="" class="img-fluid">
                       </div>--}}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="accordion-container-paragraph">
                            <h3>{{trans('sdc.about')}}</h3>
                            <p>
                                @if(App::isLocale('en'))
                                    {{$settings->intro_en}}
                                @else
                                    {{$settings->intro_ar}}

                                @endif
                            </p>
                        </div>
                        <div class="narrowchart">
                            <div id="accordion">
                                <div class="accordionheader">
                                    <h3>{{trans('sdc.our vision')}}<i class="fa fa-arrow-down"></i></h3>
                                </div>
                                <div class="accordionbody">
                                    <p>
                                        @if(App::isLocale('en'))
                                            {{$settings->vision_en}}
                                        @else
                                            {{$settings->vision_ar}}

                                        @endif

                                    </p>
                                </div>
                                <div class="accordionheader">
                                    <h3>{{trans('sdc.our mission')}}<i class="fa fa-arrow-down"></i></h3>
                                </div>
                                <div class="accordionbody">
                                    <p>
                                        @if(App::isLocale('en'))
                                            {{$settings->mission_en}}
                                        @else
                                            {{$settings->mission_ar}}

                                        @endif

                                    </p>
                                </div>
                                <div class="accordionheader">
                                    <h3>{{trans('sdc.our message')}}<i class="fa fa-arrow-down"></i></h3>
                                </div>
                                <div class="accordionbody">
                                    <p>
                                        @if(App::isLocale('en'))
                                            {{$settings->message_en}}
                                        @else
                                            {{$settings->message_ar}}

                                        @endif

                                    </p>
                                </div>
                                <div class="accordionheader">
                                    <h3>{{trans('sdc.our values')}}<i class="fa fa-arrow-down"></i></h3>
                                </div>
                                <div class="accordionbody">
                                    <p>
                                        @if(App::isLocale('en'))
                                            {{$settings->values_en}}
                                        @else
                                            {{$settings->values_ar}}

                                        @endif

                                    </p>
                                </div>
                                <div class="accordionheader">
                                    <h3>{{trans('sdc.our goal ')}}<i class="fa fa-arrow-down"></i></h3>
                                </div>
                                <div class="accordionbody">
                                    <p>
                                        @if(App::isLocale('en'))
                                            {{$settings->goal_en}}
                                        @else
                                            {{$settings->goal_ar}}

                                        @endif

                                    </p>
                                </div>
                                <div class="accordionheader">
                                    <h3>{{trans('sdc.our whyus')}}<i class="fa fa-arrow-down"></i></h3>
                                </div>
                                <div class="accordionbody">
                                    <p>
                                        @if(App::isLocale('en'))
                                            {{$settings->whyus_en}}
                                        @else
                                            {{$settings->whyus_ar}}

                                        @endif

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>



    <section id="services-section">
        <div class="container">
            <div class="row">
                <h3 id="services-title" class="mx-auto">{{trans('sdc.our services')}}</h3>
            </div>
            <div class="row services-cards jobs-cards">
                @if($services)
                    @foreach($services as $service)
                        <div class="col-lg-4 col-md-12">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top"
                                     src="{{asset('services/Scientific Diamond Company/'.$service->image)}}"
                                     alt="">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        @if(App::isLocale('en'))
                                            {{$service->title_en}}
                                        @else
                                            {{$service->title_ar}}
                                        @endif
                                    </h5>
                                    <p class="card-text">
                                        @if(App::isLocale('en'))
                                            {{$service->intro_en}}
                                        @else
                                            {{$service->intro_ar}}
                                        @endif
                                    </p>
                                    <a href="{{url('sdc/services/'.$service->slug)}}">{{trans('sdc.more')}} <i
                                                class="fas fa-long-arrow-alt-left"></i> </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="row">
                <a href="{{url('sdc/services')}}"
                   class="more-button-carousel mx-auto services-button">{{trans('sdc.more services')}}</a>
            </div>
        </div>
    </section>


    <section id="products-section">
        <div class="container">
            <div class="row">
                <h3 id="products-title" class="mx-auto">{{trans('sdc.our products')}}</h3>
            </div>
            <div class="row products-cards jobs-cards">
                @if($products)
                    @foreach($products as $product)
                        <div class="col-lg-4 col-md-12">
                            <a href="{{url('sdc/products/'.$product->slug)}}">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top"
                                         src="{{asset('products/Scientific Diamond Company/'.$product->image)}}"
                                         alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">

                                            @if(App::isLocale('en'))
                                                {{$product->title_en}}
                                            @else
                                                {{$product->title_ar}}
                                            @endif
                                        </h5>
                                        <p class="card-text">
                                            @if(App::isLocale('en'))
                                                {{$product->intro_en}}
                                            @else
                                                {{$product->intro_ar}}
                                            @endif
                                        </p>

                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif

            </div>
            <div class="row">
                <a href="{{url('sdc/products')}}"
                   class="more-button-carousel mx-auto services-button">{{trans('sdc.more products')}}</a>
            </div>
        </div>
    </section>


    <section id="news-section">
        <div class="container">
            <div class="row">
                <h3 id="news-title" class="mx-auto">{{trans('sdc.latest news')}}</h3>
            </div>
            <div class="row products-cards slider-nav">
                @if($latest_news)
                    @foreach($latest_news as $one_news)
                        <div class="col-md-4 col-sm-12 col-xm-12">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top"
                                     src="{{asset('news/Scientific Diamond Company/'.$one_news->image)}}"
                                     style="height: 190px; width: 286px;" alt="">
                                <div class="news-date-day">

                                    <h6>{{ $one_news->created_at->format('d') }}
                                    </h6>
                                    <div class="news-date-month">
                                        @if(App::isLocale('en'))

                                            <h6>{{ $one_news->created_at->format('M') }} {{$one_news->created_at->format('Y')}}</h6>
                                        @else

                                            <?php   $month_name = $one_news->created_at->format('M');
                                            switch ($month_name) {
                                                case "Jan":
                                                    $month_name = "يناير";
                                                    break;
                                                case "Feb":
                                                    $month_name = "فبراير";
                                                    break;
                                                case "Mar":
                                                    $month_name = "مارس";
                                                    break;
                                                case "Apr":
                                                    $month_name = "ابريل";
                                                    break;
                                                case "May":
                                                    $month_name = "مايو";
                                                    break;
                                                case "Jun":
                                                    $month_name = "يونيه";
                                                    break;
                                                case "Jul":
                                                    $month_name = "يوليو";
                                                    break;
                                                case "Aug":
                                                    $month_name = "اغسطس";
                                                    break;
                                                case "Sep":
                                                    $month_name = "سبتمبر";
                                                    break;
                                                case "Oct":
                                                    $month_name = "اكتوبر";
                                                    break;
                                                case "Nov":
                                                    $month_name = "نوفمبر";
                                                    break;
                                                case "Dec":
                                                    $month_name = "ديسمبر";
                                                    break;
                                                default:
                                                    $month_name = "خطأ";
                                            }

                                            ?>
                                            <h6>{{$month_name}} {{$one_news->created_at->format('Y')}}</h6>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        @if(App::isLocale('en'))
                                            {{$one_news->title_en}}
                                        @else
                                            {{$one_news->title_ar}}

                                        @endif

                                    </h5>
                                    <p class="card-text">

                                        @if(App::isLocale('en'))
                                            {{$one_news->intro_en}}
                                        @else
                                            {{$one_news->intro_ar}}

                                        @endif
                                    </p>
                                    <a href="{{url('sdc/news/'.$one_news->slug)}}"> {{trans('sdc.more')}}<i
                                                class="fas fa-long-arrow-alt-left"></i></a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
    <section id="clients-section">
        <div class="container">
            <div class="row">
                <h3 id="clients-title" class="mx-auto">{{trans('sdc.our customers')}}</h3>
            </div>
            <div class="row">
                <div class="container">
                    <div class="slider-nav-2">
                        @if($customers)
                            @foreach($customers as $customer)
                                <div>
                                    <a href="@if($customer->link !=NULL){{$customer->link}}@else # @endif"><img
                                                src="{{asset('customers/Scientific Diamond Company/'.$customer->image)}}"
                                                alt=""></a>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection