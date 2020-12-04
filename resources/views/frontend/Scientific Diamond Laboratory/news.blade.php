@extends('layouts.front.Scientific Diamond Laboratory.front')
@section('title')
    @if(App::isLocale('ar'))
        الأخبار
    @else
        News
    @endif
@endsection
@section('content')

    <div class="products-page-title">
        <div class="row">
            <div class="container page-header-title">
                <h5 class="page-title">{{trans('sdc.news')}}</h5>
                <h6 class="page-path">{{trans('sdc.home/news')}}</h6>
            </div>
        </div>
    </div>
    <section id="products-section" class="products-page-cards">
        <div class="container">
            <div class="row">
                <h3 id="products-title" class="mx-auto">{{trans('sdc.news')}}</h3>
            </div>
            <div class="row products-cards jobs-cards">
                @if($news)
                    @foreach($news as $one_news)
                        <div class="col-lg-4 col-md-12">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top"
                                     src="{{URL::to('news/Scientific Diamond Lab/'.$one_news->image)}}"
                                     style="height: 190px; width: 286px;"
                                     alt="">
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
                                    <a href="{{url('sdclab/news/'.$one_news->slug)}}">{{trans('sdc.more')}}<i
                                                class="fas fa-long-arrow-alt-left"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>

@endsection