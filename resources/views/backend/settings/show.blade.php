@extends('layouts.admin.admin')
@section('content')

    <div class="container-fluid">

        <!-- Page-Title -->
        {{--   <div class="row">
               <div class="col-sm-12">
                   <div class="btn-group pull-right m-t-15">
                       <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings</button>
                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                           <a class="dropdown-item" href="#">Dropdown One</a>
                           <a class="dropdown-item" href="#">Dropdown Two</a>
                           <a class="dropdown-item" href="#">Dropdown Three</a>
                           <a class="dropdown-item" href="#">Dropdown Four</a>
                       </div>
                   </div>

                   <h4 class="page-title">Product Detail</h4>
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="#">Ubold</a></li>
                       <li class="breadcrumb-item"><a href="#">eCommerce</a></li>
                       <li class="breadcrumb-item active">Product Detail</li>
                   </ol>

               </div>
           </div>--}}


        <div class="row">
            <div class="col-12">
                <div class="card-box product-detail-box">
                    <div class="row">
                        {{--            <div class="col-sm-4">
                                        --}}{{--    <div class="sp-loading"><img src="{{URL::to('public/sliders/'.$slider->department->title_en.'/'.$slider->image)}}" style="width: 500px; height: 500px;" alt=""><br>LOADING
                                                IMAGES
                                            </div>--}}{{--
                                        <div class="sp-wrap">
                                            <a href="{{URL::to('public/partners/'.$partner->department->title_en.'/'.$partner->image)}}"><img
                                                        src="{{URL::to('public/partners/'.$partner->department->title_en.'/'.$partner->image)}}"
                                                        style="height: 500px; width: 1000px;" alt=""></a>
                                        </div>
                                    </div>--}}

                        {{--<div class="col-sm-8">
                            <div class="product-right-info">
                                <h4><b>Mens Fedora Hat CODEblack</b></h4>
                                <div class="rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a class="fa fa-star" href=""></a></li>
                                        <li class="list-inline-item"><a class="fa fa-star" href=""></a></li>
                                        <li class="list-inline-item"><a class="fa fa-star" href=""></a></li>
                                        <li class="list-inline-item"><a class="fa fa-star" href=""></a></li>
                                        <li class="list-inline-item"><a class="fa fa-star-o" href=""></a></li>
                                    </ul>
                                </div>

                                <h2> <b>$42</b><small class="text-muted m-l-10"><del>$62</del> </small></b></h2>

                                <h5 class="m-t-20"><b>Stock: </b> 256pcs. <span class="label label-default m-l-5">In Stock</span></h5>

                                <hr/>

                                <h5 class="font-600">Product Description</h5>

                                <p class="text-muted">Dantes remained confused and silent by this
                                    explanation of the thoughts which had unconsciously been working in
                                    his mind, or rather soul; for there are two distinct sorts of ideas,
                                    those that proceed from the head and those from the heart.</p>

                                <p class="text-muted">Unconsciously been working in
                                    his mind, or rather soul; for there are two distinct sorts of ideas,
                                    those that proceed from the head and those from the heart.</p>

                                <div class="m-t-30">
                                    <button type="button" class="btn btn-white" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">
                                                     <span class="btn-label"><i class="fa fa-shopping-cart"></i>
                                                   </span>Buy Now</button>

                                </div>
                            </div>
                        </div>--}}
                    </div>
                    <!-- end row -->

                    <div class="row m-t-30">
                        <div class="col-12">
                            <h4 class="font-18"><b>Details:</b></h4>
                            <div class="table-responsive m-t-20">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td width="400">Department</td>
                                        <td>
                                            {{$setting->department->title_en}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Arabic Introduction</td>
                                        <td>
                                            {{$setting->intro_ar}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>English Introduction</td>
                                        <td>
                                            {{$setting->intro_en}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Arabic Vision</td>
                                        <td>
                                            {{$setting->vision_ar}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>English Vision</td>
                                        <td>
                                            {{$setting->vision_en}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Arabic Mission</td>
                                        <td>
                                            {{$setting->mission_ar}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>English Mission</td>
                                        <td>
                                            {{$setting->mission_en}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Arabic Message</td>
                                        <td>
                                            {{$setting->message_ar}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>English Message</td>
                                        <td>
                                            {{$setting->message_en}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Arabic Values</td>
                                        <td>
                                            {{$setting->values_ar}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>English Values</td>
                                        <td>
                                            {{$setting->values_en}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Arabic Goal</td>
                                        <td>
                                            {{$setting->goal_ar}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>English Goal</td>
                                        <td>
                                            {{$setting->goal_en}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Arabic Why Choose Us ?</td>
                                        <td>
                                            {{$setting->whyus_ar}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>English Why Choose Us ?</td>
                                        <td>
                                            {{$setting->whyus_en}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Arabic Address</td>
                                        <td>
                                            {{$setting->address_ar}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>English Address</td>
                                        <td>
                                            {{$setting->address_en}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>
                                            {{$setting->email}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>
                                            {{$setting->phone}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Facebook</td>
                                        <td>
                                            {{$setting->facebook}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Twitter</td>
                                        <td>
                                            {{$setting->twitter}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Linkedin</td>
                                        <td>
                                            {{$setting->linkedin}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Youtube</td>
                                        <td>
                                            {{$setting->youtube}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Google+</td>
                                        <td>
                                            {{$setting->googleplus}}
                                        </td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div> <!-- end card-box/Product detai box -->
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
@stop
