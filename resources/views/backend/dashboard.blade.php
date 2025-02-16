@extends('layouts.admin.admin')
@section('content')
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                {{--         <div class="btn-group pull-right m-t-15">
                             <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light"
                                     data-toggle="dropdown" aria-expanded="false">Settings
                             </button>
                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                 <a class="dropdown-item" href="#">Dropdown One</a>
                                 <a class="dropdown-item" href="#">Dropdown Two</a>
                                 <a class="dropdown-item" href="#">Dropdown Three</a>
                                 <a class="dropdown-item" href="#">Dropdown Four</a>
                             </div>
                         </div>--}}

                <h4 class="page-title">Dashboard</h4>
                <p class="text-muted page-title-alt">Welcome to Admin Panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="widget-bg-color-icon card-box fadeInDown animated">
                    <div class="bg-icon bg-icon-info pull-left">
                        <i class="md md-add-shopping-cart text-info"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark"><b class="counter">{{$products}}</b></h3>
                        <p class="text-muted mb-0">Products</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="widget-bg-color-icon card-box">
                    <div class="bg-icon bg-icon-success pull-left">
                        <i class="md  md-photo-library text-success"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark"><b class="counter">{{$products_images}}</b></h3>
                        <p class="text-muted mb-0">Products Images</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="widget-bg-color-icon card-box">
                    <div class="bg-icon bg-icon-pink pull-left">
                        <i class="md md-attach-money text-pink"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark"><b class="counter">{{$jobs}}</b></h3>
                        <p class="text-muted mb-0">Jobs</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>


            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="widget-bg-color-icon card-box">
                    <div class="bg-icon bg-icon-pink pull-left">
                        <i class="md  md-local-grocery-store text-pink"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark"><b class="counter">{{$services}}</b></h3>
                        <p class="text-muted mb-0"> Services</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="widget-bg-color-icon card-box fadeInDown animated">
                    <div class="bg-icon bg-icon-info pull-left">
                        <i class="md  md-photo-album text-info"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark"><b class="counter">{{$services_images}}</b></h3>
                        <p class="text-muted mb-0">Services Images</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="widget-bg-color-icon card-box fadeInDown animated">
                    <div class="bg-icon bg-icon-success pull-left">
                        <i class="md  md-message text-success"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark"><b class="counter">{{$contacts}}</b></h3>
                        <p class="text-muted mb-0">Contacts</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="widget-bg-color-icon card-box">
                    <div class="bg-icon bg-icon-success pull-left">
                        <i class="md  md-people-outline text-success"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark"><b class="counter">{{$partners}}</b></h3>
                        <p class="text-muted mb-0">Partners</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="widget-bg-color-icon card-box">
                    <div class="bg-icon bg-icon-pink pull-left">
                        <i class="md  md-view-headline text-pink"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark"><b class="counter">{{$news}}</b></h3>
                        <p class="text-muted mb-0">News</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>


            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="widget-bg-color-icon card-box">
                    <div class="bg-icon bg-icon-purple pull-left">
                        <i class="md  md-people text-purple"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark"><b class="counter">{{$customers}}</b></h3>
                        <p class="text-muted mb-0">Customers</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>







        </div>

    {{--
            <div class="row">

                <div class="col-lg-12 col-xl-4">
                    <div class="card-box">
                        <h4 class="text-dark header-title m-t-0 m-b-30">Total Revenue</h4>

                        <div class="widget-chart text-center">
                            <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#fb6d9d"
                                   value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true
                                   data-thickness=".15"/>
                            <h5 class="text-muted m-t-20 font-16">Total sales made today</h5>
                            <h2 class="font-600">$75</h2>
                            <ul class="list-inline m-t-15">
                                <li class="list-inline-item">
                                    <h5 class="text-muted m-t-20 font-16">Target</h5>
                                    <h4 class="m-b-0">$1000</h4>
                                </li>
                                <li class="list-inline-item">
                                    <h5 class="text-muted m-t-20 font-16">Last week</h5>
                                    <h4 class="m-b-0">$523</h4>
                                </li>
                                <li class="list-inline-item">
                                    <h5 class="text-muted m-t-20 font-16">Last Month</h5>
                                    <h4 class="m-b-0">$965</h4>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col-lg-12 col-xl-8">
                    <div class="card-box">
                        <h4 class="text-dark header-title m-t-0">Sales Analytics</h4>
                        <div class="text-center">
                            <ul class="list-inline chart-detail-list">
                                <li class="list-inline-item">
                                    <h5><i class="fa fa-circle m-r-5" style="color: #5fbeaa;"></i>Desktops</h5>
                                </li>
                                <li class="list-inline-item">
                                    <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Tablets</h5>
                                </li>
                                <li class="list-inline-item">
                                    <h5><i class="fa fa-circle m-r-5" style="color: #dcdcdc;"></i>Mobiles</h5>
                                </li>
                            </ul>
                        </div>
                        <div id="morris-bar-stacked" style="height: 310px;"></div>
                    </div>
                </div>


            </div>
    --}}
    <!-- end row -->


    {{--
            <div class="row">

                <div class="col-lg-12 col-xl-6">
                    <div class="card-box">
                        <h4 class="text-dark header-title m-t-0">Total Sales</h4>

                        <div class="text-center">
                            <ul class="list-inline chart-detail-list">
                                <li class="list-inline-item">
                                    <h5><i class="fa fa-circle m-r-5" style="color: #5fbeaa;"></i>Desktops</h5>
                                </li>
                                <li class="list-inline-item">
                                    <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Tablets</h5>
                                </li>
                                <li class="list-inline-item">
                                    <h5><i class="fa fa-circle m-r-5" style="color: #ebeff2;"></i>Mobiles</h5>
                                </li>
                            </ul>
                        </div>

                        <div id="morris-area-with-dotted" style="height: 353px;"></div>

                    </div>

                </div>

                <!-- col -->

                <div class="col-lg-12 col-xl-6">
                    <div class="card-box">
                        <a href="#" class="pull-right btn btn-default btn-sm waves-effect waves-light">View All</a>
                        <h4 class="text-dark header-title m-t-0">Recent Orders</h4>
                        <p class="text-muted m-b-30 font-13">
                            Use the button classes on an element.
                        </p>

                        <div class="table-responsive">
                            <table class="table table-actions-bar m-b-0">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Item Name</th>
                                    <th>Up-Down</th>
                                    <th style="min-width: 80px;">Manage</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span data-plugin="peity-bar" data-colors="#5fbeaa,#5fbeaa" data-width="80"
                                              data-height="30">5,3,9,6,5,9,7,3,5,2</span></td>
                                    <td><img src="assets/images/products/iphone.jpg" class="thumb-sm pull-left m-r-10"
                                             alt=""> Apple iPhone
                                    </td>
                                    <td><span class="text-custom">+$230</span></td>
                                    <td>
                                        <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                        <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td><span data-plugin="peity-line" data-fill="#5fbeaa" data-stroke="#5fbeaa"
                                              data-width="80" data-height="30">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span></td>
                                    <td><img src="assets/images/products/samsung.jpg" class="thumb-sm pull-left m-r-10"
                                             alt=""> Samsung Phone
                                    </td>
                                    <td><span class="text-danger">-$154</span></td>
                                    <td>
                                        <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                        <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td><span data-plugin="peity-line" data-fill="#fff" data-stroke="#5fbeaa"
                                              data-width="80" data-height="30">5,3,9,6,5,9,7,3,5,2</span>
                                    <td><img src="assets/images/products/imac.jpg" class="thumb-sm pull-left m-r-10" alt="">
                                        Apple iPhone
                                    </td>
                                    <td><span class="text-custom">+$1850</span></td>
                                    <td>
                                        <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                        <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td><span data-plugin="peity-pie" data-colors="#5fbeaa,#ebeff2" data-width="30"
                                              data-height="30">1/5</span></td>
                                    <td><img src="assets/images/products/macbook.jpg" class="thumb-sm pull-left m-r-10"
                                             alt=""> Apple iPhone
                                    </td>
                                    <td><span class="text-danger">-$560</span></td>
                                    <td>
                                        <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                        <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span data-plugin="peity-bar" data-colors="#5fbeaa,#ebeff2" data-width="80"
                                              data-height="30">5,3,9,6,5,9,7,3,5,2</span></td>
                                    <td><img src="assets/images/products/lumia.jpg" class="thumb-sm pull-left m-r-10"
                                             alt=""> Lumia iPhone
                                    </td>
                                    <td><span class="text-custom">+$230</span></td>
                                    <td>
                                        <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                        <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- end col -->
            </div>
    --}}
    <!-- end row -->
    </div> <!-- container -->
@stop