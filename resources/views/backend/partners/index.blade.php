@extends('layouts.admin.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>{{$table}} Table</b></h4>
                <p class="text-muted font-13">

                    <a href="{{route('partners.create')}}" class="btn btn-success" role="button">Add
                        Partner</a><br><br>

                </p>
                @if((Session::has('Added')))
                    <div class="alert alert-success">{{ Session::get('Added') }}
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
                        <th data-field="partner_name_en" data-align="center" data-sortable="true">Partner Name English
                        </th>
                        <th data-field="partner_name_ar" data-align="center" data-sortable="true">Partner Name Arabic
                        </th>
                        <th data-field="partner_image" data-align="center" data-sortable="true">Image</th>
                        <th data-field="partner_link" data-align="center" data-sortable="true">Link</th>
                        {{--          <th data-field="date" data-sortable="true" data-formatter="dateFormatter">Order Date</th>
                                  <th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Price</th>--}}
                        <th data-field="status" data-align="center" data-sortable="true"
                            data-formatter="statusFormatter">Action
                        </th>

                    </tr>
                    </thead>


                    <tbody>
                    @foreach($partners as $partner)
                        <tr>
                            <td>{{$partner->department->title_en}}</td>
                            <td>{{$partner->title_en}}</td>
                            <td>{{$partner->title_ar}}</td>
                            <td>
                                <img src="{{URL::to('partners/'.$partner->department->title_en.'/'.$partner->image)}}"
                                     style="height: 100px; width: 100px;"></td>
                            <td>{{$partner->link}}</td>
                            <td style="text-align: center;"><a href="{{route('partners.show',$partner->id)}}"
                                                               class="btn btn-info" role="button">View</a>
                                <a href="{{route('partners.edit',$partner->id)}}" class="btn btn-warning" role="button">Edit</a>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deletepartners_{{$partner->id}}">Delete
                                </button>
                                <div class="modal" tabindex="-1" role="dialog" id="deletepartners_{{$partner->id}}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title" style="color: black"><b> Do you want to delete
                                                        this partner ? </b></h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-footer">
                                                {{ Form::open(['method' => 'delete','route' =>['partners.destroy',$partner->id]])}}

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
    </div
@stop
