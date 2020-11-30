@extends('layouts.front.Scientific Diamond Company.front')
@section('title')
    @if(App::isLocale('ar'))
        شركاؤنا
    @else
        Our Partners
    @endif
@endsection
@section('content')

    <div class="products-page-title">
        <div class="row">
            <div class="container page-header-title">
                <h5 class="page-title">{{trans('sdc.our partners')}}</h5>
                <h6 class="page-path">{{trans('sdc.home/partners')}}</h6>
            </div>
        </div>
    </div>
    <section id="products-section" class="products-page-cards">
        <div class="container">
            <div class="row">
                <h3 id="products-title" class="mx-auto">{{trans('sdc.our partners')}}</h3>
            </div>
            <div class="row products-cards">
                @if($partners)
                    @foreach($partners as $partner)
                        <div class="col-lg-4 col-md-12">
                            <div class="card" style="width: 18rem;">
                                <a href="@if($partner->link !=NULL){{$partner->link}}@else # @endif"> <img
                                            class="card-img-top"
                                            src="{{URL::to('public/partners/Scientific Diamond Company/'.$partner->image)}}"
                                            style="height: 190px; width: 286px;"
                                            alt="">
                                </a>
                                {{--     <div class="card-body">
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
                                         <a href="{{url('sdc/products/'.$product->slug)}}"><i
                                                     class="fas fa-long-arrow-alt-left"></i> {{trans('sdc.more')}}</a>
                                     </div>--}}
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>

@endsection