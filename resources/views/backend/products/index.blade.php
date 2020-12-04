@extends('layouts.admin.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>{{$table}} Table</b></h4>
                <p class="text-muted font-13">

                    <a href="{{route('products.create')}}" class="btn btn-success" role="button">Add
                        Product</a><br><br>

                </p>
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    <i class="fa fa-times" aria-hidden="true"></i>
                    </div>
                @endforeach
                @if((Session::has('Added')))
                    <div class="alert alert-success">{{ Session::get('Added') }}
                        <i class="fa fa-check"
                           aria-hidden="true"></i>
                    </div>
                @endif
                @if((Session::has('Are Added')))
                    <div class="alert alert-success">{{ Session::get('Are Added') }}
                        <i class="fa fa-check"
                           aria-hidden="true"></i>
                    </div>
                @endif
                @if((Session::has('Updated')))
                    <div class="alert alert-success">{{ Session::get('Updated') }}
                        <i class="fa fa-check"
                           aria-hidden="true"></i>
                    </div>
                @endif
                @if((Session::has('Deleted')))
                    <div class="alert alert-success">{{ Session::get('Deleted') }}
                        <i class="fa fa-check"
                           aria-hidden="true"></i>
                    </div>
                @endif

                <table data-toggle="table"
                       data-search="true"
                       data-show-refresh="false"
                       data-show-toggle="false"
                       data-show-columns="true"
                       data-sort-name="id"
                       data-page-list="[5, 10, 20]"
                       data-page-size="5"
                       data-pagination="true" data-show-pagination-switch="true" class="table-bordered ">
                    <thead>
                    <tr>
                        {{-- <th data-field="id" data-sortable="true" data-formatter="invoiceFormatter">Order ID</th>--}}
                        <th data-field="department_name" data-align="center" data-sortable="true">Department Name</th>
                        <th data-field="name_ar" data-align="center" data-sortable="true">Name Arabic</th>
                        <th data-field="name_en" data-align="center" data-sortable="true">Name English</th>
                        <th data-field="image" data-align="center" data-sortable="true">Image</th>
                        <th data-field="intro_ar" data-align="center" data-sortable="true">Intro Arabic</th>
                        <th data-field="intro_en" data-align="center" data-sortable="true">Intro English</th>
                        <th data-field="description_ar" data-align="center" data-sortable="true">Description Arabic</th>
                        <th data-field="description_en" data-align="center" data-sortable="true">Description English
                        </th>
                        {{--          <th data-field="date" data-sortable="true" data-formatter="dateFormatter">Order Date</th>
                                  <th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Price</th>--}}
                        <th data-field="status" data-align="center" data-sortable="true"
                            data-formatter="statusFormatter">Action
                        </th>

                    </tr>
                    </thead>


                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->department->title_en}}</td>
                            <td>{{$product->title_ar}}</td>
                            <td>{{$product->title_en}}</td>
                            <td>
                                <img src="{{URL::to('products/'.$product->department->title_en.'/'.$product->image)}}"
                                     style="width: 100px; height: 100px;"></td>
                            <td>{{(str_limit($product->intro_ar,$limit=50,$end='...'))}}</td>
                            <td>{{(str_limit($product->intro_en,$limit=50,$end='...'))}}</td>
                            <td>{{(str_limit($product->description_ar,$limit=50,$end='...'))}}</td>
                            <td>{{(str_limit($product->description_en,$limit=50,$end='...'))}}</td>
                            <td style="text-align: center;">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#addimages_{{$product->id}}">Add Images
                                </button>
                                <div class="modal" tabindex="-1" role="dialog" id="addimages_{{$product->id}}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h3 style="color: black">Upload Images</h3>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>

                                            </div>

                                            <div class="modal-body">
                                                {{Form::open(['files'=>'true','method' => 'POST','route' =>'products.UploadImages'])}}
                                                {{Form::file('image[]',['multiple'=>'yes'])}}


                                                <input type="hidden" name="product_id" value="{{$product->id}}">

                                                <button type="submit" class="btn btn-success">Upload</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                    Close
                                                </button>
                                                {{ Form::close() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('products.show',$product->id)}}" class="btn btn-info" role="button">View</a>
                                <a href="{{route('products.edit',$product->id)}}" class="btn btn-warning" role="button">Edit</a>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deleteproducts_{{$product->id}}">Delete
                                </button>
                                <div class="modal" tabindex="-1" role="dialog" id="deleteproducts_{{$product->id}}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title" style="color: black"><b> Do you want to delete
                                                        this product ? </b></h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-footer">
                                                {{ Form::open(['method' => 'delete','route' =>['products.destroy',$product->id]])}}

                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Close
                                                </button>
                                                {{ Form::close() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
