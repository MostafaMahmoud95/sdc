@extends('layouts.front.Scientific Diamond Laboratory.front')
@section('title')
    @if(App::isLocale('ar'))
        عملاؤنا
    @else
        Customers
    @endif
@endsection
@section('content')

    <div class="products-page-title">
        <div class="row">
            <div class="container page-header-title">
                <h5 class="page-title">{{trans('sdc.our customers')}}</h5>
                <h6 class="page-path">{{trans('sdc.home/customers')}}</h6>
            </div>
        </div>
    </div>
    <section id="products-section" class="products-page-cards">
        <div class="container">
            <div class="row">
                <h3 id="products-title" class="mx-auto">{{trans('sdc.our customers')}}</h3>
            </div>
            <div class="row products-cards">
                @if($customers)
                    @foreach($customers as $customer)
                        <div class="col-lg-4 col-md-12">
                            <div class="card" style="width: 18rem;">
                                <a href="@if($customer->link !=NULL){{$customer->link}}@else # @endif"> <img
                                            class="card-img-top"
                                            src="{{URL::to('public/customers/Scientific Diamond Lab/'.$customer->image)}}"
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